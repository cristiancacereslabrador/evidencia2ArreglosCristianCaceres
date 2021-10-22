<!<!-- CRISTIAN VIANEY CÁCERES LABARADOR  C.I.: 1.232.388.768
       DESARROLLO WEB PHP SENA
       EVIDENCIA 2: TALLER "USO DE ARREGLOS"-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>evidencia2CristianCáceres</title>
<!--        Un poco de CSS para darle estilo a la pagina-->
        <style type="text/css">
         *,body{ font-size: 30px; background-color: dimgray;
         color: lightgray;}
        table{ border: 2px solid blue;}
        #bar{   background-color: blue;
                border: 3px;
                border-style: groove; border-width:3px;
            }
        </style>
    </head>
    <body>
      <?php
    // Creo la matriz de colores con sus significados
    $listadoDeColores = [ ['Amarillo', 'Riqueza y alegría.'],
                          ['Azul','Inteligencia y sabiduría.'],
                          ['Rojo','Fuego y pasión.']
            //Si se quitan los // de comentario de las siguientes dos lineas
            //se puede observar como se llena automaticamente la matriz con los
            //significados de los colores faltantes     
                         // ,['Verde', 'Armonia y fescura'],
                         // ['Blanco','Bondad y pureza']
         ];
    //Creo la matriz con los datos para la tabla
    $a=[
       [    'Nombre', 'Dirección','Teléfono','Fecha de cumpleaños',
           'Color favorito', 'Significado'
       ],
       [   'Pablo Ardila', 'Cra. 56 # 45 - 56', '4439296', '06/02/1983',        
            'Amarillo', 'No se encuentra el significado.'
        ],   
        [   'Nancy Benitez','Clle. 23 # 12 - 34 Sur', '4717508','02/09/1989',       
            'Azul', 'No se encuentra el significado.'
        ],
        [   'Juan Cepeda','Av. 55 # 56 - 78', '2913270','16/10/2000',
            'Verde', 'No se encuentra el significado.'
        ],
        [   'Luis Castro','Jr. 9 # 105 Norte','2566984','19/10/1989',
            'Rojo', 'No se encuentra el significado.'
        ],
        [   'Carlos Soto', 'Clle. 3 # 10 - 01', '3556890','21/04/1975',
            'Blanco','No se encuentra el significado.'
       ]
       ];
    //Obtengo la longitud de la matriz a
    $longitud_a = count($a);
    $longitud_lc = count($listadoDeColores);

    //Recorro el arreglo de colores
    for($i=0; $i<$longitud_lc; $i++)
    {   //Recorro el arreglo de datos
       for($j=1; $j<$longitud_a; $j++)
              {     //Si el color en la matriz a es el mismo de la matriz datos
                    if($a[$j][4]===$listadoDeColores[$i][0])
                    {   //Asigno el valor del significado del color a la matriz datos 
                        $a[$j][5]=$listadoDeColores[$i][1];
                    }

              }
    }
    ?>
    <!--Imprimo en pantalla la matriz datos con los nuevos valores usando un foreach-->
    <table>
    <?php
    foreach ($a as $b) {
            ?>
            <tr id="bar"  >
            <?php
            foreach ($b as $c) {
            ?>
                    <td id="bar"><?php echo $c;?></td>
            <?php
            }
            ?>
            </tr>
    <?php
    }
    ?>
    </table>
   </body>    
</html>