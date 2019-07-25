<?php

use Illuminate\Database\Seeder;

class Buyer_hopeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
     $param = [
            'user_id' =>1,
            'hope_workstation' => '大手町', 
            'hope_comute' => 40, 
            'hope_budjet' => 4500,
            'hope_payment' => 12, 
            'hope_madori' => '3LDK', 
            'hope_width' => 70, 
            'hope_secondhand' => 0, 
            'hope_mansion' => 0, 
       
            ];
            
            DB::table('buyer_hopes') -> insert($param);
    
        
    
        $param = [
            'user_id' =>2,
            'hope_workstation' => '大手町', 
            'hope_comute' => 30, 
            'hope_budjet' => 5000,
            'hope_payment' => 15, 
            'hope_madori' => '3LDK', 
            'hope_width' => 70, 
            'hope_secondhand' => 0, 
            'hope_mansion' => 0, 
       
            ];
            
            DB::table('buyer_hopes') -> insert($param);
    
        
        $param = [
            'user_id' =>3,
            'hope_workstation' => '新宿', 
            'hope_comute' => 30, 
            'hope_budjet' => 4000,
            'hope_payment' => 12, 
            'hope_madori' => '3LDK', 
            'hope_width' => 70, 
            'hope_secondhand' => 1,
            'hope_mansion' => 1, 
         
            ];
            
            DB::table('buyer_hopes') -> insert($param);

        $param = [
            'user_id' =>4,
            'hope_workstation' => '品川', 
            'hope_comute' => 40, 
            'hope_budjet' => 4500,
            'hope_payment' => 10, 
            'hope_madori' => '4LDK', 
            'hope_width' => 100, 
            'hope_secondhand' => 1, 
            'hope_mansion' => 2, 
         
            ];
            
            DB::table('buyer_hopes') -> insert($param);

        
    }
}
