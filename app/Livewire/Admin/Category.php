<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Category as CategoryModel;
use App\Models\Product;


class Category extends Component
{
    use WithFileUploads;

    public $search, $name, $edit_name, $category_id;

    public function submit()
    {
        $this->validate([
            'name' => 'required'
        ]);
        $category_add = new CategoryModel();
        $category_add->name = $this->name;
        $category_add->save();
          
        return redirect()->route('super-admin.category_list');

    }
    public function edit_category($id)
    {
        $this->category_id = $id;
        $edit_category = CategoryModel::where('id', $id)->first();
        $this->edit_name = $edit_category->name;
        // dd( $this->edit_name);
    }
    public function status_update($update_id){
        $category = CategoryModel::find($update_id);
        if($category){
            if($category->status == "0"){
                $category->status = "1";
        $product = Product::where('category_id',$category->id)->update(['status'=>'1']);

            }else{
                $category->status = "0";
                $product = Product::where('category_id',$category->id)->update(['status'=>'0']);

            }
            $category->save();
           
        }
    }
    public function update()
    {

        // dd("dsdf");
        $category = CategoryModel::where('id', $this->category_id)->first();
        $category->name = $this->edit_name;
        $category->update();
        return redirect()->route('super-admin.category_list');

    }
    public function render()
    {
        $search='%'.$this->search.'%';

        $categories = CategoryModel::where('name', 'LIKE','%'.$search)->orderBy('name', 'ASC')->get();
        return view('livewire.admin.category', ['categories' => $categories]);
    }
}
