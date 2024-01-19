<?php

namespace App\Services;

use illuminate\Http\Request;

class BusinessQuery
{
    protected $businessColumnMap = [
        'id' => 'businesses.id',
        'organizationName' => 'businesses.organization_name',
        'departmentName' => 'businesses.department_name',
        'phoneNumber' => 'params.phone_number',
        'country' => 'params.country',
        'city' => 'params.city',
        'street' => 'params.street',
        'houseNumber' => 'params.house_number',
        'apartmentNumber' => 'params.apartment_number',
    ];
    protected $orderMap = [
        'asc' => 'asc',
        'desc' => 'desc',
    ];


    public function transform(Request $request){
        $transformed = ['column'=>null,'order'=>"asc",'q'=>null];

        $query = $request->query();

        foreach ($query as $key => $value) {
            if($key==='q'){
                $transformed['q'] = $value;

            } else {
                $column =$this->businessColumnMap[$key] ?? null;
                $order= $this->orderMap[$value] ?? "asc";
                $transformed['column'] = $column;
                $transformed['order'] = $order;
            }
        };

        return $transformed;
    }
}
