<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
        
            'count_people' => 'required',
            'price' => 'required',
            
        
        ];
    }

         public function messages()
    {
          return [
              
            'required.price' => 'This field price is required',
            'required.count_people' => 'This field count people is required',
           
        
        ];
    } 
    
}
