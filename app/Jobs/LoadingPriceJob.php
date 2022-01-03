<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class LoadingPriceJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
//        $this->url = 'https://www.21vek.by/files/price/market.yml';
//        $file_name = basename($this->url);
//        file_put_contents(
//            $_SERVER['DOCUMENT_ROOT'] ."/../storage/app/public/" . $file_name
////            iconv('windows-1251//IGNORE', 'UTF-8//IGNORE',$file_name)
//            ,
//            file_get_contents($this->url)
//        );
   }
}
