<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FamiliiOcupationaleCollection extends JsonResource
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
            'denumire'              => $this->denumire,
            'ordonatori'            => $this->getOrdonatori,
            'data'                  => $this->data_creare,
            'stare'                 => $this->stare
        ];
    }
}
