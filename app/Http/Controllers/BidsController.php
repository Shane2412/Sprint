<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bids;
use App\Buyers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BuyersController;

class BidsController extends Controller
{

    public function createBid(Buyers $buyers)
    {
      $bid = Bids::create([
          'quantity' => 10,
          'user_id' => auth()->id(),
          'demands_id' => $buyers->id
      ]);
      //return $bid;
       alert()->success('Congrats!', 'You successfully Made a Bid');
       return back();
    }
}
