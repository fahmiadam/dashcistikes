<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>
</head>
 
<body class="bg-dark" background="<?php echo base_url('assets/img/homes.jpg_large')?>" style="background-repeat: no-repeat; background-size: cover;"> 
   
    

    <div class="container"><br><br><br>
         <img src="<?php echo base_url('assets/img/stikes.png')?>" class="mx-auto d-block" height="200" alt=""><br><br>
         <h1 align="center" class="text-light">STIKES BETHESDA YAKKUM YOGYAKARTA</h1><br>
        <div class="card card-login mx-auto">
            <div class="card-header">Masuk</div>
            <div class="card-body">
                <form class="form-signin" method="POST" action="<?php echo base_url('index.php/login') ?>">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputUsername" class="form-control" name="username" placeholder="Username" required="required" autofocus autocomplete="off">
                            <?php echo form_error('username'); ?>
                            <label for="inputUsername">Nama Pengguna</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required="required" autocomplete="off">
                            <?php echo form_error('password'); ?>
                            <label for="inputPassword">Kata Sandi</label>
                        </div>
                    </div>
                    
                    <button class="btn btn-lg btn-primary btn-block" name="btn-login" id="btn-login" type="submit">Masuk</button>
                </form>
            </div>
            <?php if(isset($error)) { echo $error; }; ?>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/jquery-easing/jquery.easing.min.js"></script>

</body>
</html>
