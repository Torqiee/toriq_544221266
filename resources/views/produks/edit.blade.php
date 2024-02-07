@extends('menus.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mt-5 ">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Waduh,</strong> tolong periksa kembali data :<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('produks.update',$produk->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" value="{{ $produk->nama }}" class="form-control" placeholder="nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 my-3">
                <div class="form-group">
                    <strong>Kategori:</strong>
                    <input type="text" name="kategori" value="{{ $produk->kategori }}" class="form-control" placeholder="kategori">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga:</strong>
                    <input class="form-control" name="harga_jual" value="{{ $produk->harga_jual }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-start mt-5">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
