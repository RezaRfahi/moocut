<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Morilog\Jalali\Jalalian;

class UserResource extends JsonResource
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
            'email' => $this->email,
            'salon_id' => $this->salon_id,
            'is_barber' => $this->is_barber,
            'phone' => $this->phone,
            'nation_code' => $this->nation_code,
            'is_admin' => $this->is_admin,
            'birthday' => Jalalian::fromDateTime($this->birthday)->format('Y/m/d'),
            'vote' => $this->vote,
            'address' => $this->address,
            'created_at' => Jalalian::fromDateTime($this->created_at)->format('Y/m/d H:i:s'),
            'updated_at' => Jalalian::fromDateTime($this->updated_at)->format('Y/m/d H:i:s'),
        ];
    }
}
