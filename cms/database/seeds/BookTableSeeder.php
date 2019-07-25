<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' =>2,
            'buyer_name' => 'テスト太郎', 
            'buyer_age' => 30, 
            'buyer_email' => 'test2@test.com', 
            'buyer_postcode' => 1350042,
            'buyer_address' => '江東区木場', 
            'buyer_address2' => '１－１－１－１０２', 

            ];
            
            DB::table('books') -> insert($param);

 $param = [
            'user_id' =>3,
            'buyer_name' => 'テスト花子', 
            'buyer_age' => 40, 
            'buyer_email' => 'test3@test.com', 
            'buyer_postcode' => 1000001,
            'buyer_address' => '千代田区丸の内', 
            'buyer_address2' => '１－１－１', 

            ];
            
            DB::table('books') -> insert($param);

 $param = [
            'user_id' =>4,
            'buyer_name' => 'テスト次郎', 
            'buyer_age' => 35, 
            'buyer_email' => 'test4@test.com', 
            'buyer_postcode' => 1202001,
            'buyer_address' => '中央区日本橋', 
            'buyer_address2' => '１－２－４', 

            ];
            
            DB::table('books') -> insert($param);

    
    }
}
