<?php
    include_once __DIR__.'/database.php';

    // SE CREA EL ARREGLO QUE SE VA A DEVOLVER EN FORMA DE JSON
    $data = array();
    // SE VERIFICA HABER RECIBIDO EL ID
    if( isset($_POST['id']) ) {
        $id = $_POST['id'];

        // SE REALIZA LA QUERY DE BÚSQUEDA Y AL MISMO TIEMPO SE VALIDA SI HUBO RESULTADOS
        if ( $result = $conexion->query("SELECT * FROM productos WHERE id = '{$id}' || nombre like '{$id}%' || marca like '{$id}%' || detalles like '{$id}%'") ) {
            // SE OBTIENEN LOS RESULTADOS
            //$row = $result->fetch_array(MYSQLI_ASSOC);
        $datos=array();
            if(!is_null($result)) {
                // SE CODIFICAN A UTF-8 LOS DATOS Y SE MAPEAN AL ARREGLO DE RESPUESTA
                while ( $row = $result->fetch_array(MYSQLI_ASSOC)
                ) {
                    $producArray = array();
                    foreach($row as $key => $value) {
                    
                        $producArray[$key] = utf8_encode($value);
                    }  
                    $datos[]=$producArray;
                }
                
            }
            $result->free();
        } else {
            die('Query Error: '.mysqli_error($conexion));
        }
        $conexion->close();
    } 
    
    // SE HACE LA CONVERSIÓN DE ARRAY A JSON
    echo json_encode($datos, JSON_PRETTY_PRINT);
?>