<form action=Formulario.php method="POST">
<?php
$Nombre=$_POST['txtNombre'];
$Pass=$_POST['password'];
echo "<table>";
echo "<tr><td>";
if($Nombre=='100' && $Pass=='udg')
{
echo "Bienvenido usuario " .$Nombre;
}
else
{
echo "Error en usuario y/o Contraseña";
}
echo "</td></tr>";
echo "<tr><td>";
echo "<input type=submit name='Enviar' value='Regresar'/>";
echo "</td></tr>";
?>