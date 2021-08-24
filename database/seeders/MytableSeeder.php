<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MytableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' => '1',
            'name' => 'taro',
            'mail' => 'taro@taro.com',
            'age' => '10'
        ];
        DB::table('mytable')->insert($param);
    }
}
