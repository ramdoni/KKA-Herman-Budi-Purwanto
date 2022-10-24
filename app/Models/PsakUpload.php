<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\Psak;

class PsakUpload extends Model
{
    use HasFactory;

    protected $table = 'psak_upload';

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function psak()
    {
        return $this->hasMany(Psak::class,'psak_upload_id','id');
    }
}
