<?php

    class MilesCalculator implements Calculator
    {
        public function calculate(int $distance, bool $businessClass, bool $flyingClubMember): int
        {
            $multiplier = $this->getMultiplier($businessClass, $flyingClubMember);

            return $distance * $multiplier;
        }

        private function getMultiplier(bool $businessClass, bool $flyingClubMember): int
        {
            $multiplier = 1;

            if ($businessClass === true) {
                $multiplier *= 2;
            }

            if ($flyingClubMember === true) {
                $multiplier *= 2;
            }

            return $multiplier;
        }
    }