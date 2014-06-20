<?php

class User extends \Cartalyst\Sentry\Users\Eloquent\User {

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    public function isAdmin()
    {
        $group = Sentry::findGroupByName('Admin');
        return Sentry::getUser()->inGroup($group);
    }
}
