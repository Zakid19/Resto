<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['table_id', 'name', 'email', 'no_tlp', 'res_date', 'guest_number'];

    protected $dates = [
        'res_date'
    ];

    public function table()
    {
        return $this->belongsTo(Table::class, 'table_id', 'id');
    }

}
