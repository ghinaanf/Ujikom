<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pembayaran SPP</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/smkn4.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Pagination -->
  <link href="assets/dataTables/datatables.min.css" rel="stylesheet">

  <!-- Notif -->
  <script type="text/javascript" src="<?php echo base_url()?>/media/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>/media/js/bootstrap.min.js"></script>

  <link href="<?php echo base_url() ?>/media/plugins/toastr/toastr.min.css" rel="stylesheet">
  <script type="text/javascript" src="<?php echo base_url()?>/media/plugins/toastr/toastr.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="">
        <img src="assets/img/smkn4.png" alt="" class="img-fluid rounded" style="margin-top:30px; margin-left:70px; width:115px">

      <nav class="nav-menu">
        <ul>
          <li><a href="#datasiswa"><i class="bx bx-user"></i> <span>Data Siswa</span></a></li>
          <li><a href="#datakelas"><i class="bx bx-building"></i> <span>Data Kelas</span></a></li>
          <li><a href="#datapetugas"><i class="bx bx-book-content"></i> Data Petugas</a></li>
          <li><a href="#dataspp"><i class="bx bx-server"></i> Data SPP</a></li>
          <li><a href="#datapembayaranspp"><i class="bx bx-bar-chart"></i> Data Pembayaran SPP</a></li>
          <li><a href="#riwayat"><i class="bx bx-history"></i> Riwayat Pembayaran</a></li>
          <li><a href="logout.php"><i class="bx bx-log-out"></i> Logout</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="datasiswa" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Data Siswa</h2>
        <table class="table table-bordered" id="myTable">
        <thead>
        <tr><button class="btn" style="background-color: #040b14; margin-left:915px; margin-bottom:5px;"><a href="siswa/tambahSiswa.php" style="color:#e0e4e8; font-size:14px;">Create Data</a></button></tr>
        <tr>
        <th>Nisn</th>
        <th>Nis</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th>No Telepon</th>
        <th>Id Spp</th>
        <th></th>
        <th></th>
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
	<td><?= $siswa ['nama_kelas'] ?></td>
	<td><?= $siswa ['alamat'] ?></td>
	<td><?= $siswa ['no_telp'] ?></td>
    <td><?= $siswa ['id_spp'] ?></td>
    <td><a href="siswa/editSiswa.php?nisn=<?= $siswa['nisn'] ?>" class="btn"><span class="bx bx-edit"></td>
    <td><a href="siswa/deleteSiswa.php?nisn=<?= $siswa['nisn'] ?>" class="btn btnDelete"><span class="bx bx-trash"></td>
</tr>
    <?php } ?>
        </tbody>
        </table>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="datakelas" class="resume">
      <div class="container">

        
      <div class="section-title">
          <h2>Data Kelas</h2>
        <table class="table table-bordered" id="myKelas">
        <thead>
        <tr><button class="btn" style="background-color: #040b14; margin-left:915px; margin-bottom:5px;"><a href="kelas/tambahKelas.php" style="color:#e0e4e8; font-size:14px;">Create Data</a></button></tr>
        <tr>
        <th>Id</th>
        <th>Nama Kelas</th>
        <th>Kompetensi Keahlian</th>
        <th></th>
        <th></th>
    </tr>
</thead>
    <tbody>
    <?php 
        $i = 1;
        while ($kelas = $listKelas->fetch_array()){
    ?><tr>
	  <td><?= $kelas ['id_kelas'] ?></td>
	  <td><?= $kelas ['nama_kelas'] ?></td>
	  <td><?= $kelas ['kmp_keahlian'] ?></td>
    <td><a href="kelas/editKelas.php?id_kelas=<?= $kelas['id_kelas'] ?>" class="btn"><span class="bx bx-edit"></td>
    <td><a href="kelas/deleteKelas.php?id_kelas=<?= $kelas['id_kelas'] ?>" class="btn btnDelete"><span class="bx bx-trash"></td>
</tr>
    <?php } ?>
        </tbody>
        </table>
      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="datapetugas" class="portfolio section-bg">
      <div class="container">

      <div class="section-title">
        <h2>Data Petugas</h2>
  <table class="table table-bordered" id="myPetugas">
    <thead>
    <tr><button class="btn" style="background-color: #040b14; margin-left:915px; margin-bottom:5px;"><a href="petugas/tambahPetugas.php" style="color:#e0e4e8; font-size:14px;">Create Data</a></button></tr>
      <tr>
        <th>Id</th>
        <th>NIP</th>
        <th>Nama Petugas</th>
        <th>Status</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php 
        $i = 1;
        while ($petugas = $listPetugas->fetch_array()){
    ?><tr>
	<td><?= $petugas ['id_petugas'] ?></td>
	<td><?= $petugas ['nip'] ?></td>
	<td><?= $petugas ['nama_petugas'] ?></td>
  <td><?= $petugas ['status'] ?></td>
  <td><a href="petugas/editPetugas.php?id_petugas=<?= $petugas['id_petugas'] ?>" class="btn"><span class="bx bx-edit"></td>
    <td><a href="petugas/deletePetugas.php?id_petugas=<?= $petugas['id_petugas'] ?>" class="btn btnDelete"><span class="bx bx-trash"></td>
</tr>
    <?php } ?>
        </tbody>
        </table>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="dataspp" class="services">
      <div class="container">

      <div class="section-title">
        <h2>Data SPP</h2>
  <table class="table table-bordered" id="mySPP">
    <thead>
    <tr><button class="btn" style="background-color: #040b14; margin-left:915px; margin-bottom:5px;"><a href="spp/tambahSPP.php" style="color:#e0e4e8; font-size:14px;">Create Data</a></button></tr>
      <tr>
        <th>Id SPP</th>
        <th>Tahun</th>
        <th>Nominal</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php 
        $i = 1;
        while ($spp = $listSPP->fetch_array()){
    ?><tr>
	<td><?= $spp ['id_spp'] ?></td>
	<td><?= $spp ['tahun'] ?></td>
	<td><?= $spp ['nominal'] ?></td>
  <td><a href="spp/editSPP.php?id_spp=<?= $spp['id_spp'] ?>" class="btn"><span class="bx bx-edit"></td>
    <td><a href="spp/deleteSPP.php?id_spp=<?= $spp['id_spp'] ?>" class="btn btnDelete"><span class="bx bx-trash"></td>
</tr>
    <?php } ?>
        </tbody>
        </table>
      </div>
    </section><!-- End Services Section -->

     <!-- ======= Contact Section ======= -->
     <section id="datapembayaranspp" class="contact">
      <div class="container">

      <div class="section-title">
        <h2>Data SPP Siswa</h2>
  <table class="table table-bordered" id="mySPPSiswa">
    <thead>
      <tr>
        <th>Id SPP</th>
        <th>Nisn</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Tahun</th>
        <th>Nominal</th>
        <th>Sisa</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php 
        $i = 1;
        while ($data = $listData->fetch_array()){
    ?><tr>
	<td><?= $data ['id_spp'] ?></td>
  <td><?= $data ['nisn'] ?></td>
	<td><?= $data ['nama'] ?></td>
	<td><?= $data ['nama_kelas'] ?></td>
  <td><?= $data ['tahun'] ?></td>
  <td><?= $data ['nominal'] ?></td>
  <td><?= $data ['sisa'] ?></td>
  <td><button class="btn" style="background-color: #040b14;"><a href="pembayaran/tambahPembayaran.php?nisn=<?= $data['nisn'] ?>"" style="color:#e0e4e8; font-size:14px;">Bayar SPP</a></button></td>
</tr>
    <?php } ?>
        </tbody>
        </table>
      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="riwayat" class="testimonials section-bg">
      <div class="container">

      <div class="section-title">
        <h2>Riwayat Pembayaran SPP</h2>
  <table class="table table-bordered" id="myRiwayat">
    <thead>
      <tr>
        <th>Id Pembayaran</th>
        <th>Id Petugas</th>
        <th>Nisn</th>
        <th>Waktu Bayar</th>
        <th>Bulan dibayar</th>
        <th>Tahun dibayar</th>
        <th>Id Spp</th>
        <th>Jumlah bayar</th>
      </tr>
    </thead>
    <tbody>
    <?php 
        $i = 1;
        while ($riwayat = $listRiwayat->fetch_array()){
    ?><tr>
	<td><?= $riwayat ['id_pembayaran'] ?></td>
	<td><?= $riwayat ['nama_petugas'] ?></td>
	<td><?= $riwayat ['nama'] ?></td>
  <td><?= $riwayat ['tgl_bayar'] ?></td>
  <td><?= $riwayat ['bulan_dibayar'] ?></td>
  <td><?= $riwayat ['tahun_dibayar'] ?></td>
  <td><?= $riwayat ['id_spp'] ?></td>
  <td><?= $riwayat ['jumlah_bayar'] ?></td>
</tr>
    <?php } ?>
        </tbody>
        </table>
      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/dataTables/datatables.min.js"></script>
    
  <script type="text/javascript">
        $(document).ready( function () {
        $('#myTable').DataTable();
        } );
    </script>

<script type="text/javascript">
        $(document).ready( function () {
        $('#myKelas').DataTable();
        } );
    </script>

<script type="text/javascript">
        $(document).ready( function () {
        $('#myPetugas').DataTable();
        } );
    </script>

<script type="text/javascript">
        $(document).ready( function () {
        $('#mySPP').DataTable();
        } );
    </script>
    <script type="text/javascript">
        $(document).ready( function () {
        $('#mySPPSiswa').DataTable();
        } );
    </script>

<script type="text/javascript">
        $(document).ready( function () {
        $('#myRiwayat').DataTable();
        } );
    </script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  <div class="modal fade" id="modal-id" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
      <h4 class="modal-title"></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary btnYa">Ya</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function() {
		$(".btnDelete").on("click",function(e){
			e.preventDefault();

			var nama = $(this).parent().parent().children()[2];
			nama = $(nama).html();

			var tr = $(this).parent().parent();

			$(".modal").modal('show');
			$(".modal-title").html('Konfirmasi');
			$(".modal-body").html('Anda yakin ingin menghapus data <b>' + nama + '</b> ?');
			var href = $(this).attr('href');

			$('.btnYa').off();
			$('.btnYa').on('click',function(){
				$.ajax({
					'url'		: href,
					'type'	: 'POST',
					'success': function(result){
						if (result == 1) {
							$(".modal").modal('hide');
							tr.fadeOut();

							toastr.success('Data Berhasil dihapus','Informasi');
						}
					}
				});
			});
		});
	});

</script>


</body>

</html>