<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Item;
use App\Models\Merchant;
use Illuminate\Support\facades\DB;
use Session;

class ItemController extends Controller
{
    public function index()
    {
        $data = DB::table('items')
                        ->select('items.id', 'items.name_items', 'items.picture', 'items.type',
                                'items.deskription', 'items.price', 'items.stock', 'merchant.name_merchant')
                        ->join('merchant', 'merchant.id', '=', 'items.id_merchant')
                        ->get();
        
        return view('Item.item', compact('data'));
    }

    public function create()
    {
        return view('Item.item_create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name_items' => 'required',
            'picture' => 'required|mimes:jpeg, jpg, png, svg',
            'type' => 'required',
            'deskription' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);
        $picture = rand().$request->file('picture')->getClientOriginalName();
        $request->file('picture')->move(base_path("./public/Uploads"), $picture);
    
   
        $items = new item();
        $items->name_items = $request->name_item;
        $items->picture = $picture;
        $items->type = $request->type;
        $items->deskription = $request->deskription;
        $items->price = $request->price;
        $items->stock = $request->stock;
        $items->id_merchant = $request->id_merchant;
        $items->save();
        
        return redirect('item')->with('alert_pesan', 'Data telah disimpan');
    
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $data = item::where('id', $id)->get();
        return view('Item.item_update', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name_items' => 'required',
            'picture' => 'required|mimes:jpeg, jpg, png, svg',
            'type' => 'required',
            'deskription' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);
    
    $picture = rand().$request->file('picture')->getClientOriginalName();
    $request->file('picture')->move(base_path("./public/Uploads"), $picture);

        $items = item::where('id', $id)->first();
        $items->name_items = $request->name_item;
        $items->picture = $picture;
        $items->type = $request->type;
        $items->deskription = $request->deskription;
        $items->price = $request->price;
        $items->stock = $request->stock;
        $items->id_merchant = $request->id_merchant;
        $items->save();
        
        return redirect('item')->with('alert_pesan', 'Data telah diubah');

    }
    public function destroy($id)
    {
        $data = item::where('id', $id)->first();

        if($data != null){
            $data->delete();

            return redirect('/item')->with('alert_message', 'Berhasil menghapus data!');
        }

        return redirect('/item')->with('alert_message', 'ID tidak ditemukan!');
    }



}