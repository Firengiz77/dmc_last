<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Program;

class ProgramResource extends JsonResource
{
    
    public function toArray($request)
    {
        return [
             'id' => $this->id,
            'name'=>$this->name,
            'image'=>'https://mirf.az/'.$this->image,
            'profession'=>$this->profession,
            'company'=>$this->company,
            'program' => Program::where('id',$this->programs_id)->first()

            

    
        ];
        
    }
}