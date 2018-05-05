<?php

use Illuminate\Database\Seeder;

class RatingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$arrayRating_Content=array("Tôi rất thích những sản phẩm đến từ macstores"
    		,"Sản phẩm này đẹp lắm"
    		,"Có vẻ nó không phù hợp với em"
    		,"Rất thích mua hàng tại macbookstores"
    		,"Vote 5 sao cho shop luôn"
    		,'Cảm ơn dương ricky đã tư vấn cho tôi 1 sản phẩm tuyệt vời'
    		,'Tôi không thích admin tony, đề nghị công ty xem xét lại anh ấy kkk'
    	);
    	for ($i=1; $i <= 20 ; $i++) {
    		DB::table('ratings')->insert([
				'customer_id' => rand(0,30),
				'stars'       => rand(1,5),
				'content'     => $arrayRating_Content[rand(0,6)]
	    	]);
    	}
    }
}
