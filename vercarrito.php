<!DOCTYPE html>
<html>
<?php
//Creamos sesión y una conexión con la base de datos.
session_start();
$con = mysqli_connect("localhost","root","","perfumeria");

 // Check connection
 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
//Comprobamos que la variable $carro tenga valor.
if(isset($_SESSION['carro']))
$carro=$_SESSION['carro'];else $carro=false;
//Hacemos la consulta a la base de datos para mostrar los productos
$sql="SELECT * FROM producto WHERE idproducto=1;";


if($carro){ // Si $carro tiene algo lo muestra en la tabla.
?>
<table>
    <tr>
      <td width="9%">CÓDIGO</td>
      <td width="14%">IMAGEN</td>
      <td width="48%">T&Iacute;TULO</td>
      <td width="19%">PRECIO</td>
      <td width="10%">BORRAR</td>
    </tr>
<?php $color=array("#666666","#777777");
$contador=0;
$suma=0;
foreach($carro as $k => $v){
       $resultado=mysqli_query($con,$sql);
       $row=mysqli_fetch_array($resultado);
       $subto=$v['cantidad']*$v['precio'];
       $suma=$suma+$subto;
       $contador++; ?>
<form name="a<?php echo $v['idproducto'] ?>" method="post" action="
agregacarro.php?<?php echo SID ?>&id=<?php echo $row['idproducto']?>"
id="a<?php echo $v['idproducto'] ?>">
    <tr bgcolor="<?php echo $color[$contador%2]; ?>">
      <td>
        <?php //cogemos como código el nombre de la imagen menos el .jpg.
        $codigoImagen = $v['foto'];
        echo $codigoImagen  ?>
      </td>
      <td>
      </td>
      <td>
        <?php ////ponemos el título del producto con link a su detalle. ?>
        <a href="#?<?php echo SID ?>&id=<?php echo
        $v['idproducto']?>"><?php echo $v['pnombre'] ?></a>
      </td>
      <td>
      <?php //ponemos el precio del producto. ?>
      <?php echo $v['precio'] ?> €<br />
      </td>
      <td><a href="borracar.php?<?php echo SID ?>&id=<?php echo $v['idproducto'] ?>
      &precio=<?php echo $precio ?>"><img src="img/logofleur2.png" alt="Borrar
       obra de pedido" width="20" height="20" /></a><a href="borracar.php?<?php echo
       SID ?>&id=<?php echo $v['id'] ?>&precio=<?php echo $precio ?>"></a>
      </td>
     </tr></form>
     <tr>
<?php } //fin foreach ?>
      <td colspan="5"><p>TOTAL  PRODUCTOS:
      <?php echo count($carro); ?><br />
      TOTAL PRECIO: <?php echo number_format($suma,2); ?> &euro;</p></td>
    </tr>
</table>
<div id="boton"><a href="index.php?<?php echo SID?>">CONTINUAR COMPRA</a></div>
<div id="boton"><a href="pedido.php?<?php echo SID?>&precio=<?php echo $precio ?>">FINALIZAR COMPRA</a></div>
<?php }else{ // // Si $carro NO tiene nada solo muestra un link a index.php.?>
<p>El carrito de compra está vacío.</p>
<div id="boton"><a href="index.php<?php echo SID?>">CONTINUAR COMPRA</a></div>
</html>
<?php }?>
<?php //Al final del archivo liberamos recursos
mysqli_close($con); 
phpinfo();?>
?>