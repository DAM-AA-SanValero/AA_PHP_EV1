<?php
include '../header.php';
?>
<section>
    <h1>Condicional IF/ELSE IF/ELSE</h1>
    <h3>Si hay varias condiciones empleariamos este tipo de estructura</h3>

    <!--PROGRAMACIÓN PHP-->
    <?php

        class Persona{
            public $nombre;
            public $genero;

            public function __construct($nombre,$genero){
                $this->nombre = $nombre;
                $this->genero = $genero;
            }

            public function identificarGenero(){
               if($this->genero == "Hombre"){
                    echo '<p>'.$this->nombre." es un hombre </p>";
               }
               elseif($this->genero == "Mujer"){
                    echo '<p>'.$this->nombre." es una mujer </p>";
               }

               else  echo '<p>'.$this->nombre." tiene un género desconocido</p>";
            }  
        }

        $persona = new Persona("Joserra", "Hombre");
        $persona2 = new Persona("Andrea", "Mujer");
        $persona3 = new Persona("David", "N/A");

        echo '<h3>Si una persona es hombre se cumplirá la condición</h3>';
        $persona->identificarGenero();

        echo '<h3>pero si la persona es mujer se cumplirá esta condición</h3>';
        $persona2->identificarGenero();

        echo '<h3>En caso de que una persona no cumpla ambas condiciones, se informará con otro mensaje</h3>';
        $persona3->identificarGenero();
        
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
