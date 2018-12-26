<?php

namespace App\Http\Controllers;

use App\ItemCategory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ItemCategoryController extends Controller
{
    public function create()
    {
        return view('itemCategory.create');
    }

    public function store(Request $request)
    {
        $itemCategory = new ItemCategory();
        $itemCategory->item_name = $request->get('item_name');
        $itemCategory->save();

        return redirect('items_category')->with('success', 'Information has been added');
    }

}
