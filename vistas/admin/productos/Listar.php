<?php

        include('../../configuraciones/conexion.php');

    $titulo = 'Productos';
    
    $errores = '';

    $nombreLlaveprimaria = 'ID';

        $sql = "SELECT * FROM productos";
        $result = mysqli_query($conn, $sql);
        $resultado = null;

        $productos = mysqli_fetch_all($result, MYSQLI_ASSOC);
        if (count($productos)>0) {
                
            $resultado=array();
            $i=0;
            foreach ($productos as $product) {
                $resultado[$i] =
                array('ID' => $product['ID_PRODUCTO'],
                    'PRODUCTO' => $product['NOM_PRODUCTO'],
                    'CANTIDAD' => $product['ALMACEN'],
                    'PRECIO' => $product['PRECIO'],);
                
                $i++;
            }

        }
        
    /*$resultado = array(
                
        array('ID' => '1',
                'PRODUCTO' => 'product1',
                'CANTIDAD' => '1',
                'PRECIO' => '0.00',),
        array('ID' => '1',
                'PRODUCTO' => 'product2',
                'CANTIDAD' => '1',
                'PRECIO' => '0.00',),
        array('ID' => '1',
                'PRODUCTO' => 'product3',
                'CANTIDAD' => '1',
                'PRECIO' => '0.00',),
        array('ID' => '1',
                'PRODUCTO' => 'product4',
                'CANTIDAD' => '1',
                'PRECIO' => '0.00',),
        array('ID' => '1',
                'PRODUCTO' => 'product5',
                'CANTIDAD' => '1',
                'PRECIO' => '0.00',),
        array('ID' => '1',
                'PRODUCTO' => 'product6',
                'CANTIDAD' => '1',
                'PRECIO' => '0.00',),

    );*/

    if($_SERVER["REQUEST_METHOD"] == "POST"){



    }

?>

<!DOCTYPE html>

<html>

    <?php include('../modelo/admin/encabezadoAdmin.php'); ?>

    <?php if($resultado==null): ?>

        <h2 class="text-center" >Sin Datos</h2>

    <?php endif; ?>

    <?php include('../modelo/admin/pieAdmin.php'); ?>

</html>