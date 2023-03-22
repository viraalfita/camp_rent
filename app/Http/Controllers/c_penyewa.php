<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\m_penyewa;
use App\Models\penyewa;
use App\Models\penyewa_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class c_penyewa extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 10;

        if (strlen($katakunci)) {
            $data = penyewa::where('nama', 'like', "%$katakunci%")
                    ->paginate($jumlahbaris);
        } else {
            $data = penyewa::orderBy('id', 'desc')->paginate(10);
        }        
        return view('rental.index_penyewa')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_barang = barang::orderBy('id', 'desc')->get();
        return view('rental.create_penyewa')->with('data_barang', $data_barang);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'durasi' => $request->durasi,
            'tgl_sewa' => $request->tgl_sewa,
            'tgl_kembali' => $request->tgl_kembali,
            'deskripsi' => $request->deskripsi
        ];

        $penyewa = penyewa::create($data);
        $id_penyewa = $penyewa->id;
        $id_barang = $request->barang;

        foreach ($id_barang as $key => $value) {
            $data = [
                'id_penyewa' => $id_penyewa,
                'id_barang' => $value
            ];
            penyewa_detail::create($data);
        }

        return redirect()->to('penyewa')->with('success', 'Data berhasil tersimpan');
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
        $data_barang = barang::orderBy('id', 'desc')->get();
        $data = penyewa::where('id',$id)
            ->with('PenyewaDetail')
            ->first();

        $penyewa_detail = penyewa_detail::where('id_penyewa', $data->id)
            ->select(['id_barang'])
            ->get();

        $array_barang = [];
        foreach ($penyewa_detail as $key => $value) {
            array_push($array_barang, $value->id_barang);
        }

        return view('rental.edit_penyewa')->with([
            'data' => $data,
            'data_barang' => $data_barang,
            'array_barang' => $array_barang,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'durasi' => $request->durasi,
            'tgl_sewa' => $request->tgl_sewa,
            'tgl_kembali' => $request->tgl_kembali,
            'deskripsi' => $request->deskripsi
        ];

        penyewa::where('id', $id)->update($data);
        $id_penyewa = $id;
        $id_barang = $request->barang;

        penyewa_detail::where('id_penyewa', $id)->delete();
        foreach ($id_barang as $key => $value) {
            $data = [
                'id_penyewa' => $id_penyewa,
                'id_barang' => $value
            ];
            penyewa_detail::create($data);
        }

        return redirect()->to('penyewa')->with('success', 'Data berhasil tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        penyewa::where('id', $id)->delete();
        return redirect()->to('penyewa')->with('success', 'Data berhasil terhapus');   
    }

    public function selesai(string $id)
    {
        penyewa::where('id',$id)->update([
            'is_selesai' => 1
        ]);
        return redirect()->to('penyewa')->with('success', 'Persewaan Selesai');   
    }
}
