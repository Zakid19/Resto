<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReservationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'table_id' => $this->table->name,
            'name' => $this->name,
            'email' => $this->email,
            'no_tlp' => $this->no_tlp,
            'guest_number' => $this->guest_number,
            'res_date' => $this->res_date
        ];
    }
}
