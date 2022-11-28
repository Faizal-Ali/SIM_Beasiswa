<?php
    require('../conn.php');
    
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $query = "select * from tb_admin where username like '".$_POST['username']."' and password like '".$_POST['password']."'";
        
        $result = oci_parse($con, $query);
        $r = oci_execute($result);
        $data = oci_fetch_array($result,OCI_ASSOC);

        if(!empty($data['ID'])){
            $_SESSION['data-admin'] = $data;
        }
    }

    if(!empty($_SESSION['data-admin'])){
        header('location: home.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>

        <div class="card col-md-4 mt-4 p-0 mx-auto">
            <div class="card-header bg-primary text-white">
                <h3>Login Admin</h3>
            </div>
            <form action="" method="post">
                <div class="card-body">
                    <span>Username</span>
                    <input type="text" required name="username" class="form-control">
                    <span>Password</span>
                    <input type="password" required name="password" id="" class="form-control">
                </div>
                <div class="card-footer">
                    <button type="submit" class="col-md-12 btn btn-primary">Login</button>
                </div>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>