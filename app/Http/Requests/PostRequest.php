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
        $data = [
            'title' => ['required', 'string', 'max:255'],
            'category_id' => ['required'],
            'excerpt' => ['string', 'min:15'],
            'body' => ['string', 'min:25'],
        ];

        if ($this->isMethod('post')) {
            $data['image'] = ['required', 'image', 'mimes:png,jpeg,jpg'];
        }

        if (!$this->isMethod('post')) {
            $data['image'] = ['nullable', 'image', 'mimes:png,jpeg,jpg'];
        }

        return $data;
    }
}
