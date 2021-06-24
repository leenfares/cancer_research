<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\models\Research;
use LaravelLocalization;
use DB;
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
    )->orderBy('id', 'DESC')->paginate(2);
    $teams = Team::select('id',
    'image',
    'telephone',
    'email',
    'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
    'specialization_' . LaravelLocalization::getCurrentLocale() . ' as specialization'
    )->paginate(6);
    $partners= Partner::select ('id',
    'image',
    'url',
    'description_' . LaravelLocalization::getCurrentLocale() . ' as description'
    )->orderBy('id', 'DESC')->paginate(4);
    return view('front.welcome',['teams'=>$teams,'research'=>$research,'partner'=>$partners]);
   }

     public function all_teams() {
      $teams = Team::select('id',
      'image',
      'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
      'specialization_' . LaravelLocalization::getCurrentLocale() . ' as specialization',
      'email',
      'telephone'
        )->paginate(20);
       return view('front.all_teams',['teams'=>$teams]);
   }
 
     public function all_research() {
      SEOMeta::setTitle('research');
      SEOMeta::setDescription('The adoption of a cancer research center at Tishreen University will be a very important step in the history of the university because we will take the decision to challenge the tragedy caused by a disease that is said to be the emperor of all diseases');
      SEOMeta::setCanonical('http://crc.tishreen.edu.sy/');
      OpenGraph::setDescription('This is my page description');
      OpenGraph::setTitle('Home');
      OpenGraph::setUrl('http://crc.tishreen.edu.sy/');
      OpenGraph::addProperty('type', 'articles');
      TwitterCard::setTitle('Homepage');
      TwitterCard::setSite('@LuizVinicius73');
      JsonLd::setTitle('Homepage');
        $research = Research::select('id',
        'image',
        'file',
        'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'description_' . LaravelLocalization::getCurrentLocale() . ' as description'
          )->paginate(20);
         return view('front.all_research',['research'=>$research]);
   }

     public function all_partners() {
        $partner = Partner::select('id',
        'image',
        'description_' . LaravelLocalization::getCurrentLocale() . ' as description'
          )->paginate(20);
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
        $single_research = Research::find($id, ['image',
        'created_at',
        'file',
        'name_'. LaravelLocalization::getCurrentLocale() . ' as name',
        'description_' . LaravelLocalization::getCurrentLocale() . ' as description'
        ]);       
         $latest_research = Research::select('id',
        'image',
        'file',
        'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'description_' . LaravelLocalization::getCurrentLocale() . ' as description'
        )->orderBy('id', 'DESC')->paginate(4);
       return view('front.view_research',['single_research'=>$single_research,'latest_research'=>$latest_research]);
    }

}
