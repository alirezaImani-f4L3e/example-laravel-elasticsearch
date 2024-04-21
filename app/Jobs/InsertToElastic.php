<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Audit;
use Illuminate\Support\Str;

class InsertToElastic implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(private string $name)
    {
        logger("dispatched >>>> ");
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        logger("test value >>>> " . $this->name);
        $audit = Audit::create([
            "name"=> Str::random(10)
        ]);
    }
}
