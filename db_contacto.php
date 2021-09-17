

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


  

    if($_REQUEST['nombre'] !=""){

        if($_REQUEST['correo'] != ""){

            if($_REQUEST['mensaje'] != ""){
                $conexion = mysqli_connect("localhost", "id17607183_root", "Tonnyhcabrera22*", "id17607183_contacto") or
                die("Problemas con la conexión");

                mysqli_query($conexion, "insert into contactanos(nombre,correo,mensaje) values 
                            ('$_REQUEST[nombre]','$_REQUEST[correo]','$_REQUEST[mensaje]')")
                or die("Problemas en el select" . mysqli_error($conexion));

                mysqli_close($conexion);


                echo "<script language='JavaScript'>
                location.assign('index.php');
                </script>";  
            }
            else{
    
                echo "<script language='JavaScript'>
                location.assign('index.php');
                </script>";  
            }

        }
        else{
          
            echo "<script language='JavaScript'>
                location.assign('index.php');
                </script>";  
        }
    }   
    else{

        echo "<script language='JavaScript'>
        location.assign('index.php');
        </script>";  
    }
?>
</body>
</html>