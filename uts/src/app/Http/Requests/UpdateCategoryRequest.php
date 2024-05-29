<?php

namespace App\Http\Requests;

use App\Models\Category;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('category_edit');
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:categories,name,' . $this->route('category')->id, // Validasi nama harus ada, string, maksimal 255 karakter, dan unik dalam tabel kategori, kecuali untuk kategori saat ini
        ];
    }
}
