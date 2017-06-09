<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

	protected $table = 'user_task';

    public $primaryKey = 'id';

    protected $guarded = ['id'];

}
