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
class ProjectRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'address' => 'required|string',
            'image_url' => 'required|image',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'short_description' => 'required',
            'description' => 'required',
            'hidden' => 'nullable'
        ];
    }
}
