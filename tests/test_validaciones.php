
<?php 
require_once __DIR__ . '/../src/validaciones.php';
$casos =[
    ["Nombre válido: Teclado", "Teclado",true],
    ["Nombre vácio", "",false],
    ["Nombre con espacios", "    ",false],
    ["Nombre valido: mouse", "Teclado",true]
];
$correctas =0;
$fallidas =0;
foreach ($casos as [$descripcion, $entrada, $esperado]){
    $obtenido = validarNombreProducto($entrada);
    if($obtenido === $esperado){   
        echo " - $descripcion\n";
        $correctas++;
    } else {
        echo "FAIL - $descripcion\n";
        echo "Esperado:" . var_export($esperado,true) . "\n";
        echo "Obtenido:" . var_export($obtenido,true) . "\n";
        $fallidas++;
    }

}

$casosCantidad = [
    ["Cantidad entera positiva", 10, true],
    ["Cantidad en uno, como texto", "1", true],
    ["Cantidad en cero", 0, false],
    ["Cantidad decimal", 2.5, false]
];

foreach ($casosCantidad as [$descripcion, $entrada, $esperado]) {
    $obtenido = validarCantidadProducto($entrada);
    if ($obtenido === $esperado) {
        echo "OK - $descripcion\n";
        $correctas++;
    } else {
        echo "FAIL - $descripcion\n";
        echo "Esperado: " . var_export($esperado, true) . "\n";
        echo "Obtenido: " . var_export($obtenido, true) . "\n";
        $fallidas++;
    }
}

echo "\n--- RESUMEN--- \n";
echo "Total:  ". (count($casos) + count($casosCantidad)) . "\n";
echo "correctas: $correctas\n";
echo "Fallidas: $fallidas\n";
 exit ($fallidas > 0? 1:0);
 ?>
