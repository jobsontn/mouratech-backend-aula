<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;

class TokenController extends Controller
{
    /*
     *  @OA\Post(
     *      tags={"/tokens"},
     *      summary="Cria um token de acesso.",
     *      description="Cria um novo token de acesso e persiste no banco de dados.",
     *      path="/tokens",
     *      security={{"bearerAuth": {}}},
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="device", type="string"),
     *              @OA\Property(property="abilities", type="array",
     *                  @OA\Items(
     *                      type="array",
     *                      @OA\Items()
     *                  ),
     *              ),
     *          ),
     *      ),
     *      @OA\Response(
     *          response="201", description="Token de acesso criado."
     *      ),
     *  )
     *
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $token = $request->user()->createToken(
            $request->has('device') ? $request->get('device') : 'access_token',
            $request->has('abilities') ? $request->get('abilities') : ['*'],
        );
        return response()->json(['token' => $token->plainTextToken]);
    }

    /*
     *  @OA\Delete(
     *      tags={"/tokens"},
     *      summary="Remove um token de acesso.",
     *      description="Remove um token de acesso e o exclui do banco de dados.",
     *      path="/tokens/{id}",
     *      security={{"bearerAuth": {}}},
     *      @OA\Parameter(
     *          name="token",
     *          required=true,
     *          in="path",
     *          description="Id do Token",
     *          @OA\Schema(type="integer"),
     *      ),
     *      @OA\Response(
     *          response="204", description="Token de acesso excluído."
     *      ),
     *  )
     *
     * @return null
     */
    public function destroy(Request $request, PersonalAccessToken $token)
    {
        $request->user()->tokens()->where('id', $token->id)->delete();
        return response()->json(null, 204);
    }
}
