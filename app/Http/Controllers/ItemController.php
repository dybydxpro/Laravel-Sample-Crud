<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    //Fetch All
    public function fetchAll(){
        $items = Item::All();
        return view('fetchAll', compact('items'));
    }

    //Fetch One
    public function viewOne($id){
        $items = Item::find($id);
        return view('viewOne', compact('items'));
    }

    //Create    
    public function openCreateView(){
        return view('create');
    }

    public function create(Request $request){
        $items = new Item;
        $data = $request->All();
        $items->title = $data['title'];
        $items->unit = $data['unit'];
        $items->qty = $data['qty'];
        $items->price = $data['price'];
        $items->save();
        return redirect()->route('fetchAll');
    }

    //Edit
    public function openEditView($id){
        $items = Item::find($id);
        return view('edit', compact('items'));
    }
    public function edit(Request $request, $id){
        $items = Item::find($id);
        $data = $request->All();
        $items->update($data);
        return redirect()->route('fetchAll');
    }

    //Delete
    public function delete($id){
        $items = Item::find($id);
        $items-> delete();
        return redirect()->route('fetchAll');
    }
}
