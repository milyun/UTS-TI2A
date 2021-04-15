@extends('buku.layout')
@section('content')

<div class="container mt-5">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">

    Tambah Buku

</div>
<div class="card-body">
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
</div>
    @endif
<form method="post" action="{{ route('buku.store') }}" id="myForm">

    @csrf
<div class="form-group">
    <label for="id_buku">id_buku</label>
    <input type="text" name="id_buku" class="form-control" id="id_buku" aria-describedby="id_buku" >
</div>

<div class="form-group">
    <label for="Judul">Judul</label>
    <input type="text" name="Judul" class="form-control" id="Judul" ariadescribedby="Judul" >
</div>

<div class="form-group">
    <label for="Kategori">Kategori</label>
    <input type="text" name="Kategori" class="form-control" id="Kategori" ariadescribedby="Kategori" >
</div>

<div class="form-group">
    <label for="Penerbit">Penerbit</label>
    <input type="text" name="Penerbit" class="form-control" id="Penerbit" ariadescribedby="Penerbit" >
</div>

<div class="form-group">
    <label for="Jumlah">Jumlah</label>
    <input type="text" name="Jumlah" class="form-control" id="Jumlah" ariadescribedby="Jumlah" >
</div>

<div class="form-group">
    <label for="Jumlah">Status</label>
    <input type="text" name="Status" class="form-control" id="Status" ariadescribedby="Status" >
</div>

<button type="subm










it" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
@endsection