<?php

class Material
{
    private $titulo;
    private $autor;
    private $ISBN;
    private $disponible;

    public function __construct($titulo, $autor, $ISBN, $disponible)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ISBN = $ISBN;
        $this->disponible = $disponible;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getISBN()
    {
        return $this->ISBN;
    }

    public function setISBN($ISBN)
    {
        $this->ISBN = $ISBN;
    }

    public function getDisponible()
    {
        return $this->disponible;
    }

    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;
    }

    public function prestar()
    {
        $mensaje = $this->disponible ? 'se ha prestado correctamente.' : 'esta actualmente en prestamo, no se puede prestar.';
        $this->disponible = !$this->disponible;
        return "El libro con el titulo: <b>{$this->titulo}</b> {$mensaje}";
    }

    public function devolver()
    {
        $mensaje = $this->disponible ? 'No se puede devolver, aún no se ha prestado.' : 'se devolvió correctamente.';
        $this->disponible = !$this->disponible;
        return "El libro con el titulo: <b>{$this->titulo}</b> {$mensaje}";
    }

    public function __toString()
    {
        $disponibilidad = $this->disponible
            ? '<b><span class="green-text">Disponible</span></b>'
            : '<b><span class="red-text">No Disponible</span></b>';
        return "<b>Titulo:</b> {$this->titulo}<br><b>Autor:</b> {$this->autor}<br><b>ISBN:</b> {$this->ISBN}<br><b>Disponibilidad:</b> {$disponibilidad}";
    }
}
?>
