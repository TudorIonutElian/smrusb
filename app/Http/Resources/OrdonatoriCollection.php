<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrdonatoriCollection extends JsonResource
{
    /**
     * @var mixed
     */
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
            'familie'               => $this->getFamilie['denumire'],
            'judet'                 => $this->getJudet['denumire'],
            'localitate'            => $this->getLocalitate['denumire'],
            'denumire'              => $this->denumire,
            'tip'                   => $this->getOrdonatorTip['denumire'],
            'dataInfiintare'        => $this->data_infiintare,
            'stare'                 => $this->stare,
            'posturi'               => $this->getNumarPosturiAprobate['total'],
            'institutii'            => $this->getInstitutii
        ];
    }
}
