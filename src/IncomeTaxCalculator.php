<?php

namespace TaxCalculationLibrary;

class IncomeTaxCalculator {
    // 2024 yılı için vergi dilimleri
    private $taxBrackets = [
        32000 => 0.15,  // %15
        70000 => 0.20,  // %20
        250000 => 0.27, // %27
        880000 => 0.35, // %35
        PHP_INT_MAX => 0.40 // %40
    ];

    public function calculate($annualIncome) {
        $taxAmount = 0;
        $previousBracket = 0;

        foreach ($this->taxBrackets as $bracket => $rate) {
            if ($annualIncome > $bracket) {
                $taxAmount += ($bracket - $previousBracket) * $rate;
                $previousBracket = $bracket;
            } else {
                $taxAmount += ($annualIncome - $previousBracket) * $rate;
                break;
            }
        }

        return $taxAmount;
    }
}
