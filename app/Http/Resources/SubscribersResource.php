<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubscribersResource extends JsonResource
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
            'phoneNumber' => $this->phone_number,
            'registrationType' => $this->registration_type,
            'lastName' => $this->last_name,
            'firstName' => $this->first_name,
            'middleName' => $this->middle_name,
            'organizationName' => $this->organization_name,
            'departmentName' => $this->department_name,
            'country' => $this->country,
            'city' => $this->city,
            'street' => $this->street,
            'houseNumber' => $this->house_number,
            'apartmentNumber' => $this->apartment_number
        ];
    }
};
