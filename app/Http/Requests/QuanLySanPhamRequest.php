<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuanLySanPhamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'ten_san_pham' => 'required|min:3|max:255',
            'so_luong' => 'required|numeric',
            'gia_ban' => 'required|numeric',
            'gia_khuyen_mai' => 'required|numeric',
            'tinh_trang' => 'required|boolean',
            'mo_ta_ngan' => 'required|min:3|max:255',
            'mo_ta_chi_tiet' => 'required|min:3',
            'tag' => 'required|min:3',
        ];
    }
    public function messages()
    {
        return [
            'ten_san_pham.required' => 'Tên sản phẩm không được để trống',
            'ten_san_pham.min' => 'Tên sản phẩm phải có ít nhất 3 ký tự',
            'so_luong.required' => 'Số lượng không được để trống',
            'gia_ban.required' => 'Giá bán không được để trống',
            'gia_khuyen_mai.required' => 'Giá khuyến mãi không được để trống',
            'tinh_trang.required' => 'Tình trạng không được để trống',
            'mo_ta_ngan.required' => 'Mô tả ngắn không được để trống',
            'mo_ta_ngan.min' => 'TMô tả ngắn phải có ít nhất 3 ký tự',
            'mo_ta_chi_tiet.required' => 'Mô tả chi tiết không được để trống',
            'mo_ta_chi_tiet.min' => 'Mô tả chi tiết phải có ít nhất 3 ký tự',
            'tag.required' => 'Tag không được để trống',
        ];
    }
}
