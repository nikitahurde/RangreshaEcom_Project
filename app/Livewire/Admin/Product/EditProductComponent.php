<?php

namespace App\Livewire\Admin\Product;

use Carbon\Carbon;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class EditProductComponent extends Component
{
    use WithFileUploads;
    public $product_id;
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
    public $newimage;

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function mount($product_id)
    {
        $this->product_id = $product_id;
        $products = Product::where('id', $product_id)->first();

        $this->productImages = json_decode($products->mImages);
        // dd($products);
        $this->product_id = $products->id;
        $this->name = $products->name;
        $this->slug = $products->slug;
        $this->short_description = $products->short_description;
        $this->description = $products->description;
        $this->mrp = $products->mrp;
        $this->price = $products->price;
        $this->featured = $products->features;
        $this->sku = $products->sku;
        $this->stock_status = $products->stock_status;
        $this->stock = $products->stock;
        $this->image = $products->image;
        $this->images = explode(',', $products->images);
       
        $this->category_id = $products->category_id;
      
    }



    public function updateProduct(){
        $product = Product::find($this->product_id);
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

        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('product', $imageName);
            $product->image = $imageName;
        }
        $product->category_id = $this->category_id;

        $product->update();
    }

    public function render()
    {
        $categorys = Category::all();

        return view('livewire.admin.product.edit-product-component',compact('categorys'))->layout('layouts.admin');
    }
}
