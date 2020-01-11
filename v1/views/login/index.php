<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>
  <!-- Custom fonts for this template-->
  <link href="<?php echo URL . 'public/vendor/fontawesome-free/css/all.min.css'; ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo URL . 'public/css/sb-admin-2.min.css'; ?>" rel="stylesheet">

</head>

<body class="">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div style="height: 50px;"  class="col-lg-12  mt-2">
                <div id="respuesta-request" class=" col-lg-9 m-auto"></div>
              </div>
              <div class="col-lg-6 m-auto">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                    <p class="text-dark">Bienvenido al login</p>
                  </div>                 
                  <form id="dataForm" class="user">
                    <div class="form-group">
                      <input type="text" id="user" name="user" class="form-control form-control-user" id="exampleInputEmail" placeholder="Usuario" required>
                    </div>
                    <div class="form-group">
                      <input type="password" id="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                    </div>
 
                    <input type="submit" id="btn-login" class="btn btn-danger  btn-user btn-block" value="Ingresar">                
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  <!-- Bootstrap core JavaScript-->

  <script src="<?php echo URL . 'public/vendor/jquery/jquery.min.js'; ?>"></script>
  <script src="<?php echo URL . 'public/vendor/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo URL . 'public/vendor/jquery-easing/jquery.easing.min.js'; ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo URL . 'public/js/sb-admin-2.min.js'; ?>"></script>
  <script src="<?php echo URL . 'public/main.js'; ?>"></script>
  <script src="<?php echo URL . 'public/js/modulos/login.js'; ?>"></script>

</body>

</html>