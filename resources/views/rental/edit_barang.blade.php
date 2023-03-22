@extends('layout.template')

@section('konten')

{{-- Form --}}
<form action="{{url('barang/'.$data->id)}}" method="post">
@csrf
@method('PUT')
    <div class="card mt-5 bg-dark shadow-sm">
        <div class="justify-content-start mt-4">
            <a href="{{url('barang')}}" class="btn">
                <i class="ri-arrow-left-fill text-light" style="font-size: 24px"></i>
            </a>
        </div>
        <div class="my-3 p-3 bg-dark">
            <div class="mb-3 row">
                <label for="barang" class="col-sm-2 col-form-label text-light">Barang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="{{$data->nama_barang}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="harga" class="col-sm-2 col-form-label text-light">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="harga" id="harga" value="{{$data->harga}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="stok" class="col-sm-2 col-form-label text-light">Stok</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="stok" id="stok" value="{{$data->stok}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="barang" class="col-sm-2 col-form-label text-light">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3">{{$data->deskripsi}}</textarea>
                </div>
            </div>
            <div class="mb-3 row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-secondary" name="submit">SIMPAN</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
