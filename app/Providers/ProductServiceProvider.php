<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $products = [
            [
                'title' => "Belt",
                'image' => "img/products/belt.jpg",
                'price' => $this->_formatPrice(79),
                'specialPrice' => ""
            ],
            [
                'title' => "Hat",
                'image' => "img/products/hat.jpg",
                'price' => $this->_formatPrice(89),
                'specialPrice' => $this->_formatPrice(69)
            ],
            [
                'title' => "Bag",
                'image' => "img/products/bag.jpg",
                'price' => $this->_formatPrice(99),
                'specialPrice' => $this->_formatPrice(59)
            ],
            [
                'title' => "Scarf",
                'image' => "img/products/scarf.jpg",
                'price' => $this->_formatPrice(119),
                'specialPrice' => ""
            ]
        ];

        foreach($products as $product){
            foreach($product as $key=>$value){
                if(!isset($sortArray[$key])){
                    $sortArray[$key] = array();
                }
                $sortArray[$key][] = $value;
            }
        }

        $orderby = "title";
        array_multisort($sortArray[$orderby],SORT_ASC,$products);
        
        view()->share('products', $products);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function _formatPrice($price)
    {
        return number_format($price, 2);
    }

}
