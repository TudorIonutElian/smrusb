<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class RegiuniCollection extends ResourceCollection
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
            'judeteRegiune'     => $this->getJudete
            ];
    }
}
