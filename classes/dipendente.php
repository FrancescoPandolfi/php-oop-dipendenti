<?php

  class Dipendente {

    protected $id_dipendente;
    protected $matricola;
    protected $ruolo;
    protected $tipo_di_contratto;
    protected $note;

    public function __construct($id_dipendente, $matricola, $ruolo)
    {
      $this->id_dipendente = $id_dipendente;
      $this->matricola = $matricola;
      $this->ruolo = $ruolo;
    }

    public function getBasicInfo() 
    {
      return
      "Id dipendente: " . $this->id_dipendente . PHP_EOL .
      "Matricola: " . $this->matricola . PHP_EOL .
      "Id dipendente: " . $this->ruolo . PHP_EOL;
    }

    public function setContract($tipo_di_contratto) 
    {
      $this->tipo_di_contratto = $tipo_di_contratto;
    }

    public function getContract()
    {
      return $this->tipo_di_contratto;
    }

  }