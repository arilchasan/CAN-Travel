<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Tujuan;
use Illuminate\Http\Request;

class BusController extends Controller
{

    public function index()
    {
        $buses = Bus::all();
        return view('bus.index', ['buses' => $buses]);
    }

    public function create()
    {
        return view('admin.crud.create', ['bus' => Bus::all(),'tujuan' => Tujuan::all()]);
    }

    public function store(Request $request)
    {
        $bus = new Bus;
        $bus->nama_bus = $request->nama_bus;
        $bus->tujuan_id = $request->tujuan_id;
        $bus->harga = $request->harga;
        $bus->jumlah_kursi = $request->jumlah_kursi;
        $bus->save();

        return redirect('/admin/data-bus')->with('success', 'Bus berhasil ditambahkan');
    }

    public function edit($id)
    {
        
        return view('admin.crud.edit', ['bus' => Bus::find($id), 'tujuan' => Tujuan::all()]);
    }

    public function update(Request $request, $id)
    {
       $validatedData = $request->validate([
            'nama_bus' => 'required',
            'tujuan_id' => 'required',
            'harga' => 'required',
            'jumlah_kursi' => 'required',
        ]);
        $bus =  Bus::find($id);
        $bus->update([
                'nama_bus' => $request->nama_bus,
                'tujuan_id' => $request->tujuan_id,
                'harga' => $request->harga,
                'jumlah_kursi' => $request->jumlah_kursi,
            ]);

        return redirect('/admin/data-bus/')->with('success', 'Data Bus berhasil diubah');
    }

    public function destroy($id)
    {
        $bus = Bus::find($id);
        $bus->delete();

        return redirect()->back()->with('success', 'Data Bus berhasil dihapus');
    }

    //-----------ADMIN-----------   
    public function detailBus($id)
    {
        $bus = Bus::find($id);
        
        return view('admin.crud.detail', ['bus' => $bus]);
    }

    //-----------USER-----------
    public function detail($id)
    {
        $bus = Bus::find($id);
        
        return view('detailBus', ['bus' => $bus]);
    }
}
