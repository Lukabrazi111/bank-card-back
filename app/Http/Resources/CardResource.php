<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CardResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'number' => $this->masked_number,
            'expiration_year' => $this->expiration_year,
            'expiration_month' => $this->expiration_month,
            // e.g. security reason
            'security_code' => '***',
            'is_saved' => $this->is_saved,
        ];
    }
}
