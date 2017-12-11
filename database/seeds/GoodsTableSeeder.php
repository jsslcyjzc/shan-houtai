<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i=0; $i < 30; $i++) { 
        	$tmp = [
              'title' => str_random(20),
              'price' =>rand(10,1000),
              'kucun' =>rand(1,100),
              'content' => "<p>
                <img src='{$faker->imageUrl(1000,400)}'/>
                <img src='{$faker->imageUrl(1000,400)}'/>
                <img src='{$faker->imageurl(100,400)}'/>
                </p>
              ",
              'created_at' => date('Y-m-d H:i:s'),
              'status' => 1,
        	];

        	$id = DB::table('goods')->insertGetId($tmp);
        	//空数组
        	$data = [];
        	for ($j=0; $j < 4; $j++) { 
        		# code...
        		//拼接数据
        		$t = [
        			'goods_id' => $id,
        			'pic' =>$faker->imageUrl(400,400)
        		];
        		//压入数据
        		$data[] = $t;
        	}

        	DB::table('goods_pic')->insert($data);
        }
    }
}
