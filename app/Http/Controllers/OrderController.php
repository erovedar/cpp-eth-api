<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::id();
        $orders = Order::where('buyer_id', $user)->get();
        return response()->json($orders);
    }

    public function store(Request $request)
    {
        $user = Auth::id();

        $listing = Listing::where('id', $request->listing_id)->firstOrFail();
        $order = Order::create([
            'listing_id' => $request->listing_id,
            'buyer_id' => $user,
            'seller_id' => $listing->seller_id,
            'price' => $listing->price,
        ]);

        return response()->json($order);
    }

    public function show(Request $request)
    {
        $user = Auth::id();
        $order = Order::where('user_id', $user)->first();
        return response()->json($order);
    }
}
