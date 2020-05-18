<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Card;
use App\Listing;

class CardsController extends Controller
{
    public function new($listing_id){
        return view('card/new',['listing_id'=>$listing_id,]);
    }
    
    public function add(Request $request,$listing_id){
        $cards=new Card;
        $cards->title=$request->card_title;
        $cards->memo=$request->card_memo;
        $cards->listing_id=$listing_id;
        $cards->save();
        
        return redirect('/');
    }
    
    public function detail($listing_id,$card_id){
        $listing=Listing::find($listing_id);
        $card=Card::find($card_id);
        
        return view('card/show',['card'=>$card,'listing'=>$listing,]);
    }
    
    public function edit($card_id){
        $card=Card::find($card_id);
       $listings = Listing::where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'asc')
            ->get();
        return view('card/edit',['card'=>$card,'lists'=>$listings,]);
    }
    
    public function update(Request $request){
        $cards=Card::find($request->id);
        $cards->title=$request->card_title;
        $cards->memo=$request->card_memo;
        $cards->listing_id=$request->list_name;
        $cards->save();
        
        return redirect('/');
    }
    
    public function destroy($card_id){
        
        $cards=Card::find($card_id);
        $cards->delete();
        return redirect('/');
    }
    
}
