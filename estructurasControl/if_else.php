<?php
include '../header.php';
?>
<section>
    <h1>Condicional IF/ELSE</h1>
    <h3>En el caso de que una condición se cumpla se ejecutará un bloque de código, en caso contrario, ejecutará otro bloque diferente.</h3>
    <?php

        class Nombre{
            public $nombre;
            public $edad;

            public function __construct($nombre,$edad){
                $this->nombre = $nombre;
                $this->edad = $edad;
            }

            public function esMayorEdad(){
               if($this->edad >= 18){
                    echo '<p>'.$this->nombre." es mayor de edad </p>";
               }
               else  echo '<p>'.$this->nombre." no es mayor de edad<p>";
            }  
        }

        $nombre = new Nombre("Joserra", 18);
        $nombre2 = new Nombre("Izarbe", 5);

        echo '<h3>Si una persona es mayor de edad se informará que cumple con la condición (if)</h3>';
        $nombre->esMayorEdad();

        echo '<h3>Si una persona es menor de edad se informará que no cumple con la anterior condicion (else)</h3>';
        $nombre2->esMayorEdad();
        
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
