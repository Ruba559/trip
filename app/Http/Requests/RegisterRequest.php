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
        
            'first_name' => 'required|string|max:20',
            'last_name' => 'required|string|max:20',
            'phone_number' =>'required|max:20|unique:users,phone_number,'.$this -> id,
            'Email'  => 'required|email|unique:users,Email,'.$this -> id,
            'password'   => 'required_without:id'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'This field is required',
            'unique' => 'This email is already in use',
            'phone_number.unique' => 'This phone number is already in use',
            'first_name.string' => 'You cannot enter more than 20 characters',
            'last_name.string' => 'You cannot enter more than 20 characters',
        
        ];
    }
}
