<?php

$producto1='arroz';
$producto2='Panela';
$producto3='Papa';
$producto4='Cerveza';
$producto5='Pasta';
$producto6='Atún';
$producto7='Frijoles';
$producto8='Carne';
$producto9='Arepas';
$producto10='Huevos';

$precios1=1500;
$precios2=7000;
$precios3=8000;
$precios4=30000;
$precios5=2200;
$precios6=9000;
$precios7=4800;
$precios8=25000;
$precios9=10000;
$precios10=14000;

$productoEspecial='Manzana';


switch($productoEspecial){
    case 'Manzana':
        echo('Tiene 10% de descuento.');
    break;
    
    case 'Banano':
        echo('Tiene 5% de descuento.');
    break;

    default:
        echo('No hay descuento');
    break;

}

$total=$precios1+$precios2+$precios3+$precios4+$precios5+$precios6+$precios7+$precios8+$precios9+$precios10;


/*if($total>80000){
    echo('Querido amigo, no te alcanza el dinero');
}else{
    echo('Gracias por su compra');
}*/

?>