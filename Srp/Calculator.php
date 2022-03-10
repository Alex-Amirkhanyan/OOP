<?php

    interface Calculator
    {
        public function calculate(int $distance, bool $businessClass, bool $flyingClubMember): int ;
    }