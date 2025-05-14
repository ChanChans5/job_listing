<?php

namespace App\Jobs;

use App\Models\Job;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class TranslateJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public Job $jobListing)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // log('Translating' . $this->jobListing->title . ' to Spanish.');
    }
}
