<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
        if($this->getMethod() === 'PUT') {
            return [
                'content' => 'required|max:300',
            ];
        }else {
            return [
                'user_id' => 'required',
                'content' => 'required|max:300',
                'is_public' => 'required',
            ];
        }
    }
}
