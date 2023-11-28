<?php
class Ordenador {
    use Turbo;
    private string $marca;
    private int $year;
    private string $processor; 

    public function __construct($marca, $year, $processor) {
        $this->marca = $marca;
        $this->year = $year;
        $this->processor = $processor;
    }
}