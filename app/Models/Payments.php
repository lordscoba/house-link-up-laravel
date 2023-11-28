<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',    
        'order_id',
        'amount',
        'email',
        'type',
        'success',
        'processing',
        'failed',
        'created',
        'duration',
        'expired',
        'name',
        'authorization_url',
        'access_code',
        'status',
        'has_expired',
        'reference',
       ];
}