<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContentResource extends JsonResource
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
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'location' => $this->location,
            'website' => $this->website,
            'education' => $this->education,
            'skills' => $this->skills,
            'profile' => $this->profile,
            'experience' => $this->experience,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
