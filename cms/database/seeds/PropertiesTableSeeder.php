<?php

use Illuminate\Database\Seeder;

class PropertiesTableSeeder extends Seeder
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
        'property_name' =>'葛西1',
        'property_station1' => '葛西',
        'property_walk1' => 5,
        'property_station2' => '西葛西',
        'property_walk2' => 10,
        'property_station3' => '',
        'property_walk3' => 0,
        'property_plice' => 4500,
        'property_madori' => '3LDK',
        'property_width' => 72,
        'property_postcode' => 1440001,
        'property_address' => '東京都江戸川区葛西',
        'property_address2' => '1-1-102',
        'property_start' =>  date('2019-12-30'),
        'property_build' =>  date('2018-10-31'),
        'property_number' => 110,
        'property_secondhand' => 1,
        'property_mansion' => 1,
        'property_comment' => '日当たり良好',
      ];
            
            DB::table('properties') -> insert($param);
        
         $param = [
        'user_id' => 4,
        'property_name' => '北千住1',
        'property_station1' => '北千住',
        'property_walk1' => 5,
        'property_station2' => '南千住',
        'property_walk2' => 10,
        'property_station3' => '',
        'property_walk3' => 0,
        'property_plice' => 5000,
        'property_madori' => '3LDK',
        'property_width' => 80,
        'property_postcode' => 1300001,
        'property_address' => '東京都足立区北千住',
        'property_address2' => '1-1-102',
        'property_start' =>  date('2019-12-30'),
        'property_build' =>  date('2018-10-31'),
        'property_number' => 500,
        'property_secondhand' => 1,
        'property_mansion' => 1,
        'property_comment' => '通勤利便性最高',
      ];
            
            DB::table('properties') -> insert($param);
        
    }
}
