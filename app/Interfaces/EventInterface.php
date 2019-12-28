<?php

namespace App\Interfaces;

interface EventInterface
{
    public function process(): void;

    public function revert(): void;
}
