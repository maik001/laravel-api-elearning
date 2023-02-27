<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplySupport extends Model
{
    use HasFactory, UuidTrait;

    public $incrementing = false;

    protected $keyType = 'uuid';

    protected $fillable = ['description', 'user_id', 'support_id'];

    protected $table = 'reply_support';


    public function supports() {
        return $this->hasOne(Support::class);
    }

    public function users() {
        return $this->hasOne(User::class);
    }
}
