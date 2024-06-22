<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    // to able to update the columns using array
    protected $fillable = ['beds', 'baths', 'area','city','code','street','street_nr','price', ];
}
