<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SpikerResource extends JsonResource
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
            'name'=>$this->name,
            'image'=>'https://mirf.az/'.$this->image,
            'profession'=>$this->profession,
            'company'=>$this->company,
            'desc'=>$this->desc,
            'facebook' => $this->fb,
            'linkedin' => $this->linked,
            'twitter' => $this->twitter,
            'instagram' => $this->instagram,
            
            
    
        ];
    }
}