<?php

namespace TaxCalculationLibrary;

class StructuredPaymentPlan {
    public function calculateInstallments($totalAmount, $installmentCount, $interestRate) {
        $installmentAmount = ($totalAmount * $interestRate) / (1 - pow(1 + $interestRate, -$installmentCount));
        $installmentPlan = [];

        for ($i = 1; $i <= $installmentCount; $i++) {
            $installmentPlan[] = [
                'installment_number' => $i,
                'installment_amount' => round($installmentAmount, 2),
            ];
        }

        return $installmentPlan;
    }
}
