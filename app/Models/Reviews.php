<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $table = 'reviews';

    protected $primaryKey = 'id';

    protected $fillable = [
        'properties_id',
        'review_name',      
        'rating',      
        'review',      
       ];

}
