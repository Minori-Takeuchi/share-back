<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
                'comment' => 'required|max:300',
            ];
        }else {
            return [
                'user_id' => 'required',
                'post_id' => 'required',
                'comment' => 'required|max:300',
            ];
        }
    }
}
