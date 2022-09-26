<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory, UuidTrait;

    public $incrementing = false;

    public $timestamps = false;

    protected $keyType = 'uuid';

    protected $fillable = ['name', 'url', 'description', 'video', 'image'];


    public function modules() {
        return $this->hasOne(Module::class);
    }
}
