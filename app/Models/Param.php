<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Individual;
use App\Models\Business;


class Param extends Model
{
    use HasFactory;

    protected $table = 'params';

    public function individual()
    {
        return $this->belongsTo(Individual::class);
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
