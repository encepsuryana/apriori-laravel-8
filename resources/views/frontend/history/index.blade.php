@extends('layouts.frontend')
@section('content')
<div class='container' style="min-height: 90vh;">
    <div class='home d-flex justify-content-between'>
        <a href="{{ url('/') }}"><i class="fa fa-chevron-left"></i> Kembali ke Shop</a>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table" id="example1">
                <thead style='font-weight: bold;'>
                    <tr>
                        <td>No</td>
                        <td>Id Transaksi</td>
                        <td>Total Harga</td>
                        <td>Bukti TF</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 0;
                    @endphp
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$i+1}}</td>
                        <td>{{$item->id_transaksi}}</td>
                        <td>Rp.{{number_format($harga[$i], 0, ',', '.')}} </td>
                        <td><a href="{{ asset($item->img) }}"><img style="width: 7.5em;height: 6em;"
                                    src="{{ asset($item->img) }}" alt=""></a></td>
                        <td>
                            @if ($item->status == 1)
                            <b style="color:green;">{{"Terkonfirmasi"}}</b>
                            @else
                            <b style="color:red;">{{"Belum dikonfirmasi"}}</b>
                            @endif
                        </td>
                    </tr>
                    @php
                    $i++;
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        {{ $data->links() }}
    </div>
</div>
@endsection