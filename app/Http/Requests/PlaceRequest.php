<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaceRequest extends FormRequest
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
        
            'Email' => 'required_without:id',
            'place_name' => 'required_without:id',
            'stars' =>'required_without:id',
            'address'  => 'required_without:id',
        
        ];
    }

      /*public function messages()
    {
          return [
            'required' => 'This field is required',
            'unique' => 'This email is already in use',
            'phone_number.unique' => 'This phone number is already in use',
            'first_name.string' => 'You cannot enter more than 20 characters',
            'last_name.string' => 'You cannot enter more than 20 characters',
        
        ];
    }*/
}
