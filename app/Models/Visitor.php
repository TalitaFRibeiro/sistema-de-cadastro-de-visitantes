<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Visitor extends Model
{
    use HasFactory;
    protected $table = 'visitors';
    protected $fillable = [
        'name',
        'documento_numero',
        'documento_expedidor',
        'cpf',
        'created_by',
        'updated_by'

    ];
    public function createdBy(): belongsTo
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
    public function updatedBy(): belongsTo
    {
        return $this->belongsTo(User::class,'updated_by','id');
    }
}

