<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoStoreRequest extends FormRequest
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
            'title'=>'required|min:3|max:7|numeric',
            'description'=>'required',
            'icon'=>'mimes:png,jpg|max:2048'
        ];
    }
    public function messages(){
        return[
            'title.required'=>'Sarlavha tôldirilishi shart !',
            'title.min'=>'Sarlavhada kamida 3ta belgi bôlsin',
            'description.required'=>'tasvirlash shart!',
            'icon.mimes'=>'rasm turi png yoki jpg bôlishi kerak',
            'icon.max'=>'rasm hajmi 200mbdan oshmasin',
        ];
    }
}
