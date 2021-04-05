<?php
session_start();

if(!isset($_SESSION["uid"])){
	header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="gambar/cart.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<title> Checkout </title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
<script src="js/jquery2.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="main.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.w3-lobster {
	font-family: "Lobster", serif;
}
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}
* {
  box-sizing: border-box;
}
.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 80%; /* IE10 */
  flex: 80%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 20px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}
.danger {background-color: #f44336;} /* Red */
.danger:hover {background: #da190b;}
span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
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
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
<div class="row">
  <div class="col-75">
    <div class="container">
			<button class="btn danger">Perhatian!
				<p> Pesanan yang telah dipesan tidak dapat dibatalkan! </p></button>
      <form action="checkout_connect.php" method="post">

        <div class="row">
          <div class="col-50">
            <h3>Identitas Pelanggan</h3>
            <label for="name"><i class="fa fa-user"></i> Nama Lengkap Anda</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Contoh : Indah Kumala">
						<label for="mobile"><i class="fa fa-envelope"></i> Nomor Telepon</label>
            <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Contoh : 123456789">
            <label for="kelas"><i class="fa fa-institution"></i> Kelas</label>
            <input type="text" id="kelas" name="kelas" class="form-control" placeholder="Contoh : 11 MIA 1">
            <label for ="schedule"><i class="fa fa-calendar"></i> Kapan mau diambil?</label>
            <input type="radio" id="schedule" name="schedule" value="Istirahat 1"> Istirahat 1
            </br>
            <input type="radio" id="schedule" name="schedule" value="Istirahat 2"> Istirahat 2
            </br>
            <input type="radio" id="schedule" name="schedule" value="Pulang Sekolah"> Pulang Sekolah
            </br>
				</br>

						<label for="cash"><i class="fa fa-money"></i> Pembayaran secara tunai</label>
					<label for="cart"><i class="fa fa-shopping-cart"></i> Cart</label>
					            <div class="row">
					              <div class="col-md-2"></div>
					              <div class="col-md-8" id="cart_checkout">
					              </div>
					            </div>
											<label>
											<input type="checkbox" checked="checked" name="sameadr"> Saya menerima
											<a href ="faq.php"> Syarat dan Ketentuan</a> yang ditetapkan Kantin Bangau
										</label>
										<button type="submit" class="btn btn-primary pull-right" id="btn_checkout"> Akhiri Checkout </button>

					          </div>
									</div>
								</div>
								</div>

									</div>
				</form>


</body>
</html>
<script>
//yang diubah data checkout
$(document).on('click', '#btn_checkout', function(){
           var name = $('#name').text();
           var mobile = $('#mobile').text();
					 var kelas = $('#kelas').text();
           var schedule = $('#schedule').text();
					 if(nama == '')
					 {
		 			 alert("Masukan nama pelanggan");
		 		 		return false;
			 			}
						if(alamat == '')
						{
		 				alert("Masukan alamat pelanggan");
		 			return false;
						}
						if(notelp == '')
						{
		 				alert("Masukan nomor telepon pelanggan");
		 			return false;
				}
           $.ajax({
                url:"checkout_connect.php",
                method:"POST",
                data:{name:name, mobile:mobile, kelas:kelas, schedule:schedule},
                dataType:"text",
                success:function(data)
                {
                     alert(data);
                     fetch_data();
                }
           })
      });
</script>
