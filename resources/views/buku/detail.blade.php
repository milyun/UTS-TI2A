@extends('buku.layout')
@section('content')
    <div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header">
            Detail Buku
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Judul: </b>{{$buku->judul}}</li>
                <li class="list-group-item"><b>Kategori: </b>{{$buku->kategori}}</li>
                <li class="list-group-item"><b>Penerbit: </b>{{$buku->penerbit}}</li>
                <li class="list-group-item"><b>Pengarang: </b>{{$buku->pengarang}}</li>
                <li class="list-group-item"><b>Jumlah: </b>{{$buku->jumlah}}</li>
                <li class="list-group-item"><b>Status: </b>{{$buku->status}}</li>
            </ul>
        </div>
        <a class="btn btn-success mt-3" href="{{ route('buku.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection