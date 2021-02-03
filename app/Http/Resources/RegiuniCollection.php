<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RegiuniCollection extends JsonResource
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
            'idRegiune'         => $this->id,
            'denumireRegiune'   => $this->denumire,
            'judete'            => $this->getJudete
        ];
    }
}
