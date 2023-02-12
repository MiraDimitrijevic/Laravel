<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\FrizerResource;
use App\Http\Resources\UserResource;


class TerminResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap='termin';

    public function toArray($request)
    {
        return [
            'datum'=>$this->resource->datum,
            'vreme'=>$this->resource->vreme,
            'zakazao/la'=> new UserResource($this->resource->user),
            'zakazano kod'=> new FrizerResource($this->resource->frizer)
            

        ];
        }
}
