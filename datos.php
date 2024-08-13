<?php
$producto1= $_POST ['producto1'];
$producto2=$_POST ['producto2'];
$producto3=$_POST [ 'producto3'];
$precio1=$_POST ['precio1'];
$precio2=$_POST ['precio2'];
$precio3=$_POST ['precio3'];
$suma=$precio1+$precio2+$precio3;

$descuento=$suma*0.16;
$descuentoo=$suma-$descuento;

echo " producto1: ".$producto1.'='.$precio1;
echo '<br>';
   echo "producto2: ".$producto2.'= '.$precio2;
   echo '<br>';

echo "producto3: ".$producto3.'='.$precio3;

 echo '<br>';
 echo "LA SUMA DE LOS PEODUCTOS ES : ".$suma;
echo'<br>';
        
        echo "EL TOTAL A PAGA ES: ".$descuentoo ;

?>
