<?php

namespace App\Livewire\Admin;

use App\Models\Product as ProductModel;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Category;
use App\Models\Cart;
use App\Models\ProductImage;
use App\Helpers\RandomCodeHelper;

class Product extends Component
{
    use WithFileUploads;
    public $name, $price, $description, $image=[], $category_id;
    public $edit_name, $edit_price, $edit_description, $edit_image=[], $edit_category_id;
    public $view_name, $view_price, $view_description, $view_image=[], $view_category_id;

    public $product_id;
    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'description' => 'required',

        ]);
        $product_add = new ProductModel();
        $product_add->name = $this->name;
        $name = $this->name;
        $product_add->code = RandomCodeHelper::randomcode($name);
        $product_add->category_id = $this->category_id;
        $product_add->price = $this->price;
        $product_add->description = $this->description;
        $product_add->save();

        if ($this->image) {
            $this->validate([
                'image' => 'required'
            ]);
            foreach ($this->image as $images) {
                // dd($images);

                $product_image = new ProductImage();
                $imageName = 'Product_' . time() . '.' . $images->extension();
                // dd($imageName);
                $a = $images->storeAs('/images', $imageName, 'public');


                $product_image->image = $a;
                $product_image->product_id = $category_add->id;
                $product_image->save();
            }
        }


        return redirect()->route('super-admin.product_list');
    }
    public function edit_product($id)

    {
        $this->product_id = $id;
        $old_product = ProductModel::where('id', $this->product_id)->first();
        $this->edit_name= $old_product->name;
        $this->edit_category_id= $old_product->category_id;
        $this->edit_price= $old_product->price;
        $this->edit_description= $old_product->description;
    }
    public function update()
    {
        $edit_product = ProductModel::where('id', $this->product_id)->first();
        $edit_product->name = $this->edit_name;
        $edit_product->category_id = $this->edit_category_id;
        $edit_product->price = $this->edit_price;
        $edit_product->description = $this->edit_description;
        $edit_product->save();
        if ($this->edit_image) {
            $this->validate([
                'edit_image' => 'required'
            ]);
            $delete_image=ProductImage::where('product_id',$edit_product->id)->delete();
            foreach ($this->edit_image as $images) {
                // dd($images);

                $product_image = new ProductImage();
                $imageName = 'Product_' . time() . '.' . $images->extension();
                // dd($imageName);
                $a = $images->storeAs('/images', $imageName, 'public');


                $product_image->image = $a;
                $product_image->product_id = $edit_product->id;
                $product_image->save();
            }
        }
        return redirect()->route('super-admin.product_list');


    }
    public function view($id)

    {
        $this->product_id = $id;
        $old_product = ProductModel::where('id', $id)->first();
        $this->view_name= $old_product->name;
        $this->view_category_id= $old_product->category->name;
        $this->view_price= $old_product->price;
        $this->view_description= $old_product->description;
        $image=ProductImage::where('product_id',$old_product->id)->pluck('image');

        $this->view_image=$image;

    }
    public function status_update($update_id){
        $product = ProductModel::find($update_id);
        if($product){
            if($product->status == "0"){
                $product->status = "1";
            }else{
                $product->status = "0";
            }
            $product->save();

        }
    }
    public function delete($id)
    {
        $image=ProductImage::where('product_id',$id)->delete();
        $image=Cart::where('product_id',$id)->delete();

        $old_product = ProductModel::where('id', $id)->delete();

    }
    public function render()
    {
        $product = ProductModel::with('product_image','category')->get();
        $categories = Category::get();
        return view('livewire.admin.product', ['products' => $product, 'categories' => $categories]);
    }
}
