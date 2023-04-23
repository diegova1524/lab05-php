<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="http://localhost/lab05/Tarea/Tarea2php.php">
        Precio: <input type="text" name="precio"><br><p>
        Cantidad: <input type="text" name="cantidad"><br><p>

        <input type="submit" name="Calcular" value="Calcular"><br><p>
        <input type="reset" name="Cancelar" value="Cancelar"><br>
        
    </form>
  <?php
    $precio=$_POST['precio'];
    $cantidad=$_POST['cantidad'];

    $descuento=$precio*0.05;


    $nuevo_precio=$precio-$descuento;
    $importe_descuento=$nuevo_precio*$cantidad*0.07;
    $importe_compra=$nuevo_precio*$cantidad;
    $importe_pagar=$importe_compra-$importe_descuento;
    $obsequio_caramelos=$cantidad*2;



    echo "El nuevo precio es: " .$nuevo_precio ."<br>";
    echo "El importe del descuento es: " .$importe_descuento ."<br>";
    echo "El importe de compra es: " . $importe_compra ."<br>";
    echo "El importe a pagar es: ". $importe_pagar ."<br>";
    echo "Caramelos obsequidados: ". $obsequio_caramelos ."<br>";
?>

</body>
</html>