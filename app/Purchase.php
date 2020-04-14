<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Purchase extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function accounttype()
    {
        return $this->belongsTo(AccountType::class, 'acc_type_id');
    }
}
