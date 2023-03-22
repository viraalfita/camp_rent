@extends('layout.template')

@section('konten')

<!-- START FORM -->
<div class="pt-3 bg-dark mt-2">
        
</div>
<form action='{{url('penyewa/'.$data->id)}}' method='post'>
@csrf
@method('PUT')
<div class="card mt-5 bg-dark shadow-sm">
    <div class="justify-content-start mt-4">
        <a href="{{url('penyewa')}}" class="btn">
            <i class="ri-arrow-left-fill text-light" style="font-size: 24px"></i>
        </a>
    </div>
    <div class="my-3 p-3 bg-dark">
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label text-light">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' id="nama" value="{{$data->nama}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label text-light">Alamat</label>
            <div class="col-sm-10">
                <textarea class="form-control" name='alamat' id="alamat" rows="3">{{$data->alamat}}</textarea>
            </div>
        </div>
        <div class="mb-4 row">
            <label for="durasi" class="col-sm-2 col-form-label text-light">Durasi Sewa</label>
            <div class="col-sm-10">
                <select class="form-control" name='durasi' id="durasi">
                    <option value="< 24 Jam" {{$data->durasi == "< 24 Jam" ? 'selected' : ''}}>< 24 Jam</option>
                    <option value="24 Jam" {{$data->durasi == "24 Jam" ? 'selected' : ''}}>  24 Jam</option>
                    <option value="> 24 Jam" {{$data->durasi == "> 24 Jam" ? 'selected' : ''}}>> 24 Jam</option>
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="tgl_sewa" class="col-sm-2 col-form-label text-light">Tanggal Sewa</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='tgl_sewa' id="tgl_sewa" value="{{Carbon\Carbon::parse($data->tgl_sewa)->format('Y-m-d')}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tgl_kembali" class="col-sm-2 col-form-label text-light">Tanggal Kembali</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='tgl_kembali' id="tgl_kembali" value="{{Carbon\Carbon::parse($data->tgl_kembali)->format('Y-m-d')}}">
            </div>
        </div>
        <div class="mb-4 row">
            <label for="id_barang" class="col-sm-2 col-form-label text-light">Barang</label>
            <div class="col-sm-10">
                <select class="form-control" multiple name='barang[]' id="barang">
                    @foreach ($data_barang as $dat)
                    <option value="{{$dat->id}}" {{ in_array($dat->id, $array_barang) ? 'selected' : '' }}>{{$dat->nama_barang}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="barang" class="col-sm-2 col-form-label text-light">Deskripsi</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" value="">{{$data->deskripsi}}</textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label text-light"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-secondary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</div>
</form>
@endsection