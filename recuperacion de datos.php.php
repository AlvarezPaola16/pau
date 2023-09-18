<?php

if(isset($_POST['btn'])){
    $nom=$_POST['txtNombre'];
    $ap=$_POST['txtAp'];
    $am=$_POST['txtAm'];
    $tel=$_POST['telefono'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    if($nom=""){
     echo"Digita un nombre";
    }
    elseif($ap=""){
     echo"Digita tu apellido paterno";
    }
    elseif($am=""){
        echo"Digita tu apellido materno";
    }
    elseif($tel=""){
        echo"Digita tu numero telefonico";
    }
    elseif($email=""){
        echo"Digita tu correo electronico";
    }
    elseif($pass=""){
        echo "Digita tu contraseña";
    }
    else{
        echo"tu nombre es:".$nom;
        echo"tu apellido paterno es:".$am;
    }
    
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link real="style/sheet" type="text/css" href="css/bootstrap.min.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
<div class="Container">
    <div class="row mt-2">
        <div class="col-sm-12 col-md-4 col-lg-4">
            <form action="<php echo $_Server['Php_Self'];?>"Method="Post"/>
            <input type="text" name="txtNombre" placeholder="Nombre" class="form_control"/>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <input type="text" name="txtAp" placeholder="ApellidoPaterno" class="form_control"/>   
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <input type="text" name="txtAm" placeholder="ApellidoMaterno" class="form_control"/>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <input type="tel" name="telefono" placeholder="55-55-55-55-55" class="form_control"/>  
        </div> 
        <div class="col-sm-12 col-md-6 col-lg-6">
            <input type="email" name="email" placeholder="Correo" class="form_control"/>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="password" name="pass" placeholder="Password" class="form_control"/>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="submit" value="enviar" name="btn">
        </div>
    </div>
</div>
    
</body>
</html>