<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule; 

class UpdateProjectRequest extends FormRequest
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
        return [
            'project_title' => ['required', Rule::unique('projects')->ignore($this->project), 'max:100'],
            'cover_img' => ['required', 'max:300'],
            'slug' => ['required', Rule::unique('projects')->ignore($this->project), 'max:100'],
            'project_desc' => ['required', 'max:1000'],
            'type_id' => ['required', 'exists:types,id'],
        ];
    }

    public function messages(){
        return[
            'project_title.required' => 'Project title is required.',
            'project_title.unique' => 'Project title already exists. Please choose another title.',
            'project_title.max' => 'Project title is too long.',
            'cover_img.required' => 'Cover image is required.',
            'cover_img.max' => 'Cover image url is too long.',
            'slug.required' => 'Slug is required.',
            'slug.unique' => 'Slug already exists. Please choose another slug.',
            'slug.max' => 'Slug is too long.',
            'project_desc.required' => 'Project description is required.',
            'project_desc.max' => 'Project description is too long.',
            'type_id.required' => 'Type is required.',
        ];
    }
}
