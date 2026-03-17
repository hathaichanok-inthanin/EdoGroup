<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
	protected $table = 'benefits';

	protected $fillable = [
    	'id', 'benefit', 'status'
    ];

    protected $primaryKey = 'id';
}
