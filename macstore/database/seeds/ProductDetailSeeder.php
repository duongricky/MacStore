<?php

use Illuminate\Database\Seeder;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$arrYear = array('2013','2014','2015','2016','2017');
    	$arrNew = array(97,98,99,100);
    	$arrMBPro = array('MD102','MD212','ME662','MD213','MD101','ME864','MGX820','MGX92','ME864');
    	$arrMBAir = array('MD224','MD712B','MD711','MJVPM','MJVP2','MJVPM2','MJVP1');
    	$arrCPU =  array('Intel Core i3','Intel Core i5','Intel Core i7');
    	$arrRam =  array(4,8,16);
    	$arrInch =  array('13','13.3','15');
    	$arrSSD =  array(128,256,512);
    	$arrPrice =  array(25000000,27000000,27500000,28000000,29000000,30000000,32000000,35000000,20000000,38000000,40000000,22000000);
        for ($i=0; $i < 20 ; $i++) {
        	if (rand(1,3) == 3) {
					$name = $arrMBAir[rand(0,6)];
				}
				else if (rand(1,3) == 2) {
					$name = $arrMBPro[rand(0,8)];
				}
				else $name = 'Macbook';
        	DB::table('product_details')->insert([
				'product_id' => rand(1,20),
				'year_version'   => $arrYear[rand(0,4)],
				'new' => $arrNew[rand(0,3)],
				'name' => $name,
				'cpu' => $arrCPU[rand(0,2)],
				'ram' => $arrRam[rand(0,2)],
				'inch' => $arrInch[rand(0,2)].'"',
				'ssd' => $arrSSD[rand(0,2)],
				'prices'=> $arrPrice[rand(0,11)]
            ]);
        }
    }
}
