<?php

namespace App\Http\Controllers;

use App\Http\Requests\CardRequest;
use App\Http\Resources\CardResource;
use App\Models\Card;

class CardController extends Controller
{
    public function index()
    {
        // We could add here if card is belongs to user.
        $cards = Card::where('is_saved', true)->limit(2)->get();

        return response()->json([
            'status' => 'success',
            'data' => CardResource::collection($cards),
        ]);
    }

    public function store(CardRequest $request)
    {
        $validated = $request->validated();

        $card = Card::create($validated);

        return response()->json([
            'status' => 'success',
            'card' => new CardResource($card),
        ]);
    }
}
