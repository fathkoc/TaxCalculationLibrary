<?php

namespace TaxCalculationLibrary;

class CorporateTaxCalculator {
    private $corporateTaxRate = 0.20; // 2024 yılı için kurumlar vergisi oranı %20

    public function calculate($netIncome) {
        return $netIncome * $this->corporateTaxRate;
    }
}
