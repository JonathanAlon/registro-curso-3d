<?php
	/* Caracteristicas PLA */ 
	$precioPLA = 500;
	$metrosPLA = 334;
	/* Gastos adicionales */
	$electricidad = ; 
	/* Costo de PLA por metro */
	$precioPorMetro = $precioPLA / $metrosPLA;
	$entero = (int)$precioPorMetro;

	echo " * * * * * * * * * * * * * * * * * * * * * * \n";
	echo "El precio actual por metro es: ".$entero."\n";
	echo " * * * * * * * * * * * * * * * * * * * * * * \n";
	/* Cotizacion: precio por metros */
	echo "Ingresa la cantidad de PLA consumida: ";
	$cantidadConsumida = readline();	
	$costo = $cantidadConsumida * $entero;
	echo "\n";
	echo "El costo de la impresión es ".$costo;
	echo "\n";
	echo " * * * * * * * * * * * * * * * * * * * * * * \n";

	echo " * * * * * * * * * * * * * * * * * * * * * * \n";
?>