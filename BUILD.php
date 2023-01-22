<?php 

echo "BUILDING:"."<br>";
echo "<br>";

$pathOfDoneFiles = 'DONE';
$filesInSrc = array_diff(scandir("./"), array('.', '..'));

// 1 - PARA LA CARPETA ROOT DEL INCLUIDOR - BUSCO TODOS LOS ARCHIVOS PHP
foreach($filesInSrc as $nombreArchiLoop) 
{
      $rutaRelativaFileLoop = $pathOfDoneFiles."/".$nombreArchiLoop;
      $posPunto = strrpos($rutaRelativaFileLoop , ".");
      $extensionArchivo = substring_nico($rutaRelativaFileLoop , $posPunto,  strlen($rutaRelativaFileLoop));
      
      //echo "extension del archivo:" . $extensionArchivo."<br>";
      if(!is_dir("./" . $nombreArchiLoop) && $extensionArchivo == ".php")
      {
            if($nombreArchiLoop != "INCLUIDOR.php" && $nombreArchiLoop != "build.php")
            {
                  echo $rutaRelativaFileLoop ."<br>";
                  // 2 - UNA VEZ QUE TENGO LOS ARCHIVOS QUE NECESITO, DEBO METERLOS
                  // DENTRO DE CARPETA DONE Y ELIMINAR LAS LINEAS DE PHP:

                  $archivoEntrada = file($nombreArchiLoop);
      
                  // 3 - RECORRO LINEA A LINEA - BUSCANDO <INCLUDE SRC=""></INCLUDE> O <SCRIPT INYECTADO></SCRIPT> , TAMBIEN HAY COMENTARIOS <!-- -->
                  $finPHP = 0;
                  $acumuladorHTML="";
                  foreach ((array) $archivoEntrada as $linea) 
                  {
                        if(str_contains($linea, "<?php") || str_contains($linea, "<?PHP"))
                        {
                              $estoyLeyendoPHP = true;
                        }

                        
                        if(!$estoyLeyendoPHP)
                        {
                              $acumuladorHTML .= $linea;
                        }

                        if(str_contains($linea, "?>"))
                        {
                              $estoyLeyendoPHP = false;
                        }
                  }
                  $rutaLoop = "./" . $pathOfDoneFiles. "/". $nombreArchiLoop;
                  echo "rutaLoop:" . $rutaLoop;
                  if (!file_exists($rutaLoop))
                  {
                        touch($rutaLoop);
                  }
                  $archivoCompiladoLoop =  fopen($rutaLoop, "w");
                  fwrite($archivoCompiladoLoop, $acumuladorHTML);
            }
      }
}

function substring_nico($str, $start, $end)
{
  return mb_substr($str, $start, $end - $start);
}
?>