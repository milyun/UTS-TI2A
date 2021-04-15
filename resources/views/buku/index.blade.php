@extends('buku.layout')
@section('content')
 <div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="pull-left mt-2">
 <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
 </div>
 <div class="float-right my-2">
 <a class="btn btn-success" href="{{ route('buku.create') }}"> Input buku</a>
 </div>
 <div>
    <form class="input-group" action="{{ route('buku.index') }}" method="GET">
        <input type="text" class="form-control" name="search" placeholder="Search by judul_buku">
    </form>
</div>
 </div>
 </div>

 @if ($message = Session::get('success'))
 <div class="alert alert-success">
 <p>{{ $message }}</p>
 </div>
 @endif

 <table class="table table-bordered">
 <tr>
 <th>id_buku</th>
 <th>Judul</th>
 <th>Kategori</th>
 <th>Penerbit</th>
 <th>Pengarang</th>
 <th>Jumlah</th>
 <th>Status</th>
 <th width="280px">Action</th>
 </tr>
 @foreach ($buku as $buku)
 <tr>

 <td>{{ $buku ->id_buku }}</td>
 <td>{{ $buku ->judul }}</td>
 <td>{{ $buku ->kategori }}</td>
 <td>{{ $buku ->penerbit }}</td>
 <td>{{ $buku ->pengarang }}</td>
 <td>{{ $buku ->jumlah }}</td>
 <td>{{ $buku ->status }}</td>
 <td>
 <form action="{{ route('buku.destroy',['buku'=>$buku->id_buku]) }}" method="POST">

 <a class="btn btn-info" href="{{ route('buku.show',$buku->id_buku) }}">Show</a>
 <a class="btn btn-primary" href="{{ route('buku.edit',$buku->id_buku) }}">Edit</a>
 @csrf
 @method('DELETE')
 <button type="submit" class="btn btn-danger">Delete</button>
 </form>
 </td>
 </tr>
 @endforeach
 </table>

@endsection