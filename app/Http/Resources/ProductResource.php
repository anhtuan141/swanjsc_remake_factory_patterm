<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name_vi' => $this->name_vi,
            'name_en' => $this->name_en,
            'alias' => $this->alias,
            'image' => $this->image,
            'image_2' => $this->image_2,
            'image_3' => $this->image_3,
            'supplier_id' => $this->supplier_id,
            'category_id' => $this->category_id,
            'farming_area' => $this->farming_area,
            'product_size' => $this->product_size,
            'packing_standard' => $this->packing_standard,
            'summary' => $this->summary,
            'status' => $this->status,
        ];
    }
}
