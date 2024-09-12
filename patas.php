<?php
class CalculatePatas {
    private $sum;
    private $animals;

    public function __construct($animals = [])
    {
    $this->animals = $animals;
    $this->sum = 0;
    }

    public function sum()
    {
    $this->sum = array_sum($this->animals);
    }

    public function print()
    {
    return "Calculo ejecutado \n\n Los animales suman {$this->sum} patas.";
    }

    public function toJson()
    {
        return json_encode([
            'mensaje' => "Cálculo ejecutado",
            'total_patas' => $this->sum
        ]);
    }
}
?>