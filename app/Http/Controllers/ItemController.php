<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Validator;
use Redirect;

class ItemController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view("items.index")->with('items', $items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("items.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id=null)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:items|max:255',
            'brand' => 'max:255',
            'desc' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }


        $item = Item::findOrNew($id);
        $item->name = $request->name;
        $item->brand = $request->brand;
        $item->desc = $request->desc;

        $item->purchase_mrp = $request->purchase_mrp;
        $item->purchase_rate = $request->purchase_rate;
        $item->sale_mrp = $request->sale_mrp;
        $item->sale_rate = $request->sale_rate;

        $item->save();

        return $item;
        //return Redirect::to('items');
    }


    public function store_by_test(Request $request, $id=null)
    {
        $item = Item::create([
            'name' => request()->name,
            'brand' => request()->brand,
            'desc' => request()->desc
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
