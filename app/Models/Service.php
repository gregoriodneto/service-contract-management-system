<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        "service_provider_id",
        "name",
        "phone",
        "address",
    ];

    public function provider()
    {
        return $this->belongsTo(ServiceProvider::class, "service_provider_id");
    }

    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }
}
