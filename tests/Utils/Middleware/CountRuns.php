<?php

namespace Tests\Utils\Middleware;

use Illuminate\Http\Request;

class CountRuns
{
    /**
     * Track how often this middleware was run.
     *
     * @var int
     */
    public static $runCounter = 0;

    public function handle(Request $request, \Closure $next)
    {
        self::$runCounter++;

        return $next($request);
    }

    public function resolve(): int
    {
        return self::$runCounter;
    }
}
