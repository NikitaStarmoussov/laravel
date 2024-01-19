<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBusinessRequest;
use App\Http\Requests\UpdateBusinessRequest;
use App\Http\Resources\BusinessCollection;
use App\Http\Resources\BusinessResource;
use App\Models\Business;
use App\Services\BusinessQuery;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new BusinessQuery();
        $queryItems = $filter->transform($request);
        if(count($queryItems)==0 ||$queryItems['column'] == null || $queryItems['order'] == null || $queryItems['q'] == null){

            return new BusinessCollection(Business::query()
            ->join('params', 'businesses.id', '=', 'params.id')
            ->select('businesses.*', 'params.*')
            ->get());
        }else{
            if($queryItems['q']!=null){
                return new BusinessCollection(Business::query()
                ->join('params', 'businesses.id', '=', 'params.id')
                ->where($queryItems['column'], 'LIKE', '%'.$queryItems['q'].'%')
               ->get()
            );
            }else{

                return new BusinessCollection(Business::query()
                ->join('params', 'businesses.id', '=', 'params.id')
                ->orderBy($queryItems['column'], $queryItems['order'])
                ->select('businesses.*', 'params.*')
                ->get());
            }
        }
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBusinessRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Business $business)
    {
        return new BusinessResource(Business::query()
        ->join('params', 'businesses.id', '=', 'params.id')->find($business->id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Business $business)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBusinessRequest $request, Business $business)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Business $business)
    {
        //
    }
}
