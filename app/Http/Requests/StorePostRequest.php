<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|unique:posts|max:255',
            'blog' => 'required',
            'email' => 'required|unique:posts',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Sarlavhani to'ldirish majburiy",
            'title.unique' => "Sarlavha takrorlanmasligi kerak",
            'blog.required' =>"Maqola mazmunini kiriting",
            'email.required' => "Emailni to'ldirish majburiy",
            'email.unique' => "Email takrorlanmasligi kerak",
        ];
    }
}
