<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin 2 - Login</title>
  <!-- Custom fonts for this template-->
  <link href="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin@7.0.7/dist/css/styles.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body style="background: #f7e1cd" class="bg-grey">
<div id="layoutAuthentication">
     <div id="layoutAuthentication_content">
         <main>
         <div class="container text-center">
                 <div class="row justify-content-center">
                     <div class="col-lg-5">
                         <div class="card shadow-lg border-0 rounded-lg mt-5 align-content-center">
                                                        
                             <div class="card-header justify-content-center">
                             <i style="font-size:64px" class="fa-solid fa-building fa-xl"></i>
                             <ion-icon name="fast-food"></ion-icon>
                                 <!--<img src="resources/images/restorantpos.png" alt="image" width="86px" />-->
                                 <br/>
                                 <a style="font-size:28px; font-weight: bold;"> <b> Restoran</b> POS</a>
                             </div>
                             <div class="card-body">
                             <form action="{{ route('login.action') }}" method="POST" class="user">
                                              @csrf
                                      @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                              @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                              @endforeach
                                            </ul>
                                        </div>
                                      @endif
                                     <div class="form-floating mb-3">
                                     <input class="form-control" id="email" name="email" type="email" placeholder="Correo electrónico" />
                                     <label for="inputEmail">Correo electrónico</label>
                                     </div>
                                     <div class="form-floating mb-3">
                                         <input class="form-control" id="password" name="password" type="password" placeholder="Contraseña" />
                                         <label for="inputPassword">Contraseña</label>
                                     </div>

                                     <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                         <a class="small" href="password.html">¿Has olvidado tu contraseña?</a>
                                          <button type="submit" class="btn btn-primary">Entrar</button>
                                     </div>
                                 </form>
                             </div>
                           
                         </div>
                     </div>
                 </div>
             </div>
         </main>
     </div>
     

     <footer class="py-4 bg-light mt-auto">
             <div class="container-fluid px-4">
                 <div class="d-flex align-items-center justify-content-between small">
                 <div  class="text-muted">Copyright &copy;<a class="small" href="https://velozidea.net">Velozidea.net</a> 2024</div>
                     <div>
                         <a href="#">Privacy Policy</a>
                         &middot;
                         <a href="#">Terms &amp; Conditions</a>
                     </div>
                 </div>
             </div>
         </footer>
 
 </div>       
  <!-- Bootstrap core JavaScript-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.4/js/sb-admin-2.min.js"></script>
</body>
</html>

