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