<?php
include '../header.php';
?>
<section>
    <h1>Bucle DO WHILE</h1>
    <h3>Cuando utilizamos este bucle nos aseguramos a que las instrucciones se ejecuten una vez como mínimo,
        comprobando al final la condición para salir del bucle </h3>

    <!--PROGRAMACIÓN PHP-->
    <?php

      class Contador{
          public $numero = 0;

          public function incrementar(){
              $this->numero++;
              return $this->numero;
          }
      }

      $contador = new Contador();

      echo '<h3>Mientras siga habiendo elementos en un array el código imprimirá los siguientes productos:</h3>';
      do {
        $valor = $contador->incrementar();

        echo '<h4>'.$valor.'</h4>';

      }while($valor < 10);

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

    h4{
        color: blue;
    }

    p {
        font-size: 20px;
        font-weight: 600;
        color: blue;
        margin-bottom: 30px;
    }

</style>
