<?php
include '../header.php';
?>
<section>
    <h1>Bucle FOR EACH</h1>


    <!--PROGRAMACIÓN PHP-->
    <?php

        class Stock{
            public $productos = array();

            public function __construct(array $productos){
                $this->productos = $productos;
            }

            public function stockProductos(){
                
                foreach ($this->productos as $producto) {
                    echo '<p>'.$producto.'</p>';
                }
            }

        }  

        $consolas = array("GameBoy","Playstation","XBox");
        $listado = new Stock($consolas);

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
        margin-bottom: 50px;
    }

    p {
        font-size: 20px;
        font-weight: 600;
        color: blue;
        margin-bottom: 30px;
    }

</style>
