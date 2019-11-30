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

            <span><h1>Dosen</h1></span>
                    <?php $this->load->view("_partials/footer.php") ?>

    
            

<!-- AGAMA -->
  <ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".agama" aria-expanded="false" aria-controls="agama1 agama2">Agama</button></ol>


  <div class="row">
 <div class="col-lg-4">
 <div class="collapse agama" id="agama1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Agama</div>
  <!-- <div class="form-inline">   --> 
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


<!-- JENIS KELAMIN -->

<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".jeniskelamin" aria-expanded="false" aria-controls="jeniskelamin1 jeniskelamin2">Jenis Kelamin</button></ol>


  <div class="row">
 <div class="col-lg-4">
 <div class="collapse jeniskelamin" id="jeniskelamin1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Jenis Kelamin</div>
  <!-- <div class="form-inline">   --> 
   <!-- <th> -->
      <script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>

      <div id="jeniskelamin" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('jeniskelamin', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Jenis Kelamin'
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
            foreach($jeniskelamin as $g){
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
 <div class="collapse jeniskelamin" id="jeniskelamin2">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Jenis Kelamin</div>
<script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>
<div id="jeniskelaminn" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('jeniskelaminn', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'column'
        },
        title: {
            text: 'Jenis Kelamin'
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
            foreach($jeniskelamin as $g){
              echo "{name: '$g->jenis_kelamin',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });
    </script>
<!-- </th> --></div></div></div></div>


<!-- JENJANG PENDIDIKAN -->
<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".jenjang_pendidikan" aria-expanded="false" aria-controls="jenjang_pendidikan1 jenjang_pendidikan2">Jenjang Pendidikan</button></ol>


  <div class="row">
 <div class="col-lg-4">
 <div class="collapse jenjang_pendidikan" id="jenjang_pendidikan1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Penjang Pendidikan</div> <!-- <div class="form-inline">   -->
   <!-- <th> -->
      <script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>

      <div id="jenjang_pendidikan" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('jenjang_pendidikan', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Jenjang_pendidikan'
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
            foreach($jenjang_pendidikan as $g){
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
 <div class="collapse jenjang_pendidikan" id="jenjang_pendidikan2">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Jenjang Pendidikan</div>
<script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>
<div id="jenjang_pendidikann" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('jenjang_pendidikann', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'column'
        },
        title: {
            text: 'Jenjang_pendidikan'
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
            foreach($jenjang_pendidikan as $g){
              echo "{name: '$g->jenjang',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });
    </script>
<!-- </th> --></div></div></div></div>


<!-- JENIS -->
<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".jenis" aria-expanded="false" aria-controls="jenis1 jenis2">Jenis</button></ol>


  <div class="row">
 <div class="col-lg-4">
 <div class="collapse jenis" id="jenis1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Jenis</div> <!-- <div class="form-inline">   -->
   <!-- <th> -->
      <script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>

      <div id="jenis" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('jenis', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'jenis'
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
            foreach($jenis as $g){
              echo "{name: '$g->jenis',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });

    </script></div></div></div>
 <!--  </th> -->

<!-- <th> -->
  
 <div class="col-lg-8">
 <div class="collapse jenis" id="jenis2">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Jenis</div>
<script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>
<div id="jeniss" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('jeniss', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'column'
        },
        title: {
            text: 'Jenis'
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
            foreach($jenis as $g){
              echo "{name: '$g->jenis',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });
    </script>
<!-- </th> --></div></div></div></div>


<!-- STATUS AKTIF -->
<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".status" aria-expanded="false" aria-controls="status1 status2">Status</button></ol>


  <div class="row">
 <div class="col-lg-4">
 <div class="collapse status" id="status1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Status</div> <!-- <div class="form-inline">   -->
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


<!-- GOLONGAN -->
<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".golongan" aria-expanded="false" aria-controls="golongan1 golongan2">Golongan</button></ol>


  <div class="row">
 <div class="col-lg-4">
 <div class="collapse golongan" id="golongan1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Golongan</div> <!-- <div class="form-inline">   -->
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
                  Golongan</div>
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


<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".program_studi" aria-expanded="false" aria-controls="program_studi1 program_studi2">Program Studi</button></ol>


  <div class="row">
 <div class="col-lg-4">
 <div class="collapse program_studi" id="program_studi1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Program Studi</div> <!-- <div class="form-inline">   -->
   <!-- <th> -->
      <script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>

      <div id="program_studi" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('program_studi', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'program_studi'
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
            foreach($program_studi as $g){
              echo "{name: '$g->programstud',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });

    </script></div></div></div>
 <!--  </th> -->

<!-- <th> -->
  
 <div class="col-lg-8">
 <div class="collapse program_studi" id="program_studi2">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Program Studi</div>
<script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>
<div id="program_studii" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('program_studii', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'column'
        },
        title: {
            text: 'program_studi'
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
            foreach($program_studi as $g){
              echo "{name: '$g->programstud',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });
    </script>
<!-- </th> --></div></div></div></div>


<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".jabatan_struktural" aria-expanded="false" aria-controls="jabatan_struktural1 jabatan_struktural2">Jabatan Struktural</button></ol>


  <div class="row">
 <div class="col-lg-4">
 <div class="collapse jabatan_struktural" id="jabatan_struktural1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Jabatan Struktural</div> <!-- <div class="form-inline">   -->
   <!-- <th> -->
      <script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>

      <div id="jabatan_struktural" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('jabatan_struktural', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'jabatan_struktural'
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
            foreach($jabatan_struktural as $g){
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
 <div class="collapse jabatan_struktural" id="jabatan_struktural2">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Jabatan Struktural</div>
<script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>
<div id="jabatan_strukturall" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('jabatan_strukturall', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'column'
        },
        title: {
            text: 'jabatan_struktural'
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
            foreach($jabatan_struktural as $g){
              echo "{name: '$g->jabatan',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });
    </script>
<!-- </th> --></div></div></div></div>


<ol class="breadcrumb"><button class="btn btn-link" type="button" data-toggle="collapse" data-target=".jabatan_fungsional" aria-expanded="false" aria-controls="jabatan_fungsional1 jabatan_fungsional2">Jabatan Fungsional</button></ol>


  <div class="row">
 <div class="col-lg-4">
 <div class="collapse jabatan_fungsional" id="jabatan_fungsional1">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Jabatan Fungsional</div> <!-- <div class="form-inline">   -->
   <!-- <th> -->
      <script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>

      <div id="jabatan_fungsional" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('jabatan_fungsional', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'jabatan_fungsional'
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
            foreach($jabatan_fungsional as $g){
              echo "{name: '$g->jabatan_fungsi',y: $g->jumlah},";
            }
           ?>
        ]
            }]      
       
    });

    </script></div></div></div>
 <!--  </th> -->

<!-- <th> -->
  
 <div class="col-lg-8">
 <div class="collapse jabatan_fungsional" id="jabatan_fungsional2">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Jabatan Fungsional</div>
<script src="highcharts/pie/highcharts.js"></script>
      <script src="highcharts/pie/exporting.js"></script>
      <script src="highcharts/pie/export-data.js"></script>
<div id="jabatan_fungsionall" width="50%" height="50"></div>
      <script type="text/javascript">

      Highcharts.chart('jabatan_fungsionall', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'column'
        },
        title: {
            text: 'jabatan_fungsional'
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
            foreach($jabatan_fungsional as $g){
              echo "{name: '$g->jabatan_fungsi',y: $g->jumlah},";
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
                  Kota</div> <!-- <div class="form-inline">   -->
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
            text: 'Kota'
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
                  Kota</div>
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
            text: 'Kota'
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
<!-- </th> --></div></div></div></div>




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