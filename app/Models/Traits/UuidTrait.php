<?php 
namespace App\Models\Traits;
use Illuminate\Support\Str;

trait UuidTrait {
    // para utilizar o uuid é preciso sempre quando estivar criando um usuario setar o tipo uuid
    public static function booted() {
        static::creating(function ($model) {
            $model->id = (String) Str::uuid();
        });
    }
}

?>