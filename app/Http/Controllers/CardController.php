<?php

namespace App\Http\Controllers;

use App\Http\Resources\CardResource;
use App\Models\Card;
use Carbon\Carbon;

class CardController extends Controller
{
    public function index()
    {
        // We could add here if card is belongs to user.
        $cards = Card::where('is_saved', true)->get();

        return response()->json([
            'status' => 'success',
            'data' => CardResource::collection($cards),
        ]);
    }

    public function store()
    {
        // save card in database using custom form request
    }
}
