<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("_partials/head.php") ?>
	
</head>
<body id="page-top">

	<?php $this->load->view("_partials/navbar.php") ?>

	<div id="wrapper">
		
		<?php $this->load->view("_partials/sidebar.php") ?>
		
		<div id="content-wrapper">

		    <div class="container-fluid" >

		        <!-- 
		        karena ini halaman overview (home), kita matikan partial breadcrumb.
		        Jika anda ingin mengampilkan breadcrumb di halaman overview,
		        silahkan hilangkan komentar (//) di tag PHP di bawah.
		        -->
		    <?php //$this->load->view("_partials/breadcrumb.php") ?>
<section>
<h1> Home </h1>

  </section>
		    <!-- Icon Cards-->
		    <div class="row" >
		      	<div class="col-xl-3 col-sm-6 mb-3">
			      	<div class="card text-white bg-success o-hidden h-100">
			        	<div class="card-body">
			        		<div class="card-body-icon">
			          			<i class="fas fa-fw fa-users"></i>
			        		</div>
			        		<div class="mr-5"><h1> <?php echo $mahasiswa ?> </h1> </div>
			        	</div>
			        	<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('Chart') ?>">
					        <span class="float-left">Mahasiswa</span>
					        <span class="float-right">
					          <i class="fas fa-angle-right"></i>
					        </span>
			        	</a>
			      	</div>
		      	</div>
		      	<div class="col-xl-3 col-sm-6 mb-3">
				     <div class="card text-white bg-warning o-hidden h-100">
				        <div class="card-body">
					        <div class="card-body-icon">
					        	<i class="fas fa-fw fa-users"></i>
					        </div>
					        <div class="mr-5"><h1> <?php echo $dosen ?> </h1></div>
				        </div>
				        <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('chartdsn') ?>">
					        <span class="float-left">Dosen</span>
					        <span class="float-right">
					        	<i class="fas fa-angle-right"></i>
					        </span>
				        </a>
				    </div>
		      	</div>
		      	<div class="col-xl-3 col-sm-6 mb-3">
				    <div class="card text-white bg-danger o-hidden h-100">
				        <div class="card-body">
					        <div class="card-body-icon">
					        	<i class="fas fa-fw fa-users"></i>
					        </div>
					        <div class="mr-5"><h1> <?php echo $karyawan ?> </h1></div>
				        </div>
				        <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('chartkrw') ?>">
					        <span class="float-left">Karyawan</span>
					        <span class="float-right">
					        	<i class="fas fa-angle-right"></i>
					        </span>
				        </a>
				     </div>
		      	</div>
		    </div>

		    <!-- Sticky Footer -->
		    <?php $this->load->view("_partials/footer.php") ?>

		</div>
		  <!-- /.content-wrapper -->
	</div>
	<!-- /#wrapper -->

<div>
<?php $this->load->view("_partials/scrolltop.php") ?>
<?php $this->load->view("_partials/modal.php") ?>
<?php $this->load->view("_partials/js.php") ?>
	
</body>
</html>