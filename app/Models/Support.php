<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory, UuidTrait;

    public $incrementing = false;

    protected $keyType = 'uuid';

    protected $fillable = ['status', 'description', 'lesson_id'];

    public $statusOptions = [
        'P' => 'Pendente, Aguardando Professor',
        'A' => 'Aguardando Aluno',
        'C' => 'Concluido'
    ];

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function lessons() {
        return $this->belongsTo(Lesson::class);
    }

    public function replies() {
        return $this->belongsTo(Reply::class);
    }
}
