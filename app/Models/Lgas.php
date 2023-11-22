<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lgas extends Model
{
    use HasFactory;
    protected $table = 'lgas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'lga',    
        'state_id',    
       ];
}