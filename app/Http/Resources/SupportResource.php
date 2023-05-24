<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SupportResource extends JsonResource
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
            'link'=>$this->link,
            'image'=>'https://mirf.az/'.$this->image,
            'desc'=>$this->desc,
            'title'=>$this->title,
         
            
            
    
        ];
    }
}