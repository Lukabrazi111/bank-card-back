<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    /** @use HasFactory<\Database\Factories\CardFactory> */
    use HasFactory;

    protected $fillable = [
        'number',
        'expiry_date',
        'security_code',
        'is_saved',
    ];

    public function expiryDate(): Attribute
    {
        return new Attribute(
            get: fn(string $value) => Carbon::parse($value)->format('m/y'),
        );
    }
}
