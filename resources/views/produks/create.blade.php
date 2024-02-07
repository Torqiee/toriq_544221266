@extends('menus.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-5">
            <h2>Tambahkan Produk Baru</h2>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        Tolong periksa kembali data :<br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('produks.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Produk :</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 my-3">
            <div class="form-group">
                <strong>Kategori Produk :</strong>
                <input class="form-control" name="kategori" placeholder="Kategori"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Produk:</strong>
                <input class="form-control" name="harga_jual" placeholder="Harga">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-start mt-3">
            <button type="submit" class="btn btn-primary btn-md">Submit Produk Baru</button>
        </div>
    </div>

</form>
@endsection
