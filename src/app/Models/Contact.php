<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_id', 'full_name', 'last_name', 'first_name', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion'
    ];

    protected $appends = ['full_name'];

    public function getFullNameAttribute()
    {
        return $this->last_name . ' ' . $this->first_name;
    }

    public function scopeCategorySearch($query, $contact_id)
    {
        if (!empty($contact_id)){
            $query->where('contact_id', $contact_id);
        }
    }

    public function scopeKeywordSearch($query, $keyword)
    {
        if (!empty($keyword)){
            $query->where('full_name', 'Like', '%' . $keyword . '%');
        }
    }
}
