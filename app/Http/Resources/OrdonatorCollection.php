<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrdonatorCollection extends JsonResource
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
            'id'                => $this->id,
            'denumire'          => $this->denumire,
            'tip'               => $this->tip,
            'data_infiintare'   => $this->data_infiintare,
            'stare'             => $this->stare
        ];
    }
}
