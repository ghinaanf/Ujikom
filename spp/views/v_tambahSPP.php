<?php
        $action = 'tambahSPP.php';
        if (!empty($spp)) $action = 'editSPP.php';
?>
<head>
	<title>Data SPP</title>
  <link href="../assets/img/smkn4.png" rel="icon">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
    <link href="assets/img/smkn4.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<style>

.container-login100 {
  width: 100%;  
  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  
  background-color: #040b14;
}

.btn-show-pass {
  font-size: 15px;
  color: #999999;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  position: absolute;
  height: 100%;
  top: 0;
  right: 12px;
  padding: 0 5px;
  cursor: pointer;
  -webkit-transition: background 0.4s;
  -o-transition: background 0.4s;
  -moz-transition: background 0.4s;
  transition: background 0.4s;
}

.btn-show-pass:hover {
  color: #75a3a3;
}

.btn-show-pass.active {
  color: #75a3a3;
}

a:hover {
	text-decoration: none;
  color: #75a3a3;
}

.focus-input100 {
  position: absolute;
  display: block;
  width: calc(100% + 2px);
  height: calc(100% + 2px);
  top: -1px;
  left: -1px;
  pointer-events: none;
  border: 1px solid #75a3a3;
  border-radius: 3px;

  visibility: hidden;
  opacity: 0;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;

  -webkit-transform: scaleX(1.1) scaleY(1.3);
  -moz-transform: scaleX(1.1) scaleY(1.3);
  -ms-transform: scaleX(1.1) scaleY(1.3);
  -o-transform: scaleX(1.1) scaleY(1.3);
  transform: scaleX(1.1) scaleY(1.3);
}

.input-checkbox100:checked + .label-checkbox100::before {
  color: #75a3a3;
}


.login100-form-btn:hover {
  background-color: #75a3a3;
}
</style>
<body>
<form action="<?= $action ?>" method="POST" enctype="multipart/form-data">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-55 p-b-55" style="width:500px;">
				<form class="login100-form validate-form flex-sb flex-w">
                <span class="login100-form-title p-b-32">
						Data SPP
					</span>
                    <table>
                    <tr>
					<td><span class="txt1 p-b-11">
						Id SPP
					</span>
					<div class="wrap-input100 validate-input m-b-36" >
						<input class="input100" type="username" name="id_spp" value="<?= @$spp['id_spp'] ?>" style="width:390px; height:40px;" >
						<span class="focus-input100"></span>
					</div></td></tr>
					<tr>
                    <td>
                    <span class="txt1 p-b-11">
						Tahun
					</span>
					<div class="wrap-input100 validate-input m-b-36">
						<input class="input100" type="username" name="tahun" value="<?= @$spp['tahun'] ?>" style=" width:390px; height:40px;">
						<span class="focus-input100"></span>
					</div></td></tr>
                    <tr>
                    <td><span class="txt1 p-b-11">
						Nominal
					</span>
					<div class="wrap-input100 validate-input m-b-36" >
						<input class="input100" type="username" name="nominal" value="<?= @$spp['nominal'] ?>">
						<span class="focus-input100"></span>
					</div></td></tr>
                    <tr>
					<td><div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" style="margin-left:240px;">
							Simpan
						</button>
					</div></td></tr>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
