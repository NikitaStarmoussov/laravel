<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubscribersRequest;
use App\Http\Requests\UpdateSubscribersRequest;
use App\Models\Subscribers;
use App\Http\Resources\SubscribersResource;
use App\Http\Resources\SubscribersCollection;
use Illuminate\Http\Request;
use App\Services\SubscribersQuery;

class SubscribersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new SubscribersQuery();
        $queryItems = $filter->transform($request);
        //dd($queryItems, Subscribers::where([$queryItems])->get());
       if( count($queryItems) == 0){
            return new SubscribersCollection(Subscribers::paginate());
        }else{
            return new SubscribersCollection(Subscribers::where([$queryItems])->paginate());
        }

        return new SubscribersCollection(Subscribers::paginate());
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
    public function store(StoreSubscribersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscribers $subscribers, $id)
    {

        return new SubscribersResource(Subscribers::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscribers $subscribers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubscribersRequest $request, Subscribers $subscribers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscribers $subscribers)
    {
        //
    }
}
