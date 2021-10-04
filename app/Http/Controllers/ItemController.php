<?php

namespace App\Http\Controllers;

use App\Events\UserLogEvent;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() {
        $items = Item::all();
        return view('dashboard', compact('items'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);
        $item = Item::create($request->all());
        event(new UserLogEvent("Create item with ID#$item->id"));
        return redirect('/dashboard');
    }

    public function edit(Item $item) {
        return view('edit', compact('item'));
    }

    public function update(Item $item, Request $request) {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);       
        $item->update($request->all());
        event(new UserLogEvent("Update an item with ID#$item->id"));
        return redirect('/dashboard');        
    }

    public function deleteConfirm(Item $item) {
        return view('delete', compact('item'));
    }

    public function destroy(Item $item, Request $request) {
        $item->delete();
        event(new UserLogEvent("Delete item with ID#$item->id"));
        return redirect("/dashboard");
    }
}
