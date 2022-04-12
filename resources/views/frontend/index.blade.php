@extends('layouts.frontend')
@section('content')
@isset($message)
<div class="alert alert-success">
    {{ $message }}
</div>
@endisset
<div class='container' style="min-height: 90vh;">
    <div class="d-flex justify-content-start" style="margin-left: -18px;">
        <a class="btn-cat btn btn-{{ $active === 'Semua' ? 'success' : 'outline-success' }}" style="" href="/">
            {{ 'Semua' }}
        </a>
        @foreach ($cat as $item)
        <a class="btn-cat btn btn-{{ $active === $item->nama_kategori ? 'success' : 'outline-success' }}"
            style=" text-transform: capitalize;" href="{{ url('/cat', [$item->nama_kategori]) }}">
            {{ $item->nama_kategori }}
        </a>
        @endforeach
    </div>
    <div class="row">
        @foreach ($data as $item)
        <div class="col-sm-3" style='padding-left: 5px; padding-right: 8px;'>
            <a class="produk" href="{{ url('product', [$item->id]) }}">
                <div class="card-produk">
                    <img class="card-img-top" style="border-radius: 8px;" src="{{ asset($item->img)}}"
                        alt="{{ $item->nama_barang }}">
                    <div class="d-flex justify-content-between product-title">
                        <span class="nama-produk-fe">{{ $item->nama_barang }}</span>
                        <span class="harga-produk-fe">Rp. {{ number_format($item->harga, 0, ',', '.') }}</span>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <br>
    <div class="d-flex justify-content-end">
        {{ $data->links() }}
    </div>
</div>
@endsection