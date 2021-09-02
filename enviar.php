<?php 
include("base.php");

if (isset($_POST['enviar'])) {
    $nomensajes=$_POST['nomensajes'];
    $Nombre=$_POST['Nombre'];
    $Telefono=$_POST['Telefono'];
    $correo=$_POST['correo'];
    $mensajes=$_POST['mensajes'];

    $query="INSERT INTO mensajes (nomensajes, Nombre, Telefono, correo, mensajes) VALUES ('$nomensajes','$Nombre', '$Telefono', '$correo', '$mensajes')";
    $resultado=mysqli_query($conn,$query);
    if (!$resultado){
        die ("Error");
    }
    header ('location:conta.php');
    }
?>
