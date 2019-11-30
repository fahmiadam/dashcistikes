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

			<div class="container-fluid">

				<?php $this->load->view("_partials/breadcrumb.php") ?>

            <span><h1>Data Mahasiswa 2007</h1></span>
            				<?php $this->load->view("_partials/footer.php") ?>

    
 
<!-- <div class="row"> -->

<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".agama" aria-expanded="false" aria-controls="agama1 agama2">Agama</button></ol>


  <div class="row">
 <div class="col-lg-4">
 <div class="collapse agama" id="agama1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Agama</div>
	<!-- <div class="form-inline">	 --> 
   <!-- <th> -->
      <script src="highcharts/pie/highcharts.js"></script>
			<script src="highcharts/pie/exporting.js"></script>
			<script src="highcharts/pie/export-data.js"></script>

			<div id="agama" width="50%" height="50"></div>
			<script type="text/javascript">

			Highcharts.chart('agama', {
		    chart: {
		        plotBackgroundColor: null,
		        plotBorderWidth: null,
		        plotShadow: false,
		        type: 'pie'
		    },
		    title: {
		        text: 'Agama'
		    },
		    tooltip: {
		        pointFormat: '<b>{point.percentage:.1f}%</b> {series.name}'+
        '<br> Total: <b>{point.y}</b>'
		    },
		    plotOptions: {
		        pie: {
		            allowPointSelect: true,
		            cursor: 'pointer',
		            dataLabels: {
		                enabled: true,
		                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
		                style: {
		                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
		                }
		            }
		        }
		    },
		    series: [{
		        name: '',
		        colorByPoint: true,

		       data: [
           <?php
            foreach($agama as $g){
              echo "{name: '$g->agama',y: $g->jumlah},";
            }
           ?>
        ]
		        }]      
		   
		});

		</script></div></div></div>
 <!--  </th> -->

<!-- <th> -->
  
 <div class="col-lg-8">
 <div class="collapse agama" id="agama2">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Agama</div>
<script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>
<div id="agamaa" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('agamaa', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'column'
        },
        title: {
            text: 'Agama'
        },
        tooltip: {
            pointFormat: '{series.name}'+
        '<br> Total: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,

           data: [
           <?php
            foreach($agama as $g){
              echo "{name: '$g->agama',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });
    </script>
<!-- </th> --></div></div></div></div>



<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".prodi" aria-expanded="false" aria-controls="prodi1 prodi2">
          Prodi</button></ol>

  <div class="row">
 <div class="col-lg-4">
<div class="collapse prodi" id="prodi1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Prodi</div>
  <!-- <div class="form-inline">   --> 
   <!-- <th> -->
      <script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>

      <div id="pilihanprodi1" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('pilihanprodi1', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Prodi'
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b> {series.name}'+
        '<br> Total: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,

           data: [
           <?php
            foreach($pilihanprodi as $g){
              echo "{name: '$g->pilihanprodi',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });

    </script></div></div></div>
 <!--  </th> -->

<!-- <th> -->
  
 <div class="col-lg-8">
 <div class="collapse prodi" id="prodi2">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Prodi</div>
<script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>
<div id="pilihanprodi" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('pilihanprodi', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'column'
        },
        title: {
            text: 'Prodi'
        },
        tooltip: {
            pointFormat: '{series.name}'+
        '<br> Total: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,

           data: [
           <?php
            foreach($pilihanprodi as $g){
              echo "{name: '$g->pilihanprodi',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });
    </script>
<!-- </th> --></div> </div> </div> </div>


<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".status" aria-expanded="false" aria-controls="status1 status2">
          Status</button></ol>

  <div class="row">
 <div class="col-lg-4">
<div class="collapse status" id="status1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Status</div>
  <!-- <div class="form-inline">   --> 
   <!-- <th> -->
      <script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>

      <div id="status" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('status', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Status'
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b> {series.name}'+
        '<br> Total: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,

           data: [
           <?php
            foreach($status as $g){
              echo "{name: '$g->status',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });

    </script></div></div></div>
 <!--  </th> -->

<!-- <th> -->
  
 <div class="col-lg-8">
 <div class="collapse status" id="status2">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Status</div>
<script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>
<div id="statuss" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('statuss', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'column'
        },
        title: {
            text: 'Status'
        },
        tooltip: {
            pointFormat: '{series.name}'+
        '<br> Total: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,

           data: [
           <?php
            foreach($status as $g){
              echo "{name: '$g->status',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });
    </script>
<!-- </th> --></div> </div> </div> </div>


<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".programkuliah" aria-expanded="false" aria-controls="programkuliah1 programkuliah2">
          Program Kuliah</button></ol>

  <div class="row">
 <div class="col-lg-4">
<div class="collapse programkuliah" id="programkuliah1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Status</div>
  <!-- <div class="form-inline">   --> 
   <!-- <th> -->
      <script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>

      <div id="programkuliah" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('programkuliah', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Program Kuliah'
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b> {series.name}'+
        '<br> Total: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,

           data: [
           <?php
            foreach($programkuliah as $g){
              echo "{name: '$g->programkuliah',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });

    </script></div></div></div>
 <!--  </th> -->

<!-- <th> -->
  
 <div class="col-lg-8">
 <div class="collapse programkuliah" id="programkuliah2">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Program Kuliah</div>
<script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>
<div id="programkuliahh" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('programkuliahh', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'column'
        },
        title: {
            text: 'Program Kuliah'
        },
        tooltip: {
            pointFormat: '{series.name}'+
        '<br> Total: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,

           data: [
           <?php
            foreach($programkuliah as $g){
              echo "{name: '$g->programkuliah',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });
    </script>
<!-- </th> --></div> </div> </div> </div>


<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".jenjang" aria-expanded="false" aria-controls="jenjang1 jenjang2">
          Jenjang</button></ol>

  <div class="row">
 <div class="col-lg-4">
<div class="collapse jenjang" id="jenjang1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Jenjang</div>
  <!-- <div class="form-inline">   --> 
   <!-- <th> -->
      <script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>

      <div id="jenjang" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('jenjang', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Jenjang'
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b> {series.name}'+
        '<br> Total: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,

           data: [
           <?php
            foreach($jenjang as $g){
              echo "{name: '$g->jenjang',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });

    </script></div></div></div>
 <!--  </th> -->

<!-- <th> -->
  
 <div class="col-lg-8">
 <div class="collapse jenjang" id="jenjang2">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Jenjang</div>
<script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>
<div id="jenjangg" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('jenjangg', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'column'
        },
        title: {
            text: 'Jenjang'
        },
        tooltip: {
            pointFormat: '{series.name}'+
        '<br> Total: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,

           data: [
           <?php
            foreach($jenjang as $g){
              echo "{name: '$g->jenjang',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });
    </script>
<!-- </th> --></div> </div> </div> </div>


<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".pembimbing" aria-expanded="false" aria-controls="pembimbing1 pembimbing2">
          Pembimbing</button></ol>

  <div class="row">
 <div class="col-lg-4">
<div class="collapse pembimbing" id="pembimbing1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Pembimbing</div>
  <!-- <div class="form-inline">   --> 
   <!-- <th> -->
      <script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>

      <div id="pembimbing" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('pembimbing', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Pembimbing'
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b> {series.name}'+
        '<br> Total: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,

           data: [
           <?php
            foreach($pembimbing as $g){
              echo "{name: '$g->pembimbing',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });

    </script></div></div></div>
 <!--  </th> -->

<!-- <th> -->
  
 <div class="col-lg-8">
 <div class="collapse pembimbing" id="pembimbing2">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Pembimbing</div>
<script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>
<div id="pembimbingg" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('pembimbingg', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'column'
        },
        title: {
            text: 'Pembimbing'
        },
        tooltip: {
            pointFormat: '{series.name}'+
        '<br> Total: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,

           data: [
           <?php
            foreach($pembimbing as $g){
              echo "{name: '$g->pembimbing',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });
    </script>
<!-- </th> --></div> </div> </div> </div>


<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".kurikulum" aria-expanded="false" aria-controls="kurikulum1 kurikulum2">
          Kurikulum</button></ol>

  <div class="row">
 <div class="col-lg-4">
<div class="collapse kurikulum" id="kurikulum1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Kurikulum</div>
  <!-- <div class="form-inline">   --> 
   <!-- <th> -->
      <script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>

      <div id="kurikulum" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('kurikulum', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Kurikulum'
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b> {series.name}'+
        '<br> Total: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,

           data: [
           <?php
            foreach($kurikulum as $g){
              echo "{name: '$g->kurikulum',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });

    </script></div></div></div>
 <!--  </th> -->

<!-- <th> -->
  
 <div class="col-lg-8">
 <div class="collapse kurikulum" id="kurikulum2">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Kurikulum</div>
<script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>
<div id="kurikulumm" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('kurikulumm', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'column'
        },
        title: {
            text: 'Kurikulum'
        },
        tooltip: {
            pointFormat: '{series.name}'+
        '<br> Total: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,

           data: [
           <?php
            foreach($kurikulum as $g){
              echo "{name: '$g->kurikulum',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });
    </script>
<!-- </th> --></div> </div> </div> </div>


<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".provinsi" aria-expanded="false" aria-controls="provinsi1 provinsi2">
          Provinsi</button></ol>

  <div class="row">
 <div class="col-lg-4">
<div class="collapse provinsi" id="provinsi1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Provinsi</div>
  <!-- <div class="form-inline">   --> 
   <!-- <th> -->
      <script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>

      <div id="provinsi" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('provinsi', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Provinsi'
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b> {series.name}'+
        '<br> Total: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,

           data: [
           <?php
            foreach($provinsi as $g){
              echo "{name: '$g->provinsi',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });

    </script></div></div></div>
 <!--  </th> -->

<!-- <th> -->
  
 <div class="col-lg-8">
 <div class="collapse provinsi" id="provinsi2">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Provinsi</div>
<script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>
<div id="provinsii" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('provinsii', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'column'
        },
        title: {
            text: 'Provinsi'
        },
        tooltip: {
            pointFormat: '{series.name}'+
        '<br> Total: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,

           data: [
           <?php
            foreach($provinsi as $g){
              echo "{name: '$g->provinsi',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });
    </script>
<!-- </th> --></div> </div> </div> </div>

<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".kabupaten" aria-expanded="false" aria-controls="kabupaten1 kabupaten2">
          Kabupaten</button></ol>

  <div class="row">
 <div class="col-lg-4">
<div class="collapse kabupaten" id="kabupaten1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Kabupaten</div>
  <!-- <div class="form-inline">   --> 
   <!-- <th> -->
      <script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>

      <div id="kabupaten" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('kabupaten', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Kabupaten'
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b> {series.name}'+
        '<br> Total: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,

           data: [
           <?php
            foreach($kabupaten as $g){
              echo "{name: '$g->kabupaten',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });

    </script></div></div></div>
 <!--  </th> -->

<!-- <th> -->
  
 <div class="col-lg-8">
 <div class="collapse kabupaten" id="kabupaten2">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Kabupaten</div>
<script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>
<div id="kabupatenn" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('kabupatenn', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'column'
        },
        title: {
            text: 'Kabupaten'
        },
        tooltip: {
            pointFormat: '{series.name}'+
        '<br> Total: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,

           data: [
           <?php
            foreach($kabupaten as $g){
              echo "{name: '$g->kabupaten',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });
    </script>
<!-- </th> --></div> </div> </div> </div>

<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".jenisekolah" aria-expanded="false" aria-controls="jenisekolah1 jenisekolah2">
          Jenis Sekolah</button></ol>

  <div class="row">
 <div class="col-lg-4">
<div class="collapse jenisekolah" id="jenisekolah1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Jenis Sekolah</div>
  <!-- <div class="form-inline">   --> 
   <!-- <th> -->
      <script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>

      <div id="jenisekolah" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('jenisekolah', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Jenis Sekolah'
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b> {series.name}'+
        '<br> Total: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,

           data: [
           <?php
            foreach($jenisekolah as $g){
              echo "{name: '$g->jenisekolah',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });

    </script></div></div></div>
 <!--  </th> -->

<!-- <th> -->
  
 <div class="col-lg-8">
 <div class="collapse jenisekolah" id="jenisekolah2">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Jenis Sekolah</div>
<script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>
<div id="jenisekolahh" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('jenisekolahh', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'column'
        },
        title: {
            text: 'Jenis Sekolah'
        },
        tooltip: {
            pointFormat: '{series.name}'+
        '<br> Total: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,

           data: [
           <?php
            foreach($jenisekolah as $g){
              echo "{name: '$g->jenisekolah',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });
    </script>
<!-- </th> --></div> </div> </div> </div>


<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".statuspindahan" aria-expanded="false" aria-controls="statuspindahan1 statuspindahan2">
          Status Pindahan</button></ol>

  <div class="row">
 <div class="col-lg-4">
<div class="collapse statuspindahan" id="statuspindahan1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Status Pindahan</div>
  <!-- <div class="form-inline">   --> 
   <!-- <th> -->
      <script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>

      <div id="statuspindahan" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('statuspindahan', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Status Pindahan'
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b> {series.name}'+
        '<br> Total: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,

           data: [
           <?php
            foreach($statuspindahan as $g){
              echo "{name: '$g->statuspindahan',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });

    </script></div></div></div>
 <!--  </th> -->

<!-- <th> -->
  
 <div class="col-lg-8">
 <div class="collapse statuspindahan" id="statuspindahan2">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Status Pindahan</div>
<script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>
<div id="statuspindahann" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('statuspindahann', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'column'
        },
        title: {
            text: 'Status Pindahan'
        },
        tooltip: {
            pointFormat: '{series.name}'+
        '<br> Total: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,

           data: [
           <?php
            foreach($statuspindahan as $g){
              echo "{name: '$g->statuspindahan',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });
    </script>
<!-- </th> --></div> </div> </div> </div>





<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".penghasilanortu" aria-expanded="false" aria-controls="penghasilanortu1 penghasilanortu2">
          Penghasilan Orang tua</button></ol>

  <div class="row">
 <div class="col-lg-4">
<div class="collapse penghasilanortu" id="penghasilanortu1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Penghasilan Orang tua</div>
  <!-- <div class="form-inline">   --> 
   <!-- <th> -->
      <script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>

      <div id="penghasilanortu" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('penghasilanortu', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Penghasilan Orang tua'
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b> {series.name}'+
        '<br> Total: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,

           data: [
           <?php
            foreach($penghasilanortu as $g){
              echo "{name: '$g->penghasilanortu',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });

    </script></div></div></div>
 <!--  </th> -->

<!-- <th> -->
  
 <div class="col-lg-8">
 <div class="collapse penghasilanortu" id="penghasilanortu2">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Penghasilan Orang tua</div>
<script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>
<div id="penghasilanortuu" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('penghasilanortuu', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'column'
        },
        title: {
            text: 'Penghasilan Orang tua'
        },
        tooltip: {
            pointFormat: '{series.name}'+
        '<br> Total: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },

        series: [{
            name: '',
            colorByPoint: true,

           data: [
           <?php
            foreach($penghasilanortu as $g){
              echo "{name: '$g->penghasilanortu',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });
    </script>
<!-- </th> --></div> </div> </div> </div>

            </div>
        </div>
    </div>

		<?php $this->load->view("_partials/scrolltop.php") ?>
<?php $this->load->view("_partials/modal.php") ?>
		<?php $this->load->view("_partials/js.php") ?>

</body>

</html>