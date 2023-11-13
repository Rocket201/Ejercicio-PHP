<?php
class Libro extends Material
{
    private $numeroPaginas;

    public function __construct($titulo, $autor, $ISBN, $disponible, $numeroPaginas)
    {
        parent::__construct($titulo, $autor, $ISBN, $disponible);
        $this->numeroPaginas = $numeroPaginas;
    }

    public function getNumeroPaginas()
    {
        return $this->numeroPaginas;
    }

    public function setNumeroPaginas($numeroPaginas)
    {
        $this->numeroPaginas = $numeroPaginas;
    }

    public function __toString()
    {
        return parent::__toString() . "<br><b>Número de Páginas:</b> {$this->numeroPaginas}";
    }
}
?>
