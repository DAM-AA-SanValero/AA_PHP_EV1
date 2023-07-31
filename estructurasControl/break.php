<?php
include '../header.php';
?>
<section>
    <h1>BREAK</h1>
    <h3>Tiene la función de detener la ejecución de un bucle y salirse de él.</h3>

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

        public function obtenerValor() {
          return $this->contador;
        }
      }

      $contador = new Contador(0);

      while (true) {
        $contador->incrementar();
        if ($contador->obtenerValor() == 5) {
          break;
        }
        echo $contador->obtenerValor() . "\n";
      }

      // Salida: 1 2 3 4

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
