<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Morilog\Jalali\Jalalian;
use const Grpc\STATUS_OK;

class SalonResource extends JsonResource
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
            'name' => $this->name,
            'address' => $this->address,
            'tel' => $this->tel,
            'postcode' => $this->postcode,
            'establish' => Jalalian::fromDateTime($this->establish,)->format('Y/m'),
            'status' => $this->status,
            'start' => $this->start,
            'finish' => $this->finish,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'breaks' => $this->breaks,
        ];
    }
}
