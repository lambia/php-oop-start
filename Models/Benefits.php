<?php
trait Benefits
{
    public $autoAziendale;
    public $telefonoAziendale;

    public function getBenefits()
    {
        $result = "Nessuno";
        if ($this->autoAziendale && $this->telefonoAziendale) {
            $result = "Auto e telefono";
        } else if ($this->autoAziendale) {
            $result = "Auto";
        } else if ($this->telefonoAziendale) {
            $result = "Telefono";
        }
        return $result;
    }
}
