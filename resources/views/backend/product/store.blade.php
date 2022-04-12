@extends('layouts.backend')
@section('content')

<form action="{{ url('admin/product', []) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row" style="width: 100%;padding-left:3%;">
        <h3 style="font-weight: bold;font-size: 1.5em;text-decoration: underline 2px;" class="col-sm-12">Product >
            Tambah Product<br><br></h3>
        <div class="col-sm-7">
            <label for="tentang">Kategori</label>
            <br>
            <select class="form-control" name="id_kategori" id="">
                @foreach ($data as $item)
                    <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                @endforeach
            </select>
            <br>
        </div>
        <div class="col-sm-7">
            <label for="copyright">Nama Barang</label>
            <br>
            <input required type="text" name="nama_barang" class="form-control">
            <br>
        </div>
        <div class="col-sm-7">
            <label for="facebook">Harga</label>
            <br>
            <input required type="number" name="harga" class="form-control">
            <br>
        </div>
        <div class="col-sm-7">
            <label for="instagram">Foto Product</label>
            <br>
            <input required type="file" name="img" class="form-control">
            <br>
        </div>
        <div class="col-sm-7">
            <br>
            <input style="width:100%;text-align: center" class="btn btn-success" type="submit" value="tambah product">
            <br>
            <br>
        </div>
    </div>
</form>
@endsection