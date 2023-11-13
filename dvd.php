<?php
class DVD extends Material
{
    private $duracionMinutos;
    private $genero;

    public function __construct($titulo, $autor, $ISBN, $disponible, $duracionMinutos, $genero)
    {
        parent::__construct($titulo, $autor, $ISBN, $disponible);
        $this->duracionMinutos = $duracionMinutos;
        $this->genero = $genero;
    }

    public function getDuracionMinutos()
    {
        return $this->duracionMinutos;
    }

    public function setDuracionMinutos($duracionMinutos)
    {
        $this->duracionMinutos = $duracionMinutos;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    public function __toString()
    {
        return parent::__toString() . "<br><b>Duración:</b> {$this->duracionMinutos} minutos<br><b>Género:</b> {$this->genero}";
    }
}
?>
