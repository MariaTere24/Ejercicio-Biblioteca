<?php

class Libro {
    private $titulo;
    private $autor;
    private $anioPublicacion;
    private $disponible;

    public function __construct($titulo, $autor, $anioPublicacion, $disponible = true) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anioPublicacion = $anioPublicacion;
        $this->disponible = $disponible;
    }

    public function prestarLibro() {
        if ($this->disponible) {
            $this->disponible = false;
            echo "El libro '{$this->titulo}' ha sido prestado.\n";
        } else {
            echo "El libro '{$this->titulo}' no está disponible para préstamo.\n";
        }
    }

    public function devolverLibro() {
        if (!$this->disponible) {
            $this->disponible = true;
            echo "El libro '{$this->titulo}' ha sido devuelto y ahora está disponible.\n";
        } else {
            echo "El libro '{$this->titulo}' ya está disponible.\n";
        }
    }

    public function mostrarInformacion() {
        echo "Título: {$this->titulo}\n";
        echo "Autor: {$this->autor}\n";
        echo "Año de publicación: {$this->anioPublicacion}\n";
        echo "Disponibilidad: " . ($this->disponible ? "Disponible" : "No disponible") . "\n";
        echo "----------------------------\n";
    }
}

$libro1 = new Libro("El Quijote", "Miguel de Cervantes", 1605);
$libro2 = new Libro("Cien años de soledad", "Gabriel García Márquez", 1967);
$libro3 = new Libro("1984", "George Orwell", 1949);

$libro1->mostrarInformacion();
$libro2->mostrarInformacion();
$libro3->mostrarInformacion();

$libro1->prestarLibro();
$libro1->prestarLibro();

$libro1->devolverLibro();
$libro1->devolverLibro();

$libro2->prestarLibro();
$libro2->mostrarInformacion();
$libro2->devolverLibro();
$libro2->mostrarInformacion();