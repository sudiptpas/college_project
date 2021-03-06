<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	protected $primaryKey = 'user_id';
	protected $fillable = array('username','password','employee_id','email','status');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function users(){
		return $this->belongsTo('Company');
	}
	public function permission(){
		$user = $this->find(Auth::user()->user_id);
		$role = Role::find($user->role_id);
		return $role->permission;
	}

}
