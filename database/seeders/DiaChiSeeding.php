<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiaChiSeeding extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dia_chis')->delete();

        DB::table('dia_chis')->truncate();

        DB::table('dia_chis')->insert([
            [
                'dia_chi'           =>  '202 Võ Nguyên Giáp, Đà Nẵng',
                'ten_nguoi_nhan'    =>  'Thành Long',
                'so_dien_thoai'     =>  '123456789',
                'id_khach_hang'     =>  1,
            ],
            [
                'dia_chi'           =>  '31 Mẹ Nhu, Đà Nẵng',
                'ten_nguoi_nhan'    =>  'Ho Minh Canh',
                'so_dien_thoai'     =>  '038357057',
                'id_khach_hang'     =>  1,
            ],
            // [
            //     'dia_chi'           =>  '11 Nguyễn Trãi, Đà Nẵng',
            //     'ten_nguoi_nhan'    =>  'Quốc Huy',
            //     'so_dien_thoai'     =>  '09057894245',
            //     'id_khach_hang'     =>  2,
            // ],
            // [
            //     'dia_chi'           =>  '11 Hàm Nghi, Đà Nẵng',
            //     'ten_nguoi_nhan'    =>  'Văn Mạnh',
            //     'so_dien_thoai'     =>  '0905789280',
            //     'id_khach_hang'     =>  3,
            // ],
            // [
            //     'dia_chi'           =>  '34 Nguyễn Văn Thoại, Đà Nẵng',
            //     'ten_nguoi_nhan'    =>  'Minh Tiến',
            //     'so_dien_thoai'     =>  '0905789754',
            //     'id_khach_hang'     =>  4,
            // ],
            // [
            //     'dia_chi'           =>  '34 Cổ Mân Cúc 1, Đà Nẵng',
            //     'ten_nguoi_nhan'    =>  'Duy Khánh',
            //     'so_dien_thoai'     =>  '0905789967',
            //     'id_khach_hang'     =>  6,
            // ],
        ]);
    }
}
