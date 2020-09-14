<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Dealer extends JsonResource
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
            'lastname'=>$this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
            'user_id' =>$this->user_id,
            // 'role' => $this->role,
            // 'courses' =>'/api/users/' . $this->id . '/courses'
        ];
    }
}
