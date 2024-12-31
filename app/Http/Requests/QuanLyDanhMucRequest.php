<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuanLyDanhMucRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }


    public function rules(): array
    {
        return [
            'ten_danh_muc' => 'required|min:3|max:255',
            'slug_danh_muc' => 'required',
            'icon_danh_muc' => 'required|numeric',
            'tinh_trang' => 'required|boolean',
            // 'id_danh_muc_cha' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'ten_danh_muc.required' => 'Tên danh muc không được để trống',
            'ten_danh_muc.min' => 'Tên sản phẩm phải có ít nhất 3 ký tự',
            'slug_danh_muc.required' => 'Slug danh mục không được để trống',
            'icon_danh_muc.required' => 'Icon danh mục không được để trống',
            'gia_khuyen_mai.required' => 'Giá khuyến mãi không được để trống',
            'tinh_trang.required' => 'Tình trạng không được để trống',
            // 'id_danh_muc_cha.required' => 'Danh mục cha không được để trống',

        ];
    }
}
