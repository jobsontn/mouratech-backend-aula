<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 *  @OA\Server( url="https://jobsontenorio.com.br/api/"),
 *  @OA\Info(
 *     title="API Moura Tech (Uso Educacional)",
 *     version="0.0.1",
 *      @OA\Contact(
 *          email="jobsontenorio@gmail.com"
 *      ),
 *  ),
 *  *  @OA\SecurityScheme(
 *      type="http",
 *      scheme="bearer",
 *      securityScheme="bearerAuth"
 *  ),
 */

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
