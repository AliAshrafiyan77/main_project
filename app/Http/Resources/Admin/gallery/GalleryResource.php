<?php

namespace App\Http\Resources\Admin\gallery;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GalleryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'format' => $this->format,
            'size' => $this->size,
            'url' => $this->url,
            'path' => $this->path,
            'user' => UserGalleryResource::make($this->user),

        ];
    }
}
