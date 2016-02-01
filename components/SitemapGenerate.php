<?php
/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 24.01.16
 * Time: 18:45
 */

namespace app\components;


use app\models\Category;
use app\models\CategoryPhoto;
use app\models\PhotoCatalog;
use app\models\Video;
use DOMDocument;

class SitemapGenerate
{
    public static function generate(){
        // Там еще в сайтмепе есть приоритетность. Для главной ставим самую высокую, для всех категорий чуть ниже и последняя приоритетность для постов

        //Создает XML-строку и XML-документ при помощи DOM
        $dom = new DomDocument('1.0');

        //добавление корня - <books>
        $urlset = $dom->appendChild($dom->createElement('urlset'));
        $urlset->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

        // Главная страница
        $url = $urlset->appendChild($dom->createElement('url'));
        $loc = $url->appendChild($dom->createElement('loc'));
        $loc->appendChild($dom->createTextNode("http://".$_SERVER['SERVER_NAME']));
        $priority = $url->appendChild($dom->createElement('priority'));
        $priority->appendChild($dom->createTextNode('1.0'));

        // Категории фото
        $categoryPhoto = CategoryPhoto::find()->all();
        foreach($categoryPhoto as $category){
            $url = $urlset->appendChild($dom->createElement('url'));
            $loc = $url->appendChild($dom->createElement('loc'));
            $loc->appendChild($dom->createTextNode("http://".$_SERVER['SERVER_NAME']."/category/photo/".$category->url));
            $priority = $url->appendChild($dom->createElement('priority'));
            $priority->appendChild($dom->createTextNode('0.7'));
        }

        // Категории видео
        $categoryVideo = Category::find()->all();
        foreach($categoryVideo as $category){
            $url = $urlset->appendChild($dom->createElement('url'));
            $loc = $url->appendChild($dom->createElement('loc'));
            $loc->appendChild($dom->createTextNode("http://".$_SERVER['SERVER_NAME']."/category/video/".$category->url));
            $priority = $url->appendChild($dom->createElement('priority'));
            $priority->appendChild($dom->createTextNode('0.7'));
        }

        // Страницы фото
        $photoCatalog = PhotoCatalog::find()->where('publish = 1')->all();
        foreach($photoCatalog as $photo){
            $url = $urlset->appendChild($dom->createElement('url'));
            $loc = $url->appendChild($dom->createElement('loc'));
            $loc->appendChild($dom->createTextNode("http://".$_SERVER['SERVER_NAME']."/photo/".$photo->category->url."/".$photo->url));
            $priority = $url->appendChild($dom->createElement('priority'));
            $priority->appendChild($dom->createTextNode('0.5'));
        }

        // Страницы видео
        $videos = Video::find()->where('publish = 1')->all();
        foreach($videos as $video){
            $url = $urlset->appendChild($dom->createElement('url'));
            $loc = $url->appendChild($dom->createElement('loc'));
            $loc->appendChild($dom->createTextNode("http://".$_SERVER['SERVER_NAME']."/video/".$video->category->url."/".$video->url));
            $priority = $url->appendChild($dom->createElement('priority'));
            $priority->appendChild($dom->createTextNode('0.5'));
        }




        //генерация xml
        $dom->formatOutput = true; // установка атрибута formatOutput
        // domDocument в значение true
        // save XML as string or file
        //$test1 = $dom->saveXML(); // передача строки в test1
        $dom->save('../web/sitemap.xml'); // сохранение файла
    }

}