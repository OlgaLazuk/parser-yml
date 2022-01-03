<?php

namespace App\Console\Commands;

use App\Service\DownloadPriceService;
use Illuminate\Console\Command;

class DownloadPrice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'download:price';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to start download';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        (new DownloadPriceService)->downloadPrice();
    }
}
