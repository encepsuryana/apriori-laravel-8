<html>
  <head>
    <title>Welcome Email</title>
  </head>
  <body>
    <!-- get $akun.nama -->
    <h2>Selamat datang di Apriori by Dwiki Shop</h2>
    <br/>
    <p>Silahkan verifikasi email Anda untuk melanjutkan berbelanja,  <a href="{{url('akun/verify', $akun->token)}}">Klik disini</a> </p>
    
  </body>
</html>