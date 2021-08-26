<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\roombook;

class RoomBookSeeder extends Seeder
{
    




    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'user_id'=>'1',
            'name'=>'required',
'number'=>'1',
'phone'=>'1',
'city'=>'required',
'email'=>'required',
'street'=>'required',
'post_code'=>'required',
'country'=>'required',
'arrive'=>'required',
'depart'=>'required',
'room'=>'required',
'people'=>'required',
'bedding'=>'required',
'comments'=>'required',
            ],
         
        ];

        foreach ($user as $key => $value) {
            roombook::create($value);
        }
    }
}
