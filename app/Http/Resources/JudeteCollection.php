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
            'numarOrdonatori'       => count($this->getOrdonatori),
            'localitati'            => $this->getLocalitati,
            'data'                  => $this->data_creare,
            'stare'                 => $this->stare
        ];
    }
}
