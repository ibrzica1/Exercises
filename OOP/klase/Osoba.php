<?php

class Osoba
  {
      public $ime;
      public $prezime;
      public $godinaRodenja;
      public $visina;
      public $tezina;

      public function godine()
      {
        $trenutnaGodina = date("Y");
        $godine = $trenutnaGodina - $this->godinaRodenja;
        echo " Imate $godine godina";
      }
  }