<?php

namespace App\Models;

use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function maintenances()
    {
        return $this->hasMany(Maintenance::class);
    }
}
