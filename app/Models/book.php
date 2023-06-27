<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class book extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function auther(): BelongsTo
    {
        return $this->belongsTo(auther::class,'auther_id','id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(category::class);
    }

    public function publisher(): BelongsTo
    {
        return $this->belongsTo(publisher::class);
    }



}
