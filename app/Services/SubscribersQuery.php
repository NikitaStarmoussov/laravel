<?php

namespace App\Services;

use illuminate\Http\Request;

class SubscribersQuery
{
    // protected $allowParams = [
    //         'phoneNumber' => ['eq'],
    //         'registrationType'=> ['eq'],
    //         'lastName'=> ['eq'],
    //         'firstName'=> ['eq'],
    //         'middleName'=> ['eq'],
    //         'organizationName'=> ['eq'],
    //         'departmentName'=> ['eq'],
    //         'country'=> ['eq'],
    //         'city'=> ['eq'],
    //         'street'=> ['eq'],
    //         'houseNumber'=> ['eq', 'lt', 'gt'],
    //         'apartmentNumber'=> ['eq', 'lt', 'gt'],
    // ];
    protected $columnMap = [
        'phoneNumber' => 'phone_number',
        'registrationType' => 'registration_type',
        'lastName' => 'last_name',
        'firstName' => 'first_name',
        'middleName' => 'middle_name',
        'organizationName' => 'organization_name',
        'departmentName' => 'department_name',
        'country' => 'country',
        'city' => 'city',
        'street' => 'street',
        'houseNumber' => 'house_number',
        'apartmentNumber' => 'apartment_number',

    ];
    // protected $operatorMap = [
    //     'eq' => '=',
    //     'lt' => '<',
    //     'lte' => '<=',
    //     'gt' => '>',
    //     'gte' => '>='
    // ];
    function transform (Request $request){
        $transformed = [];
        foreach ($this->allowParams as $param=>$operators){
            // dump($param, $operators);
            $query = $request->query($param);
            // dump($query);
            if(!isset($query)){
                continue;
            }
            $column = $this->columnMap[$param] ?? $param;

            foreach ($operators as $operator){
                if(isset($query[$operator])){

                   $transformed = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }
        return $transformed;
    }

}
?>
