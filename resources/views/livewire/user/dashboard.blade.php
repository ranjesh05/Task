<div class="row" >

<div class="col-sm-8 mt-4" wire:poll.300ms>
      

    <div class="statbox widget box box-shadow">
        <h4 class="mt-5"><b>Products</b></h4>
        <div class="widget-header">

            <div class="row">
                <div class="col-sm-6">
                  

                </div>
                <div class="col-sm-3">

                </div>
                <div class="col-sm-3 mt-3 mb-2">


                </div>
            </div>
        </div>


        {{--stat--}}

        @if(count($products) > 0)


        <div class="row" style="width: 100%;">


            @foreach ($products as $key => $product)

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing ">
                <div class="widget widget-activity-four " style="background-color:#E0E0E0;">

                    <div class="widget-heading">
                        <div class="row">
                            <h5 class="text-left"> {{$product->name}}</h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <h5 class="text-right" style="color:#DD4B50"> {{$product->code}}</h5>

                        </div>
                        </br>
                        @if(count($product->product_image) > 0)

                        <div class="row">
@foreach ($product->product_image as $key => $image)

                            <div class="">

                            <img src="{{ $image->image }}" class="card-img-top" alt="widget-card-2">
                            </div>
                        @endforeach

                        </div>
                        @else
                        N/A
                        @endif
                    </div>
                    <div class="widget-content">
                        <div class="mt-container mx-auto" style="height: auto !important;">
                            <table width="100%">
                                <thead style="">
                                    <tr style="">


                                        <p class=""> <span style="color:#e61e26"> Description: </span> <span style="color:black">
                                            {{$product->description}}
                                            </span></p>
                                    </tr>
                                </thead>
                                <tbody>


                                    <tr>

                                        <td class="text-center" style="font-weight: bold;color:dodgerblue;">
                                         <b></b>  Rs {{$product->price}} </b>

                                        </td>



                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <div class="text-center mt-3">
                            @php

                            $product_cart = App\Models\Cart::where([['user_id',Auth::user()->id],['product_id',$product->id]])->first();
                          
                        @endphp
@if($product_cart==null)
                            <button class="btn" wire:click="addcart({{$product->id}})" style="color:aliceblue;background-color:#DD4B50"><span>Add To Cart</span> </button>
                            @else 
                            <button class="btn" wire:click="removecart({{$product->id}})" style="color:aliceblue;background-color:#DD4B50"><span>Remove Cart</span> </button>
                            @endif

                        </div>
                    </div>
                </div>
            </div>





            @endforeach

        </div>


        @else
        <div >
            No Product Found
        </div>
        @endif

        {{--end--}}




    </div>
</div>
<div class="col-sm-4 mt-4">
    <div class="widget widget-activity-four " style="background-color:#E0E0E0;">

        <div class="widget-heading">
        <h4 class="mt-5"><b>Cart</b></h4>

</div>
<table style="margin: 10px">
    @if(count($carts) > 0)
    @foreach ($carts as $key => $cart)

<tr>
    <td> {{$cart->product->name}}</td>
</tr> 

<tr>
    @php

                            $product_cart = App\Models\Cart::where('id',$cart->id)->first();
                          $quantity=$product_cart->quantity;
                        @endphp
    <td>  <button wire:click="quantity_change_add({{$cart->id}})">+</button> <input type="number" wire:model="quantity"  min="1" readonly> <button wire:click="quantity_change_minus({{$cart->id}})">-</button>  </td>
</tr>

<tr>

    <td>  <button class="btn" wire:click="removecart({{$cart->product_id}})" style="color:aliceblue;background-color:#DD4B50"><span>Remove Cart</span> </button></td>

</tr>
@endforeach

@else
<div >
    No Product Found
</div>
@endif
</table>
</div>
</div>

</div>



