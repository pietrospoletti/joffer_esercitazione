<?php

namespace App\Http\Controllers;

use App\Models\offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function offers(){
        return offer::all();
    }

    public function offer($id){
        return offer::findOrFail($id);
    }

    public function addoffer(Request $request){
        $offerData = json_decode($request->getContent());
        $newOffer = new offer();
        $newOffer -> language = $offerData->language;
        $newOffer -> icon = $offerData->icon;
        $newOffer -> company = $offerData->company;
        $newOffer -> RAL = $offerData->RAL;
        $newOffer -> level = $offerData->level;
        $newOffer -> location = $offerData->location;
        $newOffer -> description = $offerData->description;
        $newOffer -> save();
        return $offerData;

    }

    public function edit(Request $request, $id){
        $offerData = json_decode($request->getContent());
        $offer = offer::where('id',$id)->first();
        $offer->language = $request->language;
        $offer->icon = $request->icon;
        $offer->company = $request->company;
        $offer->RAL = $request->RAL;
        $offer->level = $request->level;
        $offer->location = $request->location;
        $offer->description = $request->description;
        $offer->save();
    } 
}
