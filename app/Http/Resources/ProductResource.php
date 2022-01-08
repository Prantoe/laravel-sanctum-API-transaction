<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'id' => $this->id,
            'supplier_id' => $this->supplier_id,
            'name' => $this->name,
            'image' => $this->image,
            'price' => $this->price,
            'is_promo' => $this->is_promo,
            'promo' => $this->promo,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
