<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Product;
use App\Models\Cart;
use App\Models\ProductImage;
use Auth;
class Dashboard extends Component
{
    public $quantity=1;
    public function addcart($id)
    {
$add_cart=new Cart();
$add_cart->user_id=Auth::user()->id;
$add_cart->product_id =$id;
 $add_cart->quantity=1;
$add_cart->save();
    }
    public function removecart($id)
    {
        Cart::where([['user_id',Auth::user()->id],['product_id',$id]])->delete();
    }
    public function quantity_change_add($id)
    {
        
$this->quantity=$this->quantity+1;
if( $this->quantity < 0){
    Cart::where('id',$id)->delete();
}

    }
    public function quantity_change_minus($id)
    {
        $this->quantity=$this->quantity-1;
        if( $this->quantity < 0){
            Cart::where('id',$id)->delete();
        }
      
    }
    public function render()
    {

        $product=Product::with('product_image','category')->where('status','1')->get();
        $cart=Cart::with('product')->get();
        return view('livewire.user.dashboard',['products' => $product,'carts'=>$cart]);
    }
}
