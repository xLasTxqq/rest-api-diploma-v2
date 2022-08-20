<?php

namespace App\Servises;

use Symfony\Component\HttpFoundation\Response;

class SampleResponse
{
    public static function returnResponse(array $data = [], $code = 200, $errors = []): Response
    {
        return response(['data' => $data, 'status' => $code, 'errors' => $errors], $code);
    }
}
