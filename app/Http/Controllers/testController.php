<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelLocalization;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\SEOTools;
use App\models\News;


class testController extends Controller
{
    //
    public function index()
    {
        SEOMeta::setTitle('Home');
        SEOMeta::setDescription('This is my page description');
        SEOMeta::setCanonical('https://codecasts.com.br/lesson');

        OpenGraph::setDescription('This is my page description');
        OpenGraph::setTitle('Home');
        OpenGraph::setUrl('http://current.url.com');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Homepage');
        TwitterCard::setSite('@LuizVinicius73');

        JsonLd::setTitle('Homepage');
        JsonLd::setDescription('This is my page description');
        JsonLd::addImage('https://codecasts.com.br/img/logo.jpg');
        return view('test');
    }

    public function all_news() {
        $news = News::select('id',
        'featured_image',
        'title_' . LaravelLocalization::getCurrentLocale() . ' as title',
        'description_' . LaravelLocalization::getCurrentLocale() . ' as description',
         )->paginate(20);
         return view('test',['news'=>$news]);
     }

     public function view_news($id){
        $news = News::find($id, [
        'featured_image',
        'title_' . LaravelLocalization::getCurrentLocale() . ' as title',
        'description_' . LaravelLocalization::getCurrentLocale() . ' as description']);
        // foreach(News::find($id)->images as $image){
        //     echo  $image->path."</br>";
        //  }
        $images = News::find($id)->images;
        return view('test',['news'=>$news,'images'=>$images]);

    }
     
}

