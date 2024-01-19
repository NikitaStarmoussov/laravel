<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BusinessResource extends JsonResource
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
                'organizationName' => $this->organization_name,
                'departmentName' => $this->department_name,
                    'phoneNumber' => $this->phone_number,
                    'country' => $this->country,
                    'city' => $this->city,
                    'street' => $this->street,
                    'houseNumber' => $this->house_number,
                    'apartmentNumber' => $this->apartment_number

        ];
    }
}
