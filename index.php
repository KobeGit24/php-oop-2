<!-- GOAL: nell'ottica di quanto visto a lezione definire classe Square e classe Cube (2 e 3 dimensioni); definire, oltre a variabili d'istanza, costruttore, e toString, i metodi per il calcolo dell'area/volume e del perimetro/superficie cercando di sfruttare al meglio ereditarieta' e polimorfismo; testare le classi definite con alcune istanze per verificare che sia tutto corretto. -->

<?php

  class Square {

    protected $l1;

    public function __construct($l1) {

      $this -> l1 = $l1;
    }

    public function getArea() {

      return $this -> l1 * $this -> l1;
    }

    public function getPer() {

      return $this -> l1 * 4;
    }

    public function __toString() {

      return '<strong> Valore lato: </strong>' . $this-> l1 . '<br>'
            .'<strong> Area Quadrato: </strong>' . $this-> getArea() . '<br>'
            .'<strong> Perimetro Quadrato: </strong>' . $this-> getPer();
    }

  }

  class Cube extends Square {

    public function __construct($l1) {

      parent::__construct($l1);
    }

    public function getVol() {

      return parent::getArea() * $this -> l1;
    }

    public function getSuper() {

      return parent::getArea() * 6;
    }

    public function __toString() {

      return '<strong> Valore lato: </strong>' . $this-> l1 . '<br>'
            .'<strong> Volume Cubo: </strong>' . $this-> getVol() . '<br>'
            .'<strong> Superficie Cubo: </strong>' . $this-> getSuper();
    }
  }

  $x = new Square(5);
  $y = new Square(12);

  echo $x . '<br><br>';
  echo $y . '<br>';

  echo "<hr>";

  $z = new Cube(3);
  $k = new Cube(4);

  echo $z . '<br><br>';
  echo $k . '<br>';

?>
