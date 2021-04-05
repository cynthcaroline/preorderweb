<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="gambar/cart.png">
<meta charset="utf-8">
<title> FAQ </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
<script src="js/jquery2.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

.w3-lobster {
  font-family: "Lobster", serif;
}
.top-container {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
  font-size: 20px;
}

.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 35%;
    height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 20px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 10px solid #ccc;
    width: 65%;
    border-left: none;
    height: 636px;
}
</style>
</head>
<body>
  <div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="w3-container w3-lobster">
				<a href="#" class="navbar-brand">Kantin Bangau</a>
			</div>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="faq.php"><span class="glyphicon glyphicon-modal-window"></span> FAQ</a></li>
        <li><a href="contactus.php"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
			</ul>
		</div>
	</div>
  <p><br/></p>
  <div class="jumbotron text-center">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 col-lg-12">
                  <h1 class="h1">
                      FAQ
              </div>
          </div>
      </div>
  </div>
<div class="tab">
  <button class="tablinks" onclick="openFaq(event, 'Mendaftar')" id="defaultOpen">Mendaftar</button>
  <button class="tablinks" onclick="openFaq(event, 'Memesan Makanan')">Memesan Makanan</button>
  <button class="tablinks" onclick="openFaq(event, 'Menambah Kuantitas')">Menambah Kuantitas</button>
  <button class="tablinks" onclick="openFaq(event, 'Membayar')">Membayar</button>
  <button class="tablinks" onclick="openFaq(event, 'Mengambil Pesanan')">Mengambil Pesanan</button>
  <button class="tablinks" onclick="openFaq(event, 'Mengidentifikasi Pesanan')">Mengidentifikasi Pesanan</button>
  <button class="tablinks" onclick="openFaq(event, 'Batal')">Batalkan Pesanan</button>
  <button class="tablinks" onclick="openFaq(event, 'Terms')">Syarat dan Ketentuan Kantin Bangau</button>
  <button class="tablinks" onclick="openFaq(event, 'Kantin')">ID Kantin</button>
</div>
<div id="Mendaftar" class="tabcontent">
  <h3>  Bagaimana cara mendaftar?</h3>
  <p>Mengisi form registrasi dan mengisi informasi Anda sesuai dengan identitas diri dan kelas yang anda duduki saat ini.</p>
</div>

<div id="Memesan Makanan" class="tabcontent">
  <h3>Sudah melakukan register pada website ini, bagaimana cara memesan makanan di website ini?</h3>
  <p>1.	Tekan login </p>
  <p>2.	Lalu masukan email dan password yang telah dibuat </p>
  <p>3.	Pilih add to cart pada makanan yang ingin dipesan </p>
</div>

<div id="Menambah Kuantitas" class="tabcontent">
  <h3>Bagaimana caranya untuk menambah lagi kuantitas suatu makanan yang akan dipesan?</h3>
  <p> 1.	Klik cart </p>
  <p> 2.	Pada kolom kuantitas, ubah angka “1” menjadi kuantitas berapa yang diinginkan </p>
  <p> 3.	Lalu pada cart summary, klik icon centang </p>
</div>

<div id="Membayar" class="tabcontent">
  <h3> Bagaimana cara membayar?</h3>
  <p> Lakukan pembayaran makanan langsung kepada owner kantin dengan menunjukan pesanan anda yang tertera pada menu pesanan. </p>
  <p> Detail pemesanan Anda dapat dilihat pada menu Orders.</p>
</div>

<div id="Mengambil Pesanan" class="tabcontent">
  <h3> Setelah melakukan pre-order, selanjutnya apa?</h3>
  <p> Setelah memesan pada website kantin bangau, Anda dapat menunggu langsung di meja kantin dan menekan tombol stop pada bagian robot lalu, dan ambil makanan pesanan Anda</p>
</div>

<div id="Mengidentifikasi Pesanan" class="tabcontent">
  <h3> Bagaimana saya dapat mengidentifikasi makanan yang telah dipesan oleh saya di robot troli Rotasi Liner?</h3>
  <p> Pada troli otomatis, Anda dapat mengambil makanan langsung saat melihat langsung kertas yang bertuliskan nama Anda dan kelas Anda.</p>
  <p> Jangan lupa tekan tombol STOP dulu untuk menghentikan robot ROTASI LINER</p>
</div>
<div id="Batal" class="tabcontent">
  <h3> Apakah bisa membatalkan pesanan?</h3>
  <p>Pesanan yang telah diorder tidak dapat dicancel kecuali, telah ada persetujuan antara pihak kantin dan siswa yang mengorder</p>
</div>
<div id="Terms" class="tabcontent">
  <h3> Syarat dan Ketentuan Kantin Bangau</h3>
  <p> 1. Pesanan yang telah diorder tidak dapat dicancel kecuali, telah ada persetujuan antara pihak kantin dan siswa yang mengorder</p>
  <p> 2. Form yang telah diisi sesuai dengan identitas Kartu Pelajar/ KTP Anda </p>
  <p> 3. Kantin Bangau berhak membatalkan pesanan yang telah dipre-order</p>
</div>
<div id="Kantin" class="tabcontent">
  <h3> ID Kantin itu apa?</h3>
  <p> ID Kantin adalah ID Vendor Kantin Bangau </p>
  <p> Berikut ini daftar ID nya : </p>
  <p> ID Kantin : 1 adalah 99 </p>
  <p> ID Kantin : 2 adalah Mie Ayam 888 </p>
  <p> ID Kantin : 3 adalah Bakso </p>
  <p> ID Kantin : 4 adalah Es Minuman</p>
  <p> ID Kantin : 5 adalah Wall's</p>
</div>
<script>
function openFaq(evt, faqName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(faqName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>
</html>
