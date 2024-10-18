<?php

namespace App\Livewire\Admin\Category;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AddCategoryComponent extends Component
{
    use WithFileUploads;
    public $category_name;
    public $slug;
    public $image;

    public function generateslug()
    {
        $this->slug = Str::slug($this->category_name);
    }

    public function storeCategory()
    {
        
        $category = new Category();
        $category->category_name = $this->category_name;
        $category->slug = $this->slug;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('category/',$imageName);
        $category->image = $imageName;
        $category->save();
        //null input box
        $this->category_name="";
        $this->slug = "";
        $this->image = "";
      
        return redirect()->route('admin.category');

        // session()->flash('message', 'Category has been create successfully');
    }


    public function render()
    {
        return view('livewire.admin.category.add-category-component')->layout('layouts.admin');
    }
}
