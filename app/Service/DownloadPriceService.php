<?php

namespace App\Service;

use App\Models\Product;
use XMLReader;

class DownloadPriceService
{
    public function downloadPrice()
    {
        $reader = new XMLReader();
        $reader->open('https://www.21vek.by/files/price/market.yml');

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

                        Product::create([
                            'name' => $offer['typeprefix'],
                            'price' => $offer['price'],
                        ]);
                    }
            }
            $products = Product::all();
            if (count($products) == 100) {
                break;
            }
        }
    }
    // LoadingPriceJob::dispatch('url')->onQueue('download');
}
