@extends('layout.template')
@section('konten')
    
<div class="container">
    <div class="pt-3 mt-5">

    </div>
    <div class="card rounded shadow-sm bg-gray">
        <div class="card-header">
            <h1 class="text-gray">List Harga</h1>
        </div>
        <div class="card-body">
            <div class="my-2 p-3 bg-dark rounded">
                {{-- Pencarian --}}
                <div class="pb-3">
                    <form action="{{url('barang')}}" class="d-flex" method="get">
                        <input type="search" class="form-control me-1" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                        <button class="btn btn-transparent" type="submit">
                            <i class="ri-search-2-line text-primary"></i>
                        </button>
                    </form>
                </div>

                {{-- Tambah Data --}}
                <div class="pb-3">
                    <a href="{{url('barang/create')}}" class="btn btn-transparent border-secondary text-gray">+ Tambah Data</a>
                </div>
    
                <table class="table table-dark table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="col-md-1 text-center">No</th>
                            <th class="col-md-2 text-center">Barang</th>
                            <th class="col-md-2 text-center">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomer = 1; ?>
                        @foreach ($data as $dat)
                        <tr>
                            <td>{{$nomer++}}</td>
                            <td>{{$dat->nama_barang}}</td>
                            <td>{{$dat->harga}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
