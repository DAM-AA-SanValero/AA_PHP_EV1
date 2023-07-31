<?php
include '../header.php';
?>
<section>
    <h1>Condicional SWITCH/CASE</h1>
    <h3>Si hay varias condiciones empleariamos este tipo de estructura</h3>
    <br>


    <!--PROGRAMACIÓN PHP-->
    <?php

    class Calificacion
    {
        public $nota;

        public function __construct($nota)
        {
            $this->nota = $nota;
        }

        public function calificacion()
        {
            switch ($this->nota) {
                case ($this->nota < 5):
                    echo '<p>Suspenso</p>';
                    break;
                case (5):
                    echo '<p>Aprobado</p>';
                    break;
                case (6):
                    echo '<p>Aprobado alto</p>';
                    break;
                case (7):
                    echo '<p>Notable</p>';
                    break;
                case (8):
                    echo '<p>Notable alto</p>';
                    break;
                case (9):
                    echo '<p>Sobresaliente</p>';
                    break;
                case (10):
                    echo '<p>Matricula</p>';
                    break;
                default:
                    echo '<p>Nota erronea</p>';
                    break;

            }
        }
    }

    $persona = new Calificacion(2);
    $persona2 = new Calificacion(9);
    $persona3 = new Calificacion(8);
    $persona4 = new Calificacion(100);

    echo '<h3>En el caso que un alumno tenga menos de un 5, se informará del suspenso</h3>';
    $persona->calificacion();

    echo '<h3>En el caso que un alumno tenga un 9, se informará del sobresaliente</h3>';
    $persona2->calificacion();

    echo '<h3>En el caso que un alumno tenga un 8, se informará del notable alto</h3>';
    $persona3->calificacion();

    echo '<h3>En el caso que un alumno tenga una nota erronea, se informará del error</h3>';
    $persona4->calificacion();

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
        margin-bottom: 30px;
    }

</style>
