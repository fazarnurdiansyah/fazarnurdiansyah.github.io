<?php
require 'function.php';


//cek login,terdaftar atau tidak/
if(isset($_POST['login'])){
    $Email = $_POST['email'];
    $Password = $_POST['password'];

//tes data login
    $cekdatabase = mysqli_query($conn, "SELECT * FROM login where email ='$Email' and password='$Password'");
//hitung data    
    $hitung = mysqli_num_rows($cekdatabase);

    if($hitung>0){
      $_SESSION ['log'] = 'True';
      header('location:index.php');
    } else {
        header ('location:login.php');
    };
};

if(!isset($_SESSION['log'])){

}else{
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-secondary">

        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <br>
                                    <br>
                                       <br>
                                   <br>
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">LOGIN</h3></div>
                                    <div class="card-body">
                                        <form method='post'>
                                            <br>
                                        <div class="form-outline mb-4">
                                                <input class="form-control" name="email"id="inputEmail" type="email" placeholder="Email" />  
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Password" />
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" href="index.php"name="login">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                     <div class="card-footer text-center py-3">                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>           
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
