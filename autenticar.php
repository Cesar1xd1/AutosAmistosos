<?php
        if($_POST){
        include('php/DAOS/user_DAO.php');
        $user = $_POST['c1'];
        $pass = $_POST['c2'];
    

        $userDAO = new UserDAO();
        $res = $userDAO->autenticar($user,$pass);

        echo "console.log('".mysqli_num_rows($res)."')";

        if(mysqli_num_rows($res)>0){
            header('location: landing-u.html');
        }else{
            echo '<div class="alert alert-danger sisi"  role="alert">
            Usuario o contraseña incorrectas
            </div>';
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