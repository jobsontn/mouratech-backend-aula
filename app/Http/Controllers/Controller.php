<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 *  @OA\Server( url="http://localhost:8000/api/"),
 *  @OA\Info(
 *     title="API Moura Tech (Uso Educacional)",
 *     version="0.0.1",
 *      @OA\Contact(
 *          email="jobsontenorio@gmail.com"
 *      ),
 *  ),
 */

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
