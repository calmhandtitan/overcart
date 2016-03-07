<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AboutCtrl extends Controller
{
    public function home(){
      
      
      $url = "https://offline-news-api.herokuapp.com/stories";
      $result = json_decode(file_get_contents($url), true);
      
    	return view('welcome',compact('result'));
    }
    
    public function about($id) {
      $url = "https://offline-news-api.herokuapp.com/stories";
      $result = json_decode(file_get_contents($url), true);
      
		foreach($result as $entry){
        if($entry['guid'] == $id){
          $details['guid'] = $entry['guid'];
          $details['author'] = $entry['author'];
          $details['title'] = $entry['title'];
          $details['date'] = $entry['date'];
          $details['body'] = $entry['body'];
          return View('about')->with('details',$details);
        }
      }
    }
}
 