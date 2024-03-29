<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StudentStoreRequest;
use App\Http\Requests\StudentUpdateRequest;
use App\Http\Resources\StudentCollection;
use App\Http\Resources\StudentResource;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     *  @OA\Get(
     *      tags={"/students"},
     *      summary="Listar todos os estudantes.",
     *      description="Retorna todos os estudantes de forma paginada.",
     *      path="/students",
     *      security={{"bearerAuth": {}}},
     *      @OA\Parameter(
     *          name="page",
     *          required=false,
     *          in="query",
     *          description="Número da página",
     *          @OA\Schema(type="integer"),
     *          style="form"
     *      ),
*          @OA\Parameter(
     *          name="search",
     *          required=false,
     *          in="query",
     *          description="Termo de busca",
     *          @OA\Schema(type="string"),
     *          style="form"
     *      ),
     *      @OA\Response(
     *          response="200", description="Lista de estudantes."
     *      ),
     *  )
     *
     * @return StudentCollection
     */
    public function index(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'search' => 'string|nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(["message", "Bad Request"], 400);
        }


        if ($request->search) {
            return new StudentCollection(
                Student::where('enrollment', 'like', '%' . $request->search . '%')
                    ->orWhere('CPF', 'like', '%' . $request->search . '%')
                    ->orWhere('name', 'like', '%' . $request->search . '%')
                    ->orWhere('birthday', 'like', '%' . $request->search . '%')
                    ->orWhere('gender', 'like', '%' . $request->search . '%')
                    ->orWhere('email', 'like', '%' . $request->search . '%')
                    ->orWhere('cellphone', 'like', '%' . $request->search . '%')
                    ->orWhere('githubProfile', 'like', '%' . $request->search . '%')
                    ->orWhere('campusName', 'like', '%' . $request->search . '%')
                    ->orWhere('courseName', 'like', '%' . $request->search . '%')
                    ->paginate());
        }

        return new StudentCollection(Student::paginate());
    }

    /**
     *  @OA\Post(
     *      tags={"/students"},
     *      summary="Cria um estudante.",
     *      description="Cria um novo estudante e persiste no banco de dados.",
     *      path="/students",
     *      security={{"bearerAuth": {}}},
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="enrollment", type="string"),
     *              @OA\Property(property="CPF", type="string"),
     *              @OA\Property(property="name", type="string"),
     *              @OA\Property(property="motherName", type="string"),
     *              @OA\Property(property="fatherName", type="string"),
     *              @OA\Property(property="birthday", type="string"),
     *              @OA\Property(property="gender", type="string"),
     *              @OA\Property(property="email", type="string"),
     *              @OA\Property(property="cellphone", type="string"),
     *              @OA\Property(property="githubProfile", type="string"),
     *              @OA\Property(property="campusName", type="string"),
     *              @OA\Property(property="courseName", type="string"),
     *              @OA\Property(property="currentPeriod", type="integer"),
     *              @OA\Property(property="group", type="integer"),
     *          ),
     *      ),
     *      @OA\Response(
     *          response="201", description="Novo estudante criado."
     *      ),
     *  )
     *
     * @return StudentResource
     */
    public function store(StudentStoreRequest $request)
    {
        $student = Student::create($request->validated());
        return new StudentResource($student);
    }

    /**
     *  @OA\Get(
     *      tags={"/students"},
     *      summary="Exibe um estudante.",
     *      description="Exibe um estudante a partir do seu ID.",
     *      path="/students/{id}",
     *      security={{"bearerAuth": {}}},
     *      @OA\Parameter(
     *          name="id",
     *          required=true,
     *          in="path",
     *          description="Id do estudante",
     *          @OA\Schema(type="integer"),
     *      ),
     *      @OA\Response(
     *          response="200", description="Dados do estudante."
     *      ),
     *  )
     *
     * @param integer $id
     * @return StudentResource
     */
    public function show(Student $student)
    {
        return new StudentResource($student);
    }

    /**
     *  @OA\Put(
     *      tags={"/students"},
     *      summary="Alterar um estudante.",
     *      description="Altera um estudante e persiste no banco de dados.",
     *      path="/students/{id}",
     *      security={{"bearerAuth": {}}},
     *      @OA\Parameter(
     *          name="id",
     *          required=true,
     *          in="path",
     *          description="Id do estudante",
     *          @OA\Schema(type="integer"),
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="enrollment", type="string"),
     *              @OA\Property(property="CPF", type="string"),
     *              @OA\Property(property="name", type="string"),
     *              @OA\Property(property="motherName", type="string"),
     *              @OA\Property(property="fatherName", type="string"),
     *              @OA\Property(property="birthday", type="string"),
     *              @OA\Property(property="gender", type="string"),
     *              @OA\Property(property="email", type="string"),
     *              @OA\Property(property="cellphone", type="string"),
     *              @OA\Property(property="githubProfile", type="string"),
     *              @OA\Property(property="campusName", type="string"),
     *              @OA\Property(property="courseName", type="string"),
     *              @OA\Property(property="currentPeriod", type="integer"),
     *              @OA\Property(property="group", type="integer"),
     *          ),
     *      ),
     *      @OA\Response(
     *          response="200", description="Estudante alterado."
     *      ),
     *  )
     *
     * @return StudentResource
     */
    public function update(StudentUpdateRequest $request, Student $student)
    {
        $student->update($request->validated());
        return new StudentResource($student);
    }

    /**
     *  @OA\Delete(
     *      tags={"/students"},
     *      summary="Remove um estudante.",
     *      description="Remove um estudante e o exclui do banco de dados.",
     *      path="/students/{id}",
     *      security={{"bearerAuth": {}}},
     *      @OA\Parameter(
     *          name="id",
     *          required=true,
     *          in="path",
     *          description="Id do estudante",
     *          @OA\Schema(type="integer"),
     *      ),
     *      @OA\Response(
     *          response="204", description="Estudante excluído."
     *      ),
     *  )
     *
     * @return null
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return response()->json(null, 204);
    }
}
