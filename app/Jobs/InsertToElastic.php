<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;
use Elastic\Elasticsearch\ClientBuilder;
use App\Models\Audit;

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
        // $params = [
        //     'index' => 'audits',
        //     'body'  => [ 'name' => Str::random(12)]
        // ];
        // $client = ClientBuilder::create()
        //     ->setHosts(["elasticsearch:9200"])
        //     ->build();
        // $client->index($params);

        $audit = Audit::create([
            "name"=>Str::random(12)
        ]);
        logger("job processed >>>> " . $this->name);
    }
}
