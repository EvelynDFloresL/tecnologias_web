<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 P04 php</title>
</head>

<body>
    <div>
        <h3>Datos del Vehiculo</h3>
        <pre>
            <?php
            $autos = array('ABC1234' => array(
                'auto' => array(
                    'marca' => "BMW",
                    'modelo' => "2020",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Evelyn',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. Flores'
                )
            ), 'XYZ5678' => array(
                'auto' => array(
                    'marca' => "Honda",
                    'modelo' => "2014",
                    'tipo' => "Deportivo"
                ),
                'propietario' => array(
                    'nombre' => 'Luz',
                    'ciudad' => 'Guerrero',
                    'direccion' => 'Col. Tamaulipas'
                )
            ), 'DEF9012' => array(
                'auto' => array(
                    'marca' => "Toyota",
                    'modelo' => "2011",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Patricio',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. Volcanes'
                )
            ), 'MNO3456' => array(
                'auto' => array(
                    'marca' => "Honda",
                    'modelo' => "2009",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Victor',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. Angelopolis'
                )
            ), 'GHI7890' => array(
                'auto' => array(
                    'marca' => "Nissan",
                    'modelo' => "2001",
                    'tipo' => "Senda"
                ),
                'propietario' => array(
                    'nombre' => 'Marcos',
                    'ciudad' => 'Veracruz',
                    'direccion' => 'Col. Valles'
                )
            ), 'JKL2345' => array(
                'auto' => array(
                    'marca' => "Toyota",
                    'modelo' => "2013",
                    'tipo' => "Senda"
                ),
                'propietario' => array(
                    'nombre' => 'Alberto',
                    'ciudad' => 'Hidalgo',
                    'direccion' => 'Col. Bella Vista'
                )
            ), 'PQR6789' => array(
                'auto' => array(
                    'marca' => "Nissan",
                    'modelo' => "2020",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Jose',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. Maravillas'
                )
            ), 'UVW0123' => array(
                'auto' => array(
                    'marca' => "Honda",
                    'modelo' => "2006",
                    'tipo' => "Hachback"
                ),
                'propietario' => array(
                    'nombre' => 'Antonio',
                    'ciudad' => 'Veracruz',
                    'direccion' => 'Col. Palmera'
                )
            ), 'STU4567' => array(
                'auto' => array(
                    'marca' => "Crevrolet",
                    'modelo' => "2020",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Dolores',
                    'ciudad' => 'Chihuahua',
                    'direccion' => 'Col. El Chico'
                )
            ), 'WXY8901' => array(
                'auto' => array(
                    'marca' => "Toyota",
                    'modelo' => "2014",
                    'tipo' => "Sedan"
                ),
                'propietario' => array(
                    'nombre' => 'Alberto',
                    'ciudad' => 'Aguascalientes',
                    'direccion' => 'Col. Del Rio'
                )
            ), 'NOP3456' => array(
                'auto' => array(
                    'marca' => "Honda",
                    'modelo' => "2021",
                    'tipo' => "Crossovers"
                ),
                'propietario' => array(
                    'nombre' => 'Luis',
                    'ciudad' => 'Guanajuato',
                    'direccion' => 'Col. Los Cerros'
                )
            ), 'BCD6789' => array(
                'auto' => array(
                    'marca' => "Nissan",
                    'modelo' => "2015",
                    'tipo' => "Sedan"
                ),
                'propietario' => array(
                    'nombre' => 'Xochitl',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. La Loma'
                )
            ), 'EFG9012' => array(
                'auto' => array(
                    'marca' => "Chevrolet",
                    'modelo' => "2019",
                    'tipo' => "Todo terreno"
                ),
                'propietario' => array(
                    'nombre' => 'Maria',
                    'ciudad' => 'Veracruz',
                    'direccion' => 'Col. Cerrito'
                )
            ), 'HIJ2345' => array(
                'auto' => array(
                    'marca' => "Toyota",
                    'modelo' => "2012",
                    'tipo' => "Hibrido"
                ),
                'propietario' => array(
                    'nombre' => 'Miguel',
                    'ciudad' => 'Oaxaca',
                    'direccion' => 'Col. Ranchito Alto'
                )
            ), 'KLM5678' => array(
                'auto' => array(
                    'marca' => "Honda",
                    'modelo' => "2001",
                    'tipo' => "Clasico"
                ),
                'propietario' => array(
                    'nombre' => 'Odette',
                    'ciudad' => 'Chihuahua',
                    'direccion' => 'Col. El Rio'
                )
            ));

            $matri = $_POST["matricula"];

            if ($matri == "ALL") {
                print_r($autos);
            } else {

                echo $matri.'<br>';
                print_r($autos[$matri]);
            }

            ?>
        </pre>
    </div>
</body>

</html>