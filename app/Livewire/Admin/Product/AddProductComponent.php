<?php

namespace App\Livewire\Admin\Product;

use Carbon\Carbon;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AddProductComponent extends Component
{

    use WithFileUploads;
    public $name;
    public $slug;
    public $category_id;
    public $mrp;
    public $price;
    public $stock;
    public $sku;
    public $features;
    public $stock_status;
    public $short_description;
    public $description;
    public $image;

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function addproduct(){
        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->mrp = $this->mrp;
        $product->price = $this->price;
        // $product->sale_price = $this->sale_price;
        $product->stock = $this->stock;
        $product->sku = $this->sku;
        $product->featured = $this->features;
        $product->short_description = $this->short_description;
        $product->description = $this->description;

        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('product/',$imageName);
        $product->image = $imageName;
        $product->category_id = $this->category_id;

        $product->save();

    }

    public function render()
    {
        $categorys = Category::all();
        return view('livewire.admin.product.add-product-component',compact('categorys'))->layout('layouts.admin');
    }
}
