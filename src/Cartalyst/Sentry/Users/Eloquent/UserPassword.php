<?php

namespace Cartalyst\Sentry\Users\Eloquent;

use Illuminate\Database\Eloquent\Model;

class UserPassword extends Model
{
    protected $table = 'user_passwords';

    protected $fillable = ['user_id', 'password'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
