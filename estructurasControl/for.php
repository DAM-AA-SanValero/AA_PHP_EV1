<?php
include '../header.php';
?>
<section>
    <h1>Bucle FOR</h1>
    <h3>Este bucle se usa cuando queremos repetir un conjunto de instrucciones un número finito de veces</h3>


    <!--PROGRAMACIÓN PHP-->
    <?php

        class Stock{
            public $productos = array();

            public function __construct(array $productos){
                $this->productos = $productos;
            }

            public function stockProductos(){
                
                for ($producto=0; $producto < count($this->productos) ; $producto++) {
                    echo '<p>'.$producto.'. '.$this->productos[$producto].'</p>';
                }
            }
        }

        $productos = array("GameBoy","Playstation","XBox");
        $listado = new Stock($productos);

        echo '<h3>Listar un listado de productos:</h3>';
        $listado->stockProductos();
        
    ?>
</section>
<?php
include '../footer.php';
?>

<style>

    section {
        padding: 80px 0;
    }

    h3 {
        margin-bottom: 30px;
    }

    h1 {
        text-decoration: underline;
        margin-bottom: 20px;
    }

    p {
        font-size: 20px;
        font-weight: 600;
        color: blue;
        margin-bottom: 20px;
    }

</style>

