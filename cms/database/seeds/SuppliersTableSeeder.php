<?php

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $param = [
            'user_id' => 4,
            'supplier_name' => 'テスト不動産', 
            'supplier_branch' => '東京支店', 
            'supplier_email' => 'supplier@test.com', 
            'supplier_tel' => 0311111111, 
            'supplier_postcode' => 1000001,
            'supplier_address' => '東京都千代田区丸の内', 
            'supplier_address2' => '１－１－１－１０２', 
            'supplier_license' => '(都)11111111', 
            'supplier_rep' => '山田太郎', 
            
            ];
            
            DB::table('suppliers') -> insert($param);

    }
}
