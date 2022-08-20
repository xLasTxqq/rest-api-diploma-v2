<?php

namespace App\Servises;

use Illuminate\Http\Request;
use Illuminate\Support\ValidatedInput;

class VacancyApi
{

    static public function getVacancy(int $id)
    {
        # code...
    }

    static public function getVacancies(ValidatedInput $request)
    {
        return SampleResponse::returnResponse();
    }
}
