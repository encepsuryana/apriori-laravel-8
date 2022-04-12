@extends('layouts.frontend')
@section('content')

<div class='container'>
    <div class='home d-flex justify-content-between'>
        <a href="{{ url('/') }}"><i class="fa fa-chevron-left"></i> Kembali ke Shop</a>
        <b>Rekomendasi Produk lainnya:</b>
    </div>
    <div class="row">
        <div id="show-product" class="col-sm-8">
            <div class="img-show">
                <div class="d-flex justify-content-center">
                    <img class="img-fluid" style='height: 40vh; border-radius: 12px;' src="{{ asset($product->img) }}"
                        alt=" {{ ucfirst($product->nama_barang) }}">
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class='d-flex justify-content-start'>
                    <span class="nama-produk-detail">{{ ucfirst($product->nama_barang) }}</span>
                </div>
                <div class="d-flex align-items-start">

                    <div class="d-flex flex-column">
                        <span class='text-right harga-produk-detail'>
                            Rp. {{ number_format($product->harga, 0, ',', '.') }}
                        </span>
                        <button class="btn btn-success" style='font-size: 16px;' onclick="goTo('{{ url("product/{$product->id}/edit", []) }}')">
                        <i class="fa fa-shopping-cart" style="font-size: 20px; margin-right: 8px"></i>    
                        Tambahkan ke keranjang
                            </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="show-apriori">
                <div class="row">
                    @if($historyExist)
                    @foreach ($data as $item)
                    <div id="show-apriori-item" class="col-sm-6" style='padding-right: 0px;'>
                        <div class="card-rekomendasi">
                            <a href="{{ url('product', [$item->id]) }}">
                                <div class="d-flex justify-content-center">
                                    <img style="height:8em" class="img-fluid" src="{{ asset($item->img) }}"
                                        alt="{{ $item->nama_barang }}">
                                </div>
                            </a>
                            <div class='d-flex flex-column text-center' style='margin-top: 8px; margin-bottom: -8px;'>
                                <span class='nama-produk'>{{ $item->nama_barang }}</span>
                                <p class="harga-produk">
                                    Rp. {{ number_format($item->harga, 0, ',', '.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <p class="home"><b>Belum ada history pembelian yang cocok dengan barang ini</b></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection