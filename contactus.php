<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="gambar/cart.png">
  <title> Contact Us </title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/jquery2.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
</head>
<style>
.navbar {
margin-bottom: 10px;
border-radius: 0;
height : 50px;
}
.w3-lobster {
font-family: "Lobster", serif;
}
</style>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
        <span class="sr-only">navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="w3-container w3-lobster">
      <a href="#" class="navbar-brand">Kantin Bangau</a>
    </div>
    </div>
  <div class="collapse navbar-collapse" id="collapse">
    <ul class="nav navbar-nav">
      <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li><a href="faq.php"><span class="glyphicon glyphicon-modal-window"></span> FAQ</a></li>
      <li><a href="contactus.php"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
    </ul>
    </ul>
  </div>
</div>
</div>

<p><br/></p>


<div class="jumbotron text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact Us
            </div>
        </div>
    </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="well well-sm">
        <form action="connect.php" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">Nama</label>
                  <input type="text" class="form-control" id="name" placeholder="Masukan nama" name="name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">Alamat Email</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Masukan email" name="email" required="required" />
                              </div>
                        </div>

                        <div class="form-group">
                            <label for="subject">Judul</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Pilih salah satu:</option>
                                <option value="produk">Produk</option>
                                <option value="saran">Kritik & Saran</option>
                                <option value="akun">Akun Anda</option>
                                <option value="pembayaran">Pembayaran</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Pesan</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Pesan"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs"> Kirim Pesan </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Informasi Usaha</legend>
            <address>
                <strong>Kantin Bangau</strong><br>
                Jl. Bangau No.60/128, 9 Ilir Palembang<br>
                Sumatera Selatan <br>
                SMA Xaverius 1<br>
                <abbr title="Phone">
                    P:</abbr>
                (0711) 358-005
            </address>
            <address>
                <strong>Email</strong><br>
                <a href="mailto:#">cs@kantinbangau.com</a>
            </address>
            </form>
        </div>
    </div>
</div>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<p><br/></p>
</body>
</html>
