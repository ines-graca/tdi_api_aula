<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class WebUpdateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            //

            'title'=> 'unique:movies|string|max:255',
            'year'=> 'string|max:255',
            'rating'=> 'string|max:255',
            'image'=> 'image',
            'category_id' =>'exists:categories,id',
            'director_id'=> 'exists:directors,id',
            'country_id'=> 'exists:countries,id'

        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->redirectTo('movies')->withErrors($validator));
    }

}
