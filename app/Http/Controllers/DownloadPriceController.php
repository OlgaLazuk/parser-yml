<?php

namespace App\Http\Controllers;

use App\Jobs\LoadingPriceJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class DownloadPriceController extends Controller
{
    public function downloadPrice()
    {
//        if (!file_exists('market.yml')) {
//
//            $ch = curl_init('https://www.21vek.by/files/price/market.yml');
//            $fp = fopen($_SERVER['DOCUMENT_ROOT'] . '/market.yml', 'wb');
//            curl_setopt($ch, CURLOPT_FILE, $fp);
//            curl_setopt($ch, CURLOPT_HEADER, 0);
//            curl_exec($ch);
//            curl_close($ch);
//            fclose($fp);
//            // LoadingPriceJob::dispatch('url')->onQueue('download');
//        }
//        return 'File exist!';
    }



//        $yml = file_get_contents('price1.yml');
//        dd($yml);
//        $yml_data = simplexml_load_string($yml);
//        $json = json_encode($yml_data);
//        $json_data = json_decode($json, true);
//        dd($json_data);


        // return Http::dd()->get('https://www.21vek.by/files/price/market.yml', []);


//        $url = 'https://www.21vek.by/files/price/market.yml';
//        $path = $_SERVER['DOCUMENT_ROOT'] . '/price.yml';
//        file_put_contents($path, file_get_contents($url));






}
