<?php

use Illuminate\Database\Seeder;
use App\TypeWork;
class TypeWorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        TypeWork::truncate();

        TypeWork::create([
        	'column'=>'Hướng dẫn viên du lịch',
        ]);

        TypeWork::create([
        	'column'=>'Phiên dịch viên',
        ]);

        TypeWork::create([
        	'column'=>'Dịch thương mại',
        ]);

        TypeWork::create([
        	'column'=>'Dịch văn bản',
        ]);

        TypeWork::create([
        	'column'=>'Đón tiễn bay',
        ]);
    }
}
