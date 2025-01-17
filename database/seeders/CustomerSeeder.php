<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        // 1. Khi seeder thì ta muốn xóa toàn bộ dữ liệu ở table đó
        DB::table('customers')->delete();

        // Reset id về lại 1
        DB::table('customers')->truncate();

        // 2. Ta sẽ thêm mới phim bằng lệnh create
        DB::table('customers')->insert([
            [
                'ho_va_ten' => "Duy Truyền",
                'email'     => "truyenramos420@gmail.com",
                'password'  => bcrypt(123123),
                'so_dien_thoai' => "0794694769",
                'dia_chi' => "11 Xuân Diệu",
                'gioi_tinh' => 0,
                'loai_tai_khoan' => 1,
                'ngay_sinh' => Carbon::today(),
            ],
            [
                'ho_va_ten' => "Duy Phong",
                'email'     => "duyphong@gmail.com",
                'password'  => bcrypt(123123),
                'so_dien_thoai' => "0794694769",
                'dia_chi' => "12 Xuân Diệu",
                'gioi_tinh' => 0,
                'loai_tai_khoan' => 1,
                'ngay_sinh' => Carbon::today(),
            ],
            [
                'ho_va_ten' => "Cẩm Anh",
                'email' => "camanh@gmail.com",
                'password'  => bcrypt(123123),
                'so_dien_thoai' => "0794694769",
                'dia_chi' => "13 Xuân Diệu",
                'gioi_tinh' => 0,
                'loai_tai_khoan' => 1,
                'ngay_sinh' => Carbon::today(),
            ],
            [
                'ho_va_ten' => "Văn Dũng",
                'email' => "vandung@gmail.com",
                'password'  => bcrypt(123123),
                'so_dien_thoai' => "0794694769",
                'dia_chi' => "14 Xuân Diệu",
                'gioi_tinh' => 0,
                'loai_tai_khoan' => 1,
                'ngay_sinh' => Carbon::today(),
            ],
            [
                'ho_va_ten' => "Lợi Nguyễn",
                'email' => "nguyenloi25012002@gmail.com",
                'password'  => bcrypt(123123),
                'so_dien_thoai' => "0905057615",
                'dia_chi' => "15 Xuân Diệu",
                'gioi_tinh' => 0,
                'loai_tai_khoan' => 1,
                'ngay_sinh' => Carbon::today(),
            ],
            [
                'ho_va_ten' => "Hồng Thu",
                'email' => "hongthu24032001@gmail.com",
                'password'  => bcrypt(123123),
                'so_dien_thoai' => "0905057616",
                'dia_chi' => "16 Xuân Diệu",
                'gioi_tinh' => 1,
                'loai_tai_khoan' => 1,
                'ngay_sinh' => Carbon::today(),
            ],
            [
                'ho_va_ten' => "Van Nhat",
                'email' => "vannhat1711@gmail.com",
                'password'  => bcrypt(123123),
                'so_dien_thoai' => "0905057617",
                'dia_chi' => "17 Xuân Diệu",
                'gioi_tinh' => 0,
                'loai_tai_khoan' => 1,
                'ngay_sinh' => Carbon::today(),
            ],
            [
                'ho_va_ten' => "Gia Minh",
                'email' => "giaminh2221@gmail.com",
                'password'  => bcrypt(123123),
                'so_dien_thoai' => "0905057618",
                'dia_chi' => "18 Xuân Diệu",
                'gioi_tinh' => 0,
                'loai_tai_khoan' => 1,
                'ngay_sinh' => Carbon::today(),
            ],
            [
                'ho_va_ten' => "Phạm Phúc",
                'email' => "phuc0985531639@gmail.com",
                'password'  => bcrypt(123123),
                'so_dien_thoai' => "0905057619",
                'dia_chi' => "19 Xuân Diệu",
                'gioi_tinh' => 0,
                'loai_tai_khoan' => 1,
                'ngay_sinh' => Carbon::today(),
            ],
            [
                'ho_va_ten' => "Trần Quang Sang",
                'email' => "tranquangsang2k1@gmail.com",
                'password'  => bcrypt(123123),
                'so_dien_thoai' => "0905057610",
                'dia_chi' => "10 Xuân Diệu",
                'gioi_tinh' => 0,
                'loai_tai_khoan' => 1,
                'ngay_sinh' => Carbon::today(),
            ],
            [
                'ho_va_ten' => "Trần Nguyễn Duy Khánh",
                'email' => "duykhanhtran17062003@gmail.com",
                'password'  => bcrypt(123123),
                'so_dien_thoai' => "0905057610",
                'dia_chi' => "10 Xuân Diệu",
                'gioi_tinh' => 0,
                'loai_tai_khoan' => 1,
                'ngay_sinh' => Carbon::today(),
            ],
            [
                'ho_va_ten' => "Hồ Thị Thanh Thanh",
                'email' => "thanhchuot1806@gmail.com",
                'password'  => bcrypt(123123),
                'so_dien_thoai' => "0905057610",
                'dia_chi' => "10 Xuân Diệu",
                'gioi_tinh' => 0,
                'loai_tai_khoan' => 1,
                'ngay_sinh' => Carbon::today(),
            ],
        ]);
    }
}
