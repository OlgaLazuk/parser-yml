<?php


namespace App\Service;


class DownloadPriceService
{
    public function downloadPrice()
    {
        // LoadingPriceJob::dispatch('url')->onQueue('download');

        if (!file_exists('market.yml')) {

            $ch = curl_init('https://www.21vek.by/files/price/market.yml');
            $fp = fopen($_SERVER['DOCUMENT_ROOT'] . '/market.yml', 'wb');
            curl_setopt($ch, CURLOPT_FILE, $fp);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_exec($ch);
            curl_close($ch);
            fclose($fp);

        }
        return 'File exist!';
    }
}
