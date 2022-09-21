<?php

namespace App\Http\Controllers;
use Goutte\Client;
use Illuminate\Http\Request;


class ScraperController extends Controller
{
    private $results = array();
    public function scraper()
    {
        $client = new Client();
        $url = 'https://www.goafricaonline.com/bj';
        $page = $client->request('GET', $url);
        /*echo "<pre>";
        print_r($page);*/
      // echo $page->filter('.wrap-main-container')->text();
       /*echo $page->filter('.container')->text();
       echo $page->filter('.legend')->text();*/
        $page->filter('#goafrica-main-container')->each(function ($item)
        {
            $this->results[$item->filter('.legend')->text()] = $item->filter('.copyright')->text();
            //$page->filter('.legend')->text();
        });
        $data = $this->results;
        return view('scraper',compact($data));
    }
}
?>