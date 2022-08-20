<?php

namespace App\Http\Requests;

use App\Servises\SampleResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class VacancyGetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'page' => 'filled|integer|min:1'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(SampleResponse::returnResponse(errors: $validator->errors()->toArray(), code: 422));
    }
}
