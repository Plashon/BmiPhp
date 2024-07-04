<?php
class HealthAnalyzer {

    public function analyzBmi($bmi) {
        if ($bmi <= 18.9) {
            return "Underweight";
        } elseif ($bmi <= 24.9) {
            return "Normal weight";
        } elseif ($bmi <= 29.9) {
            return "Overweight";
        } else {
            return "Obesity";
        }
    }

}


?>