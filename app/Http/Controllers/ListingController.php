<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    public function index(Request $request)
    {
        $listings = Listing::all();
        return response()->json($listings);
    }

    public function index2(Request $request)
    {
        $listings = Listing::where('seller_id', $request->seller_id)->get();
        return response()->json($listings);
    }

    public function index3(Request $request)
    {
        $user = Auth::id();
        $listings = Listing::where('seller_id', $user)->get();
        return response()->json($listings);
    }

    public function sellerOrders(Request $request)
    {
        $orders = Order::where('seller_id', $request->user_id)->get();
        return response()->json($orders);
    }


    public function sellerOrders2()
    {
        $user = Auth::id();
        $listings = Listing::where('id', $user)->first();
        return response()->json($listings);
    }

    public function store(Request $request)
    {

        $user = Auth::id();

        $listing = Listing::create([
            'title' => $request->title,
            'description' => $request->description,
            'picture' => $request->picture,
            'seller_id' => $user,
            'price' => $request->price
        ]);

        return response()->json($listing);
    }

    public function show(Request $request)
    {
        $listing = Listing::where('id', $request->id)->first();
        return response()->json($listing);
    }
}
