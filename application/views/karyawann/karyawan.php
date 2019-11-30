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

            <span><h1>Karyawan</h1></span>
                    <?php $this->load->view("_partials/footer.php") ?>


  <ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".jenis_kelamin" aria-expanded="false" aria-controls="jenis_kelamin1 jenis_kelamin2">Jenis Kelamin</button></ol>


  <div class="row">
 <div class="col-lg-4">
 <div class="collapse jenis_kelamin" id="jenis_kelamin1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  jenis_kelamin</div> <!-- <div class="form-inline">   -->
   <!-- <th> -->
      <script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>

      <div id="jenis_kelamin" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('jenis_kelamin', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'jenis_kelamin'
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
            foreach($jenis_kelamin as $g){
              echo "{name: '$g->jenis_kelamin',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });

    </script></div></div></div>
 <!--  </th> -->

<!-- <th> -->
  
 <div class="col-lg-8">
 <div class="collapse jenis_kelamin" id="jenis_kelamin2">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  jenis_kelamin</div>
<script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>
<div id="jenis_kelaminn" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('jenis_kelaminn', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'column'
        },
        title: {
            text: 'jenis_kelamin'
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
            foreach($jenis_kelamin as $g){
              echo "{name: '$g->jenis_kelamin',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });
    </script>
<!-- </th> --></div></div></div></div>



<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".status" aria-expanded="false" aria-controls="status1 status2">Status</button></ol>


  <div class="row">
 <div class="col-lg-4">
 <div class="collapse status" id="status1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  status</div> <!-- <div class="form-inline">   -->
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
            text: 'status'
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
                  status</div>
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
            text: 'status'
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
<!-- </th> --></div></div></div></div>


<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".agama" aria-expanded="false" aria-controls="agama1 agama2">Agama</button></ol>


  <div class="row">
 <div class="col-lg-4">
 <div class="collapse agama" id="agama1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  agama</div> <!-- <div class="form-inline">   -->
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
            text: 'agama'
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
                  agama</div>
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
            text: 'agama'
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


<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".jabatan" aria-expanded="false" aria-controls="jabatan1 jabatan2">Jabatan</button></ol>


  <div class="row">
 <div class="col-lg-4">
 <div class="collapse jabatan" id="jabatan1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  jabatan</div> <!-- <div class="form-inline">   -->
   <!-- <th> -->
      <script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>

      <div id="jabatan" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('jabatan', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'jabatan'
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
            foreach($jabatan as $g){
              echo "{name: '$g->jabatan',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });

    </script></div></div></div>
 <!--  </th> -->

<!-- <th> -->
  
 <div class="col-lg-8">
 <div class="collapse jabatan" id="jabatan2">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  jabatan</div>
<script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>
<div id="jabatann" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('jabatann', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'column'
        },
        title: {
            text: 'jabatan'
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
            foreach($jabatan as $g){
              echo "{name: '$g->jabatan',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });
    </script>
<!-- </th> --></div></div></div></div>


<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".kota" aria-expanded="false" aria-controls="kota1 kota2">Kota</button></ol>


  <div class="row">
 <div class="col-lg-4">
 <div class="collapse kota" id="kota1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  kota</div> <!-- <div class="form-inline">   -->
   <!-- <th> -->
      <script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>

      <div id="kota" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('kota', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'kota'
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
            foreach($kota as $g){
              echo "{name: '$g->kota',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });

    </script></div></div></div>
 <!--  </th> -->

<!-- <th> -->
  
 <div class="col-lg-8">
 <div class="collapse kota" id="kota2">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  kota</div>
<script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>
<div id="kotaa" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('kotaa', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'column'
        },
        title: {
            text: 'jabatan'
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
            foreach($kota as $g){
              echo "{name: '$g->kota',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });
    </script>
<!-- </th> --></div></div></div></div>


<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".provinsi" aria-expanded="false" aria-controls="provinsi1 provinsi2">Provinsi</button></ol>


  <div class="row">
 <div class="col-lg-4">
 <div class="collapse provinsi" id="provinsi1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Provinsi</div> <!-- <div class="form-inline">   -->
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
            text: 'provinsi'
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
                  provinsi</div>
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
            text: 'provinsi'
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
<!-- </th> --></div></div></div></div>


<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".golongan" aria-expanded="false" aria-controls="golongan1 golongan2">Golongan</button></ol>


  <div class="row">
 <div class="col-lg-4">
 <div class="collapse golongan" id="golongan1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  golongan</div> <!-- <div class="form-inline">   -->
   <!-- <th> -->
      <script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>

      <div id="golongan" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('golongan', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'golongan'
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
            foreach($golongan as $g){
              echo "{name: '$g->golongan',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });

    </script></div></div></div>
 <!--  </th> -->

<!-- <th> -->
  
 <div class="col-lg-8">
 <div class="collapse golongan" id="golongan2">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  golongan</div>
<script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>
<div id="golongann" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('golongann', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'column'
        },
        title: {
            text: 'golongan'
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
            foreach($golongan as $g){
              echo "{name: '$g->golongan',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });
    </script>
<!-- </th> --></div></div></div></div>

    
             <!-- <div class="card mb-3">
      <form class="form-inline" action="#" method="post" enctype="multipart/form-data" >
   <div class="form-group">
              <div class="col-md-4">
                <label class="control-label">Menu</label>
                                    <select class=""btn btn-secondary dropdown-toggle" name="menu"">
                                        <option value="all">Lihat Semua</option>
                                        <option value="Agama">Agama</option>
                                        <option value="Jeniskelamin">Jenis Kelamin</option>
                                        <option value="Programstudi">Program Studi</option>
                                         <option value="Status">Status</option>
                                        <option value="Programkuliah">Program Kuliah</option>
                                        <option value="Jenjang">Jenjang</option>
                                        <option value="pembimbing">Pembimbing</option>
                                         <option value="Kurikulum">Kurikulum</option>
                                        <option value="Provinsi">Provinsi</option>
                                        <option value="Kota">Kota</option>
                                        <option value="Jenisekolah">Jenis Sekolah</option>
                                         <option value="Statuspindahan">Status Pindahan</option>
                                        <option value="Tahunmasuk">Tahun Masuk</option>
                                        <option value="Penghasilan">Penghasilan Orang Tua</option>
                                        <option value="Perbandingan">Perbandingan Data</option>
                                    </select>
                                </div>
</div>
       
<div class="form-group">
   <div class="col-md-4">
                <label class="control-label">Tahun</label>
   <select name="Tahun" id="Tahun" class="btn btn-secondary dropdown-toggle">
    <option value="allss">Lihat Semua</option>
    <?php
    foreach($tahun as $t)
    {
     echo '<option value="'.$t->tahun.'">'.$t->tahun.'</option>';
    }
    ?>
   </select>
  </div>
</div>
</form> </div>

  
    
  <form>
   <th>
      <script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>

      <div id="agamak" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
      <script type="text/javascript">

      Highcharts.chart('agamak', {
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
            foreach($agama as $d){
              echo "{name: '$d->agama',y: $d->jumlah},";
            }
           ?>
        ]
            }]      
       
    });
    </script>
  </th></form> -->
<!-- <form>
<th>
<script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>
<div id="agamab" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
      <script type="text/javascript">

      Highcharts.chart('agamab', {
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
</th>
</form> -->

            </div>
        </div>
    </div>

    <?php $this->load->view("_partials/scrolltop.php") ?>
<?php $this->load->view("_partials/modal.php") ?>
    <?php $this->load->view("_partials/js.php") ?>

</body>

</html>