<?php
include '../header.php';
?>
<section>
    <h1>Condicional IF</h1>
    <h3>Se utiliza para evaluar una expresión condicional: si se cumple la condición (es verdadera), ejecutará un bloque de código.
        Si es falsa, es posible ejecutar otras sentencias o puede terminar el código.</h3>
    <?php

    class Suma
    {
        public $numero1;
        public $numero2;

        public function __construct($numero1, $numero2)
        {
            $this->numero1 = $numero1;
            $this->numero2 = $numero2;
        }

        public function suma()
        {
            $resultado = $this->numero1 + $this->numero2;
            if ($resultado == 4) {
                echo "<p>El resultado de la suma es: " . $resultado . "</p>";
            }
        }
    }

    $resultado = new Suma(2, 2);

    echo '<h3>Si el resultado de una suma es igual a 4 se cumplira dicha condición (if):</h3>';
    $resultado->suma();
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







