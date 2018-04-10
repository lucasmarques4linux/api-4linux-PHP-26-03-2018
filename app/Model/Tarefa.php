<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarefa extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id', 'status', 'descricao','usuario_id'
    ];

    public function user()
    {
    	return $this->belongsTo('App\Model\User');
    }
}
