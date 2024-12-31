<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaGiamGiaSeeding extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ma_giam_gias')->delete();

        DB::table('ma_giam_gias')->truncate();

        DB::table('ma_giam_gias')->insert([
            [
                'code' => 'DISCOUNT01',
                'tinh_trang' => 1,
                'ngay_bat_dau' => '2024-09-01',
                'ngay_ket_thuc' => '2024-09-30',
                'loai_giam_gia' => 0,
                'so_giam_gia' => 100000,
                'so_tien_toi_da' => 5000000,
                'don_hang_toi_thieu' => 2500000,
            ],
            [
                'code' => 'DISCOUNT02',
                'tinh_trang' => 0,
                'ngay_bat_dau' => '2024-07-15',
                'ngay_ket_thuc' => '2024-09-15',
                'loai_giam_gia' => 1,
                'so_giam_gia' => 20000,
                'so_tien_toi_da' => 200000,
                'don_hang_toi_thieu' => 80000,
            ],
            [
                'code' => 'DISCOUNT03',
                'tinh_trang' => 1,
                'ngay_bat_dau' => '2024-07-20',
                'ngay_ket_thuc' => '2024-09-20',
                'loai_giam_gia' => 0,
                'so_giam_gia' => 150000,
                'so_tien_toi_da' => 1500000,
                'don_hang_toi_thieu' => 750000,
            ],
            [
                'code' => 'DISCOUNT04',
                'tinh_trang' => 0,
                'ngay_bat_dau' => '2024-07-05',
                'ngay_ket_thuc' => '2024-09-25',
                'loai_giam_gia' => 1,
                'so_giam_gia' => 30000,
                'so_tien_toi_da' => 3000000,
                'don_hang_toi_thieu' => 1000000,
            ],
            [
                'code' => 'DISCOUNT05',
                'tinh_trang' => 1,
                'ngay_bat_dau' => '2024-07-09',
                'ngay_ket_thuc' => '2024-09-18',
                'loai_giam_gia' => 0,
                'so_giam_gia' => 15000,
                'so_tien_toi_da' => 250000,
                'don_hang_toi_thieu' => 100000,
            ],
            [
                'code' => 'DISCOUNT07',
                'tinh_trang' => 0,
                'ngay_bat_dau' => '2024-07-12',
                'ngay_ket_thuc' => '2024-09-12',
                'loai_giam_gia' => 1,
                'so_giam_gia' => 35000,
                'so_tien_toi_da' => 2500000,
                'don_hang_toi_thieu' => 300000,
            ],
            [
                'code' => 'DISCOUNT09',
                'tinh_trang' => 1,
                'ngay_bat_dau' => '2024-07-09',
                'ngay_ket_thuc' => '2024-09-22',
                'loai_giam_gia' => 0,
                'so_giam_gia' => 40000,
                'so_tien_toi_da' => 4000000,
                'don_hang_toi_thieu' => 200000,
            ],
            [
                'code' => 'DISCOUNT09',
                'tinh_trang' => 0,
                'ngay_bat_dau' => '2024-07-03',
                'ngay_ket_thuc' => '2024-09-17',
                'loai_giam_gia' => 1,
                'so_giam_gia' => 45000,
                'so_tien_toi_da' => 4500000,
                'don_hang_toi_thieu' => 900000,
            ],
            [
                'code' => 'DISCOUNT09',
                'tinh_trang' => 1,
                'ngay_bat_dau' => '2024-07-11',
                'ngay_ket_thuc' => '2024-09-19',
                'loai_giam_gia' => 0,
                'so_giam_gia' => 50000,
                'so_tien_toi_da' => 3600000,
                'don_hang_toi_thieu' => 650000,
            ],
            [
                'code' => 'DISCOUNT10',
                'tinh_trang' => 0,
                'ngay_bat_dau' => '2024-07-14',
                'ngay_ket_thuc' => '2024-09-14',
                'loai_giam_gia' => 1,
                'so_giam_gia' => 55000,
                'so_tien_toi_da' => 4200000,
                'don_hang_toi_thieu' => 1200000,
            ],
        ]);
    }
}
