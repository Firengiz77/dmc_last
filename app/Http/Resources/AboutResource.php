<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AboutResource extends JsonResource
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
            'content_1'=>$this->content_1,
            'content_2'=>$this->content_2,
            'image'=>'https://mirf.az/'.$this->image,
            'logo' => 'https://mirf.az/'.$this->icon1,
            'date' => $this->date
      
        ];
    }
}