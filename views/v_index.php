<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Tables</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
</head>
<style>
    #topheader .navbar-nav li > a {
	text-transform: capitalize;
	color: #333;
	transition: background-color .2s, color .2s;
	
	&:hover,
	&:focus {
		background-color: #333;
		color: #fff;
	}
}

#topheader .navbar-nav li.active > a {
	background-color: #006084;
	color: #fff;
}

#table{
border-radius:5px;
}

.table-hei{
	height:300px;
	width:1200px;
	background-color:#ffffff;	
}

th, td{
	text-align:center;
}
.txt{
	color: #006084;
}
</style>
<body class="txt">
  <div id="topheader">
  <nav class="navbar navbar-light">
		<div class="container-fluid">
			 <div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand">SMKN 4 Bandung</a>
			 </div>
			 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
						<li class="active"><a href="#home">Data Petugas<span class="sr-only">(current)</span></a></li>
						<li><a href="#page1">Data Siswa</a></li>
						<li><a href="#page2">Data Kelas</a></li>
						<li><a href="#page3">Data SPP</a></li>
						<li><a href="#page3">Data SPP</a></li>
				  </ul>
				  <div class="dropdown" style="margin-left:1200px;">
   	 					<button class="btn" data-toggle="dropdown">Hallo {{ Auth::user()->level }} <span class="caret"></span></button>
    						<ul class="dropdown-menu">
      						<li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
    					</ul>
			 </div>
		</div>
  </nav>
    <table class="table table-bordered" id="myTable">
    <thead>
    <tr>
        <td>Nisn</td>
        <td>Nis</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Alamat</td>
        <td>No Telepon</td>
        <td>Id SPP</td>
    </tr>
	</thead>
    <tbody>
	<?php 
        $i = 1;
        while ($siswa = $listSiswa->fetch_array()){
    ?><tr>
	<td><?= $siswa ['nisn'] ?></td>
	<td><?= $siswa ['nis'] ?></td>
	<td><?= $siswa ['nama'] ?></td>
	<td><?= $siswa ['id_kelas'] ?></td>
	<td><?= $siswa ['alamat'] ?></td>
	<td><?= $siswa ['no_telp'] ?></td>
	<td><?= $siswa ['id_spp'] ?></td>
</tr>
	<?php } ?>
</div>
<script>
$( '#topheader .navbar-nav a' ).on( 'click', function () {
	$( '#topheader .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
	$( this ).parent( 'li' ).addClass( 'active' );
});
</script>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
</body>
</html>