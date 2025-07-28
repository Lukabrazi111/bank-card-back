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
        'expiration_year',
        'expiration_month',
        'security_code',
        'is_saved',
    ];

    protected $appends = ['masked_number'];

    public function maskedNumber(): Attribute {
        return Attribute::make(
            get: fn () => substr($this->number, -4),
        );
    }
}
