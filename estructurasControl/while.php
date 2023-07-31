<?php
include '../header.php';
?>
<section>
    <h1>Bucle WHILE</h1>
    <h3>En este tipo de bucle itera o repite un bloque de código mientras se cumpla una condición</h3>

    <!--PROGRAMACIÓN PHP-->
    <?php

    class Stock{
        public $productos = array();

        public function __construct(array $productos){
            $this->productos = $productos;
        }

        public function stockProductos(){
            $producto = 0;
            while ($producto < count($this->productos)) {
                echo '<p>'.$this->productos[$producto].'</p>';
            $producto++;
            }
        }
    }

    $productos = array("GameBoy","Playstation","XBox");
    $listado = new Stock($productos);

    echo '<h3>Mientras siga habiendo elementos en un array el código imprimirá los siguientes productos:</h3>';
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
