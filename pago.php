<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Pago de Empleado</title>
</head>
<body>
    <header>
        <h1 id="centrado"> PAGO DE EMPLEADOS</H1>
</header>    
<section>
<table align="center">

<form action="pago.php" method="post">
<tr>
    <td width="200">Empleado</td>
    <td><input type="text" name="txtEmpleado" id="" size="40"></td>
</tr> 
<tr>
    <td width="200">Horas Trabajas</td>
    <td><input type="text" name="txtHoras" id=""></td>
</tr> 
<tr>
    <td width="200">Tarifa Por Horas</td>
    <td><input type="text" name="txTarifa" id=""></td>
</tr>
<tr>
    <td width="200"></td>
    <td><input type="submit" value="Procesar"></td>
    <td><input type="reset" value="Limpiar"></td>
</tr> 

<!-- Codigo PHP-->

<?php
error_reporting(0);
$empleado = $_POST['txtEmpleado'];
$horas = $_POST['txtHoras'];
$tarifa = $_POST['txtTarifa'];

// Realizar los Calculos

$salarioBruto = $horas * $tarifa;
$descuentosSeguroSalud = $salarioBruto *0.12;
$descuentosAfp = $salarioBruto *0.10;
$salarioNeto = $salarioBruto -$descuentosSeguroSalud - $descuentosAfp
?>

<tr> 
    <td>Empleado</td>
    <td><?php echo $empleado; ?></td>
<tr>
<tr> 
    <td>Horas Trabajadas</td>
    <td><?php echo $horas; ?></td>
<tr>
<tr> 
    <td>Tarifa Horas</td>
    <td><?php echo "$" . number_format($tarifa,2);?></td>
<tr>
<tr> 
    <td>Sueldo Bruto</td>
    <td><?php echo "$" . number_format($salarioBruto,2);?></td>
<tr>   
<tr> 
    <td>Descuento Salud</td>
    <td><?php echo "$" . number_format($descuentosSeguroSalud,2);?></td>
<tr> 
<tr> 
    <td>Descuento AFP</td>
    <td><?php echo "$" . number_format($descuentosAfp,2);?></td>
<tr> 
<tr> 
    <td>Sueldo neto</td>
    <td><?php echo "$" . number_format($salarioBruto,2);?></td>
<tr> 
    

</form>
</table>    
</section>        
</body>
</html>