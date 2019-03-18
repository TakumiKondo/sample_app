<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'register') {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'password' => 'confirmed|required',
        ];
    }

    /**
     * Validation error messages.
     *
     * @return array
     */
    public function messages(){
        return[
            'name.required' => '名前を入力してください。',
            'email.required' => 'Emailを入力してください。',
            'password.confirmed' => 'パスワードが一致しません。',
            'password.required' => 'パスワードを入力してください。',
        ];
    }
}
