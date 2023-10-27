<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'address',
        'phone_number',
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function fullName(): Attribute
    {
        return Attribute::get(fn () => $this->attributes['first_name'].' '.$this->attributes['last_name']);
    }
}
