<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IndividualResource extends JsonResource
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
            'firstName' => $this->first_name,
            'lastName' => $this->last_name,
            'middleName' => $this->middle_name,
                'phoneNumber' => $this->params->phone_number,
                'country' => $this->params->country,
                'city' => $this->params->city,
                'street' => $this->params->street,
                'houseNumber' => $this->params->house_number,
                'apartmentNumber' => $this->params->apartment_number
        ];
    }
}
