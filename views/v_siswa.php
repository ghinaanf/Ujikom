
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
          <li><a href="#riwayat"><i class="bx bx-history"></i> Riwayat Pembayaran</a></li>
          <li><a href="logout.php"><i class="bx bx-log-out"></i> Logout</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <section id="riwayat" class="testimonials">
      <div class="container">
      <div class="section-title">
        <h2>Data Diri</h2>
        <table>
        <?php 
        $i = 1;
        while ($siswa = $listSiswa->fetch_array()){
        ?>
        <tr>
        <th>Nisn</th>
        <td>:</td>
        <td><?= $siswa ['nisn'] ?></td>
        </tr>
        <tr style="margin-top:20px;">
        <th>Nis</th>
        <td>:</td>
        <td><?= $siswa ['nis'] ?></td>
        </tr>
        <tr>
        <th>Nama Lengkap</th>
        <td>:</td>
        <td><?= $siswa ['nama'] ?></td>
        </tr>
        <tr>
        <th>Kelas</th>
        <td>:</td>
        <td><?= $siswa ['id_kelas'] ?></td>
        </tr>
        <tr>
        <th>Alamat</th>
        <td>:</td>
        <td><?= $siswa ['alamat'] ?></td>
        </tr>
        <tr>
        <th>Nomor Telepon</th>
        <td>:</td>
        <td><?= $siswa ['no_telp'] ?></td>
        </tr>
        <tr>
        <th>Id Spp</th>
        <td>:</td>
        <td><?= $siswa ['id_spp'] ?></td>
        </tr>
        <?php } ?>
        </table>
        
      <div class="section-title" style="margin-top:50px;">
        <h2>Riwayat Pembayaran SPP</h2>
  <table class="table table-bordered" id="myRiwayat">
    <thead>
      <tr>
        <th>Id Pembayaran</th>
        <th>Nama Petugas</th>
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