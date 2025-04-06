<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class RosterParserService
{
    public function parse(string $filePath): void
    {
        // You'll implement the parsing logic here.
        Log::info("Parsing file at: {$filePath}");

        // Example stub:
        // - extract HTML content
        // - parse event rows
        // - save to database
    }
}
