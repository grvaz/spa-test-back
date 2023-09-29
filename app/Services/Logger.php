<?php

namespace App\Services;

use App\Models\Log;

class Logger
{
    public function log(string $type, bool $success)
    {
        Log::create([
            'type' => $type,
            'success' => (int)$success
        ]);
    }
}
