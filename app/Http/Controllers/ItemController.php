<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Item;

class ItemController extends Controller
{
    #Thanks GPT
    #Yes I used GPT for most of the method only adding some mminor edits here and there
    public function index() {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    public function create() {
        return view('items.create');
    }

    #TODO : might need to change this, i dont remember processing a data input like this.. or maybe I am just a dolt
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'status' => 'nullable|string',
            'brand' => 'nullable|string',
        ]);
        $item = new Item($request->all());
        $item->save();
        return redirect()->route('items.index');
    }

    public function edit(Item $item) {
        return view('items.edit',compact('item'));
    }

    #TODO : Same as the store
    public function update(Request $request, Item $item) {
        $item->update($request->all());
        return redirect()->route('items.index');
    }

    public function show(Item $item) {
        return view('items.show', compact('item'));
    }

    public function destroy(Item $item) {
        $item->delete();
        return redirect()->route('items.index');
    }


}
