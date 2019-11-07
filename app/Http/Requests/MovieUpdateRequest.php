<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieUpdateRequest extends FormRequest
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


//'title', 'year', 'image', 'rating', 'category_id', 'country_id', 'director_id'

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'title' => 'required|max:255',
            'year' => 'required',
            'image' => 'required|image',
            'rating'=> 'required',
            'category_id'=> 'required|exists:categorys,id',
            'country_id'=> 'required|exists:countrys,id',
            'director_id'=> 'required|exists:directors,id',


        ];
    }
}
