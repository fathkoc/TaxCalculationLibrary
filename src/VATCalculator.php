<?php

namespace TaxCalculationLibrary;

class VATCalculator {
    private $vatRates = [
        'general' => 0.18,  // Genel KDV oranı %18
        'reduced' => 0.08,  // İndirimli KDV oranı %8
        'minimal' => 0.01   // Düşük KDV oranı %1
    ];

    public function calculate($amount, $rateType = 'general') {
        $rate = $this->vatRates[$rateType] ?? $this->vatRates['general'];
        return $amount * $rate;
    }

    public function calculateIncludingVAT($amount, $rateType = 'general') {
        $rate = $this->vatRates[$rateType] ?? $this->vatRates['general'];
        return $amount * (1 + $rate);
    }
}
