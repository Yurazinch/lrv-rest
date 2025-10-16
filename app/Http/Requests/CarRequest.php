<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    /**
     * Определите, имеет ли пользователь право сделать этот запрос.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Получите правила проверки, применяемые к запросу.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'brand' => ['required', 'string'],
            'model' => ['required', 'string'],
            'price' => ['required', 'integer'],
        ];
    }
}
