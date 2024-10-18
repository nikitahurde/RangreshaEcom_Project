<?php

namespace App\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;

class CategoryComponent extends Component
{

    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();

    }

    public function render()
    {
        $categorys=Category::all();
        return view('livewire.admin.category.category-component',compact('categorys'))->layout('layouts.admin');
    }
}
