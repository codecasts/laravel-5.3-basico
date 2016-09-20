<?php

namespace Charlie;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = ['name', 'birthdate', 'special_customer', 'city', 'state'];

    protected $casts = [
        'special_customer' => 'boolean',
        'birthdate' => 'date',
    ];

    public function purchases()
    {
        return $this->hasMany(Puchases::class);
    }
}
