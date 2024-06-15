<?php

namespace App\Http\Requests\v1\Attendance;

use Illuminate\Foundation\Http\FormRequest;

class AttendanceAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image_id' => 'required|exists:images,id',
            'images' => 'required|array',
            'images.*' => 'required|string',
            'device_id' => 'required|exists:devices,id',
            'time' => 'required|date_format:H:i',
            'score' => 'required|numeric'
        ];        
    }
}