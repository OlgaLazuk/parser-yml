<?php

namespace App\Service;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Yaml\Yaml;
use XMLReader;

class DownloadPriceService
{
    public function downloadPrice()
    {
        $url = 'https://www.21vek.by/files/price/market.yml';
        if (!Storage::disk('public')->exists(basename($url))) {
            Storage::disk('public')
                ->putFileAs('', $url, basename($url));
        } else echo 'File exists!!!';
    }

    public function parser()
    {
        $reader = new XMLReader();
        $reader->open('https://www.21vek.by/files/price/market.yml');

        $count = 0;

        while ($reader->read()) {

            switch ($reader->nodeType) {

                case (XMLReader::ELEMENT):

                    // если находим в xml элемент <offer> начинаем обрабатывать его
                    if ($reader->localName == 'offer') {

                        // формируем массив который будет содержать все дочерние элементы элемента <offer>
                        $offer = [];

                        while ($reader->read()) {
                            if ($reader->nodeType == XMLReader::ELEMENT) {
                                $name = strtolower($reader->localName);
                                while ($reader->moveToNextAttribute()) {

                                    // получаем атрибуты если они есть
                                    $offer[$name]['__attribs'][$reader->localName] = $reader->value;
                                }
                                $reader->read();
                                if (isset($offer[$name]) && is_array($offer[$name])) {
                                    $offer[$name]['value'] = $reader->value;
                                } else {
                                    $offer[$name] = $reader->value;
                                }

                            }
                            if ($reader->nodeType == XMLReader::END_ELEMENT && $reader->localName == 'offer') {
                                break;
                            }
                        } // сформирован массив для каждого узла

                        Product::query()
                            ->create([
                                'name' => $offer['typeprefix'],
                                'price' => $offer['price'],
                            ]);
                        $count++;
                    }
            }
            if ($count == 100) {
                break;
            }
        }
    }
}
