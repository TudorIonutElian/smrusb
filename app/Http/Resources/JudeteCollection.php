<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JudeteCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                    => $this->id,
            'denumireJudet'         => $this->denumire,
            'denumireRegiune'       => $this->getRegiune->denumire,
            'localitati'            => $this->getLocalitati
        ];
    }
}
