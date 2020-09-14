<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description'=>$this->description,
            'price' => $this->price,
            'stock' => $this->stock,
            'store_id'=>$this->user_id,
            'offer_id'=>$this->user_id,
            'order_id'=>$this->user_id,
            'category_id'=>$this->user_id,

        ];
    }
}
