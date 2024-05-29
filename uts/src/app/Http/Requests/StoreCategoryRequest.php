<?php

namespace App\Http\Requests;

use App\Models\Category;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('category_create');
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:categories', // Validasi nama harus ada, string, maksimal 255 karakter, dan unik dalam tabel kategori
        ];
    }
}
