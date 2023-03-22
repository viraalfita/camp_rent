<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class c_barang extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 10 ;
        if (strlen($katakunci)) {
            $data = barang::where('nama_barang', 'like', "%$katakunci%")
                    ->orWhere('harga', 'like', "%$katakunci%")
                    ->orWhere('deskripsi', 'like', "%$katakunci%")
                    ->paginate($jumlahbaris);
        }else {
            $data = barang::orderBy('id', 'desc')->paginate(10);
        }

        return view('rental.index_barang')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rental.create_barang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama_barang', $request->nama_barang);
        Session::flash('harga', $request->harga);
        Session::flash('stok', $request->stok);

        $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ],[
            'nama_barang.required' => 'Barang wajib diisi',
            'harga.required' => 'Harga wajib diisi',
            'stok.required' => 'Stok wajib diisi',
        ]);
        $data = [
            'nama_barang' =>$request->nama_barang,
            'harga' =>$request->harga,
            'stok' =>$request->stok,
            'deskripsi' =>$request->deskripsi,
        ];

        barang::create($data);
        return redirect()->to('barang')->with('success', 'Data berhasil tersimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = barang::where('id',$id)->first();
        return view('rental.edit_barang')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ],[
            'nama_barang.required' => 'Barang wajib diisi',
            'harga.required' => 'Harga wajib diisi',
            'stok.required' => 'Stok wajib diisi',
        ]);
        $data = [
            'nama_barang' =>$request->nama_barang,
            'harga' =>$request->harga,
            'stok' =>$request->stok,
            'deskripsi' =>$request->deskripsi,
        ];

        barang::where('id', $id)->update($data);
        return redirect()->to('barang')->with('success', 'Data berhasil terubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        barang::where('id', $id)->delete();
        return redirect()->to('barang')->with('success', 'Data berhasil terhapus');
    }
}
