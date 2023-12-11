<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./estilos/estilo.css">
    <title>Login</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #7543A9; height: 80px;">
        <div class="container-fluid">
            <label class="navbar-brand" style="font-weight: bold; font-size: 20px; font-family: cursive;" href="#">Autos Amistosos</label>  
            
        </div>
        
    </nav>

    <?php
        if($_POST){
        include('php/DAOS/user_DAO.php');
        $user = $_POST['c1'];
        $pass = $_POST['c2'];
    

        $userDAO = new UserDAO();
        $res = $userDAO->autenticar($user,$pass);

        

        if(mysqli_num_rows($userDAO->autenticar($user,$pass))==0){
            echo '<div class="alert alert-danger sisi"  role="alert">
            Usuario o contraseña Incorrecto!
            </div>';       
        }else{
            header('location: landing-u.php?');
            exit();
        }

    
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        setTimeout(function() {
        $(".sisi").fadeOut(500);},1500);
        });
    </script>



    <div style="text-align: center; padding: 40px;">
        <form action=""  method="post">
        <img src="./images/user.png" class="img-log" alt="centered image" width="120" height="120" text-a >
        <br>
        <label style="font-weight: bold; font-size:30px; color: black; text-shadow: 20px 20px 20px;" for="">Ingresar</label>
        <br>
        <input type="text" id="c1" name="c1" class="cajalogin"  placeholder="Usuario" >
        <br>
        <input type="password"  id="c2" name="c2" class="cajalogin"  placeholder="Contraseña" >
        <br>
        <input type="submit" class="botonlogin" value="Entrar">
        </form>
      </div>
        

    
    
</body>
</html>