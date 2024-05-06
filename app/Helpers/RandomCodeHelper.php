<?php
namespace App\Helpers;
use Haruncpi\LaravelIdGenerator\IdGenerator;
class RandomCodeHelper
{
    public static function randomcode($product_name){
    $randcode = random_int(1000, 9999);
    $item_code = IdGenerator::generate(['table' => 'products','field'=>'code','length' => 10, 'prefix' => $product_name.'_'.$randcode]);
    return $item_code;
}
}