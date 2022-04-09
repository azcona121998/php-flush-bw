<?php

if (isset($_GET["n"])) {
    $KB = $_GET["n"];
} else {
    $KB = 1024;
}

flush();

$msg = str_pad('', 1024, 'A');

$tInicio = explode(" ", microtime());
$tInicioFormateado = $tInicio[0] + $tInicio[1];

for ($i=0; $i<$KB; $i++) {
    echo $msg;
    flush();
}

$tFinal = explode(" ", microtime());
$tFinalFormateado = $tFinal[0] + $tFinal[1];

echo "Velocidad: " . round($KB / ($tFinalFormateado - $tInicioFormateado)) . "KB/s."

?>
