<?php

namespace TaxCalculationLibrary;

class PenaltyCalculator {
    private $dailyInterestRate = 0.0025; // Günlük faiz oranı (örn. %0.25)

    public function calculateLateFee($principalAmount, $daysLate) {
        // Gecikme faizi formülü
        return $principalAmount * pow(1 + $this->dailyInterestRate, $daysLate) - $principalAmount;
    }

    public function calculatePenalty($principalAmount, $penaltyRate = 0.10) {
        // Ceza hesaplama (örneğin %10 ceza)
        return $principalAmount * $penaltyRate;
    }

    public function calculateTotalWithPenalty($principalAmount, $daysLate) {
        $lateFee = $this->calculateLateFee($principalAmount, $daysLate);
        $penalty = $this->calculatePenalty($principalAmount);

        return $principalAmount + $lateFee + $penalty;
    }
}
