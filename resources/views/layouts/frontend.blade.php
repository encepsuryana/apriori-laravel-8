<!DOCTYPE html>
<html lang="en">
@php
use Illuminate\Support\Facades\DB;
use App\frontend;
use App\akun;
if (Session::has('nama')) {
$akun = akun::where('email', Session::get('email'))->get();
$user_id = $akun[0]['id'];
} else {
$user_id = 0;
}
$cart = DB::select("SELECT t.nama_barang as nama_barang, t.id_barang as id_barang, t.id_transaksi as id_transaksi,
p.harga as harga, p.img as img FROM transactions as t INNER JOIN products as p ON p.id = t.id_barang WHERE t.status =
0 AND t.id_user = $user_id");

$view = frontend::find(1);
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ config('app.name') }} </title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css', []) }}">
    <link rel="stylesheet" href="{{ url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css', []) }}">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.js"
        integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
    <script src="{{ url('plugins/jquery/jquery.min.js', []) }}"></script>
    <script src="{{ url('plugins/datatables/jquery.dataTables.min.js', []) }}"></script>
    <script src="{{ url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js', []) }}"></script>
    <script src="{{ url('plugins/datatables-responsive/js/dataTables.responsive.min.js', []) }}"></script>
    <script src="{{ url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js', []) }}"></script>
    <style>
        body {
            overflow-x: hidden;

        }

        label {
            font-size: 1em;
            font-weight: bold;
        }

        #btn-login {
            width: 100%;
        }

        .container {
            padding: 2rem 0rem;
        }

        .table-image {

            thead {

                td,
                th {
                    border: 0;
                    color: #666;
                    font-size: 0.8rem;
                }
            }

            td,
            th {
                vertical-align: middle;
                text-align: center;

                &.qty {
                    max-width: 2rem;
                }
            }
        }

        .price {
            margin-left: 1rem;
        }

        .modal-footer {
            padding-top: 0rem;
        }

        .fh5co-bg {
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            position: relative;
        }

        .footer_text {
            color: #fff;
            /* warna */
        }

        .fh5co-bg {
            background-size: cover;
            background-position: center center;
            position: relative;
            width: 100%;
            float: left;
        }

        .fh5co-bg .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            /* warna */
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
            transition: 0.5s;
        }

        .fh5co-bg-section {
            background: rgba(0, 0, 0, 0.05);
            /* warna */
        }

        #fh5co-footer {
            padding: 2em 0;
            clear: both;
        }

        @media screen and (max-width: 768px) {
            #fh5co-footer {
                padding: 3em 0;
            }
        }

        #fh5co-footer {
            position: relative;
        }

        #fh5co-footer .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.9);
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
            transition: 0.5s;
        }

        #fh5co-footer h3 {
            margin-bottom: 15px;
            font-weight: bold;
            font-size: 15px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.8);
            /* warna */
        }

        #fh5co-footer .fh5co-footer-links {
            padding: 0;
            margin: 0;
        }

        #fh5co-footer .fh5co-footer-links li {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        #fh5co-footer .fh5co-footer-links li a {
            color: rgba(255, 255, 255, 0.5);
            text-decoration: none;
        }

        #fh5co-footer .fh5co-footer-links li a:hover {
            text-decoration: underline;
        }

        #fh5co-footer .fh5co-widget {
            margin-bottom: 30px;
        }

        @media screen and (max-width: 768px) {
            #fh5co-footer .fh5co-widget {
                text-align: left;
            }
        }

        #fh5co-footer .fh5co-widget h3 {
            margin-bottom: 15px;
            font-weight: bold;
            font-size: 15px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        #fh5co-footer .copyright .block {
            display: block;
            color: #fff;
            /* warna */
        }


        .btn-primary {
            background: #F85A16;
            /* warna */
            color: #fff;
            /* warna */
            border: 2px solid #F85A16;
            /* warna */
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active {
            background: #f96c2f !important;
            /* warna */
            border-color: #f96c2f !important;
            /* warna */
        }

        .btn-primary.btn-outline {
            background: transparent;
            color: #F85A16;
            /* warna */
            border: 1px solid #F85A16;
            /* warna */
        }

        .btn-primary.btn-outline:hover,
        .btn-primary.btn-outline:focus,
        .btn-primary.btn-outline:active {
            background: #F85A16;
            /* warna */
            color: #fff;
            /* warna */
        }

        #text {
            color: black;
            font-size: 1rem;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class='container' style='padding-top: 12px; padding-bottom: 0px;'>
        <nav class="navbar navbar-expand-lg navbar-light bg-light row">
            <a id="logo" class="navbar-brand" href="{{ url('/', []) }}">{{ $view->logo }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>

                <div class="form-inline my-2 my-lg-0">
                    <div class='form-inline mb-2' style="margin-right: 1rem;">
                        <form action="{{ url('search') }}" method="post">
                            @csrf
                            <div class="input-group">
                                <input class="form-control" type="search" name="search" placeholder="Cari Produk"
                                    aria-label="Search">
                                <input class="" type="hidden" name="active" value={{ $active ?? 'Semua' }}
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-success my-2 my-sm-0" type="submit">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    @php
                    $linkhistory = url('history', []);
                    @endphp

                    <a type="button" title="Histori Pembelian" style="margin-right: 1em;"
                        onclick="goTo('{{ $linkhistory }}')"><i style="font-size:20px; color: #38c172;"
                            class="fa fa-history" aria-hidden="true"></i></a>
                    <a type="button" title="Keranjang" style="margin-right: 1em;" data-toggle="modal"
                        data-target="#cartModal">
                        <i style="font-size:20px; color: #38c172;" class="fa fa-shopping-cart"></i>
                    </a>
                    <div class="modal fade" id="cartModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">
                                    <h4 class="modal-title" id="exampleModalLabel">
                                       <b> Keranjang Belanja</b>
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-image">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama Produk</th>
                                                <th scope="col"></th>
                                                <th scope="col">Harga</th>
                                                {{-- <th scope="col">Qty</th>
                                                <th scope="col">Total</th> --}}
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $total = 0;
                                            $i = 0;
                                            @endphp
                                            @foreach ($cart as $item)
                                            @if ($i == 0)
                                            <form action="{{ url('product', [$item->id_transaksi]) }}" method="post">
                                                @csrf
                                                @method("PUT")
                                                <input type="hidden" name="id" value="{{ $item->id_barang }}">
                                                <input type="hidden" name="link" value="{{ $_SERVER['REQUEST_URI'] }}">
                                                <input class="btn btn-danger" type="hidden" value="delete">
                                            </form>
                                            @endif

                                            <tr>
                                                <td class="w-25">
                                                    <a href="{{ url('product', [$item->id_barang]) }}">
                                                        <img src="{{ asset($item->img) }}"
                                                            class="img-fluid img-thumbnail"
                                                            alt="{{ $item->nama_barang }}">
                                                    </a>
                                                </td>
                                                <td><b>{{ $item->nama_barang }}</b></td>
                                                <td> <b>Rp. {{ number_format($item->harga, 0, ',', '.') }}</b</td>
                                                {{-- <td class="qty"><input type="text" class="form-control" id="input1"
                                                        value="2"></td>
                                                <td>178$</td> --}} @php $total = $total+intval($item->harga);
                                                @endphp

                                                <td>
                                                    <form action="{{ url('product', [$item->id_transaksi]) }}"
                                                        method="post">
                                                        @csrf
                                                        @method("PUT")
                                                        <input type="hidden" name="id" value="{{ $item->id_barang }}">
                                                        <input type="hidden" name="link"
                                                            value="{{ $_SERVER['REQUEST_URI'] }}">
                                                        <a type="submit" title='Hapus'><i class="fa fa-trash-o" style='color: red; font-size: 20px;'  aria-hidden="true"></i></a>
                                                    </form>
                                                </td>
                                            </tr>
                                            @php
                                            $i++;
                                            @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-end">
                                        <h5>Total: <span class="price text-success"><b>Rp. {{ number_format($total, 0, ',', '.') }}</b></span></h5>
                                    </div>
                                </div>
                                <div class="modal-footer border-top-0 d-flex justify-content-end" style='padding: 1rem;'>
                                    @php
                                    if (Session::has('nama')) {
                                    if (count($cart) > 0) {
                                    $id_trans = $item->id_transaksi;
                                    } else {
                                    $id_trans = 0;
                                    }
                                    } else {
                                    $id_trans = 0;
                                    }
                                    @endphp
                                    <form action="{{ url('product', [$id_trans]) }}" method="post">
                                        @csrf
                                        @method("PUT")
                                        <input type="hidden" name="update" value="update">
                                        <!-- hide button when chart 0 -->
                                        @if (count($cart) > 0)
                                        <button type="submit" class="btn btn-success">
                                            <i style='font-size: 20px; margin-right: 8px;' class="fa fa-shopping-cart"></i>
                                            <span>Pesan Sekarang</span>
                                        </button>
                                        @else 
                                        <!-- back to home -->
                                        <a href="{{ url('/') }}" class="btn btn-success">
                                            <i style='font-size: 20px; margin-right: 8px;' class="fa fa-shopping-basket"></i>
                                            <span>Belanja Sekarang</span>
                                        </a>
                                        @endif

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (Session::has('nama'))
                    <a title="Logout" style="color:red" href="{{ url('akun/logout', []) }}"> <i style="font-size:20px;"
                            class="fa fa-sign-out"></i></a>
                    @else
                    <a title="Login" style="color:#38c172;" href="{{ url('akun', []) }}"><i style="font-size:20px;"
                            class="fa fa-user"></i></a>
                    @endif
                </div>
            </div>
        </nav>
    </div>
    <div style="    padding-right: 1em;
    padding-left: 1em;">
        @yield('content')
    </div>


    <footer id="fh5co-footer" class="fh5co-bg" role="contentinfo">
        <div class="overlay"></div>
        <div class="container" style='padding-bottom: 0;'>
            <div class='d-flex justify-content-between'>
                <div class="col-md-6 fh5co-widget">
                    <h3>{{ $view->logo }} </h3>
                    <p class="footer_text">{{ $view->tentang }}. </p>
                    {{-- <p class="footer_text"><a class="btn btn-primary" href="#">Button</a></p> --}}
                </div>
          
                <div class="col-md-6 text-right">
                    <h3>Social Media</h3>
                    <div class="col-md-4 col-sm-4 col-xs-6" style='float: right;'>
                        <ul class="fh5co-footer-links">
                            <li>
                                <a style="font-size: 1.8em;color:#eee;padding:5%" href="{{ $view->github }}"><i
                                        class="fa fa-github"></i></a>
                                <a style="font-size: 1.8em;color:#eee;padding:5%" href="{{ $view->facebook }}"><i
                                        class="fa fa-facebook"></i></a>
                                <a style="font-size: 1.8em;color:#eee;padding:5%" href="{{ $view->instagram }}"><i
                                        class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">&copy; 2020 | All Rights Reserved.</small>
                        <small class="block">Copyright by : {{ $view->copyright }} </small>
                    </p>
                </div>
            </div>

        </div>
    </footer>

    @if (session()->has('modal'))
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
        $(document).ready(function () {
            $('#cartModal').modal('show');
        });
    </script>
    @endif


    <script>
        function goTo(url) {
            window.location.replace(url);
        }
    </script>

</body>

</html>