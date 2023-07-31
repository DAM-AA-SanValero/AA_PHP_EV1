<?php
include '../header.php';
?>
<section>
    <h1>INCREMENTO/DECREMENTO</h1>
    <h3>Sirven para incrementar o decrementar en una unidad el valor de dicho operando</h3>

    <!--PROGRAMACIÓN PHP-->
    <?php

      class Contador {
        private $contador;

        public function __construct($valorInicial) {
          $this->contador = $valorInicial;
        }

        public function incrementar() {
          $this->contador++;
        }

        public function decrementar() {
          $this->contador--;
        }

        public function obtenerValor() {
          return $this->contador;
        }
      }

      $contador = new Contador(5);

      echo $contador->obtenerValor() . "\n"; // Salida: 5
      $contador->incrementar();
      echo $contador->obtenerValor() . "\n"; // Salida: 6
      $contador->decrementar();
      echo $contador->obtenerValor() . "\n"; // Salida: 5


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
