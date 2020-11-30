<?php
use App\Products;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
        	'name'=> 'MacBook Pro',
        	'product_id'=>'macbook-pro',
        	'specifications'=>'15 inch,1TB ssd, 32gb ram',
        	'price'=>249999,
        	'description'=>'ddadadsddddddddddd'
        ]);
    }
}
