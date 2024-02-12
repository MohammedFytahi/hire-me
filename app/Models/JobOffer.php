<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'user_id', // Correction ici
        'description',
        'required_skills',
        'contract_type',
        'location',
        'company_id',
    ];
    

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
