<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function store(Request $request){

        $long_url= $request->long_url;

        if(empty($long_url)){
            return back()->with('status', 'Please provide a valid url');
        }
        
$short_url=$this->generateUniqueId();

        Link::create([
            'short_url' => $short_url,
            'long_url' => $request->long_url
        ]);


        return view('index', [
            'short_url' => $short_url
        ]);
       
    }

    public function redirect($url){
        $link=Link::where('short_url', $url)->first();
        return redirect()->to($link->long_url);
    }

    public function generateUniqueId() {
        // Generate a random 6-character string
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
      return  $id = substr(str_shuffle($chars), 0, 6);
      
        
      }
      
    }
     
      
      
      
      
      

