 <?php

namespace App\Http\Request;

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
            'name' => 'required|unique:users,name',
            'password' =>'required',
            'password1' => 'required_with:password|same:password',
            'email' => 'required|email',
            'address' => 'required',
            'phone' =>'required'
        ];
    }
     public function messages()
    {
        return 
        [
            'name.required' => trans('msg.name_required'),
            'name.unique' => trans('msg.name_unique'),     
            'password.required' => trans('msg.password_required'),
            'password1.same' =>  trans('msg.password1_same'),
            'email.required' =>  trans('msg.email_required'),
            'address.required' => trans('msg.address_required'),
            'phone.required' => trans('msg.phone_required')
        ];
    }
}
