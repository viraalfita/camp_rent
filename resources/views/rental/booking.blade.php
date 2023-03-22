@extends('layout.template')

@section('konten')

<div class="mt-5">

</div>
<div class="container p-2">
    <div class="p-0 text-gray">
        <p class="display-2">YUK PESAN SEKARANG</p>
    </div>
    {{-- <div class="text-secondary">
        <h2>Pusing kerjaan? tugas? kuliah? Healing solusinya!</h2>
    </div> --}}
    <div class="text-secondary">
        {{-- <h4>Cara booking di Camp-Rent</h4> --}}
        <ul>
            <li class="mb-2">Hubungi Kami di (+62) 877-6040-9299 via SMS/WhatsApp/Telegram atau DM di instagram @camprent.</li>
            <li class="mb-2">Kirim data sewa dengan format berikut ini.<br>
                Nama : <br>
                Alamat : <br>
                Tanggal Sewa : <br>
                Tanggal Kembali : <br>
                List Barang : <br>
            </li>
            <li class="mb-2">Jika fix booking maka wajib DP minimal 30% dari biaya keseluruhan, pembayaran bisa melalui metode berikut ini. <br>
                <img src="{{url('asset/qris.jpg')}}" alt="...">
            </li>
            <li class="mb-2">Setelah DP, peminjaman akan kami proses.</li>
            <li class="mb-2">Pelunasan bisa dilakukan saat pengambilan barang.</li>
            <li class="mb-2">Jika setelah DP kemudian pemesanan dibatalkan, maka DP akan dikembalikan sebesar 50%.</li>
        </ul>
    </div>
</div>

@endsection