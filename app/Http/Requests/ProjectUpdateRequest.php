<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\UploadedFile;

/**
 * Class ProjectUpdateRequest
 * @package App\Http\Requests
 * @property UploadedFile $image_url
 * @property boolean $hidden
 */
class ProjectUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     * @property boolean $hidden
     */
    public function rules(): array
    {
        return [
            'title' => 'nullable|string',
            'address' => 'nullable|string',
            'image_url'=>'nullable|image',
            'start_date'=>'nullable|date',
            'end_date'=>'nullable|date',
            'short_description' =>'nullable',
            'description' => 'nullable',
            'hidden'=>'nullable'
        ];
    }
}
