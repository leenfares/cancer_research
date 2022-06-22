<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\models\Research;
use App\models\News;
use LaravelLocalization;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\Team;
use App\models\Partner;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\SEOTools;

class home_controller extends Controller {
   public function index() {
    SEOMeta::setTitle('Cancer Research Center');
    SEOMeta::setDescription('The adoption of a cancer research center at Tishreen University will be a very important step in the history of the university because we will take the decision to challenge the tragedy caused by a disease that is said to be the emperor of all diseases');
    SEOMeta::setCanonical('http://crc.tishreen.edu.sy/');

    OpenGraph::setDescription('This is my page description');
    OpenGraph::setTitle('Home');
    OpenGraph::setUrl('http://crc.tishreen.edu.sy/');
    OpenGraph::addProperty('type', 'articles');

    TwitterCard::setTitle('Homepage');
    TwitterCard::setSite('@LuizVinicius73');

    JsonLd::setTitle('Homepage');
    // JsonLd::setDescription('This is my page description');
    // JsonLd::addImage('https://codecasts.com.br/img/logo.jpg');
    
    $research = Research::select('id',
    'image',
    'file',
    'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
    'description_' . LaravelLocalization::getCurrentLocale() . ' as description'
    )->orderBy('id', 'DESC')->take(2)->get();
    $teams = Team::select('id',
    'image',
    'telephone',
    'email',
    'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
    'specialization_' . LaravelLocalization::getCurrentLocale() . ' as specialization'
    )->where('is_on_homepage',1)
    ->orderBy('id', 'DESC')->take(6)->get();
    $partners= Partner::select ('id',
    'image',
    'url',
    'description_' . LaravelLocalization::getCurrentLocale() . ' as description'
    )->orderBy('id', 'DESC')->take(4)->get();
    $news = News::select('id',
    'featured_image',
    'created_at',
    'title_' . LaravelLocalization::getCurrentLocale() . ' as title',
    'description_' . LaravelLocalization::getCurrentLocale() . ' as description')->orderBy('id','desc')
      ->take(4)->get();
    return view('front.welcome',['news'=>$news,'teams'=>$teams,'research'=>$research,'partner'=>$partners]);
   }

     public function all_teams() {
      $teams = Team::select('id',
      'image',
      'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
      'specialization_' . LaravelLocalization::getCurrentLocale() . ' as specialization',
      'email',
      'telephone'
        )->orderBy('id','desc')
        ->paginate(20);
       return view('front.all_teams',['teams'=>$teams]);
   }

   public function all_news(){
    $news = News::select('id',
    'created_at',
    'featured_image',
    'title_' . LaravelLocalization::getCurrentLocale() . ' as title',
    'description_' . LaravelLocalization::getCurrentLocale() . ' as description',
      )->orderBy('id','desc')
      ->paginate(20);
     return view('front.all_news',['news'=>$news]);
   }

     public function all_research() {      
      SEOMeta::setTitle( __('messages.latest_res'));
      SEOMeta::setDescription('The adoption of a cancer research center at Tishreen University will be a very important step in the history of the university because we will take the decision to challenge the tragedy caused by a disease that is said to be the emperor of all diseases');
      SEOMeta::setCanonical('http://crc.tishreen.edu.sy/all_research');
      OpenGraph::setDescription( __('messages.latest_res'));
      OpenGraph::setTitle(__('messages.latest_res'));
      OpenGraph::setUrl('http://crc.tishreen.edu.sy/all_research');
      OpenGraph::addProperty('type', 'articles');
      TwitterCard::setTitle(__('messages.latest_res'));
      TwitterCard::setSite('@LuizVinicius73');
      JsonLd::setTitle(__('messages.latest_res'));
        $research = Research::select('id',
        'image',
        'file',
        'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'description_' . LaravelLocalization::getCurrentLocale() . ' as description'
          )->orderBy('id', 'DESC')
          ->paginate(20);
         return view('front.all_research',['research'=>$research]);
   }

     public function all_partners() {
      SEOMeta::setTitle( __('messages.our_par'));
      SEOMeta::setDescription('The adoption of a cancer research center at Tishreen University will be a very important step in the history of the university because we will take the decision to challenge the tragedy caused by a disease that is said to be the emperor of all diseases');
      SEOMeta::setCanonical('http://crc.tishreen.edu.sy/all_partners');
      OpenGraph::setDescription( __('messages.our_par'));
      OpenGraph::setTitle(__('messages.latest_res'));
      OpenGraph::setUrl('http://crc.tishreen.edu.sy/all_partners');
      OpenGraph::addProperty('type', 'articles');
      TwitterCard::setTitle(__('messages.our_par'));
      TwitterCard::setSite('@LuizVinicius73');
      JsonLd::setTitle(__('messages.our_par'));
        $partner = Partner::select('id',
        'image',
        'description_' . LaravelLocalization::getCurrentLocale() . ' as description'
          )->orderBy('id', 'DESC')->paginate(20);
         return view('front.all_partners',['partner'=>$partner]);
   }
   
    public function postRegister(Request $request) {
      //Retrieve the name input field
      $name = $request->input('name');
      echo 'Name: '.$name;
      echo '<br>';
      
      //Retrieve the username input field
      $username = $request->username;
      echo 'Username: '.$username;
      echo '<br>';
      
      //Retrieve the password input field
      $password = $request->password;
      echo 'Password: '.$password;
   }
    public function view_research($id){
        $single_research = Research::findORFail($id, ['image',
        'created_at',
        'file',
        'id',
        'meta_desc',
        'meta_kw',
        'name_'. LaravelLocalization::getCurrentLocale() . ' as name',
        'description_' . LaravelLocalization::getCurrentLocale() . ' as description'
        ]);       
        SEOMeta::setTitle($single_research->name); 
        SEOMeta::setDescription($single_research->meta_desc);
        SEOMeta::setKeywords($single_research->meta_kw);
        SEOMeta::setCanonical('http://crc.tishreen.edu.sy/'.LaravelLocalization::getCurrentLocale().'/research/'.$single_research->id);
        OpenGraph::setDescription($single_research->meta_desc);
        OpenGraph::setTitle(__('messages.latest_res'));
        OpenGraph::setUrl('http://crc.tishreen.edu.sy/'.LaravelLocalization::getCurrentLocale().'/research/'.$single_research->id);
        OpenGraph::addProperty('type', 'articles');
        TwitterCard::setTitle(__('messages.our_par'));
        TwitterCard::setSite('@LuizVinicius73');
        JsonLd::setTitle(__('messages.our_par'));

         $latest_research = Research::select('id',
        'image',
        'file',
        'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'description_' . LaravelLocalization::getCurrentLocale() . ' as description'
        )->orderBy('id', 'DESC')->take(4)->get();
       return view('front.view_research',['single_research'=>$single_research,'latest_research'=>$latest_research]);
    }

    public function view_news($id){
      $single_news = News::findORFail($id, 
      ['featured_image',
      'created_at',
      'id',
      'title_'. LaravelLocalization::getCurrentLocale() . ' as title',
      'description_' . LaravelLocalization::getCurrentLocale() . ' as description'
      ]); 

      // $single_news=News::findORFail($id);
      $latest_news = News::select('id',
      'featured_image',
      'title_' . LaravelLocalization::getCurrentLocale() . ' as title',
      )->orderBy('id', 'DESC')->take(4)->get();
      // dd($latest_news);
     return view('front.view_news',['single_news'=>$single_news,'latest_news'=>$latest_news]);
    }

}
