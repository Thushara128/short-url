<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ShortLink;
use Session;
use Illuminate\Support\Facades\DB;


class ShortLinkController extends Controller
{
    //
    public function index()
    {
        $shortLinks = ShortLink::latest()->get();
   
        return view('shortenLink', compact('shortLinks'));
    }
    public function store(Request $request)
    {
        $request->validate([
           'link' => 'required|url'
        ]);
        $input['title'] = $request->title;
        $input['link'] = $request->link;
        $input['code'] = str::random(6);
   
        ShortLink::create($input);
  
        return redirect('shorten-link')
             ->with('success', 'Shorten Link Generated Successfully!');
    }
    public function shortenLink($code)
    {
        $find = ShortLink::where('code', $code)->first();
   
        return redirect($find->link);
    }
    function delete($id){
        ShortLink::find($id)->delete();
       return redirect('shorten-link');
   }
   
}

