<?php

namespace App\Http\Requests;

use App\Models\Category;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCategoryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids' => 'required|array',
            'ids.*' => function ($attribute, $value, $fail) {
                // Cek apakah ada item menu yang terkait dengan kategori yang akan dihapus
                if (Menu::whereIn('category_id', $value)->exists()) {
                    $fail('Cannot delete category because it has associated menu items.');
                }
            },
        ];
    }
}
