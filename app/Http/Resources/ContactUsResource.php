<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactUsResource extends JsonResource
{
    public function __construct($resource, private array $contactUsData)
    {
        parent::__construct($resource);
    }

    public function toArray($request): array
    {
        return $this->contactUsData;
    }
}
