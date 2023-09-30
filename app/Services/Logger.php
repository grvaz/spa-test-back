<?php

namespace App\Services;

interface Logger
{
    public function log(string $type, bool $success);
}
