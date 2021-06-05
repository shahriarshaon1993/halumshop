<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSliderRequest extends FormRequest
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
            "title" => "required|min:10|max:128|unique:sliders,title,{$this->slider->id}",
            "description" => "min:30|max:200",
            "image" => "mimes:jpg,png,jpeg,gif,svg|max:2048",
        ];
    }
}
