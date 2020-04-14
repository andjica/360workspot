<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Account;

class AccountType extends Model
{
    protected $guarded = [];

    public function accounts()
    {
        return $this->hasMany(Account::class, 'account_type_id');
    }

    public function purchase()
    {
        return $this->hasMany(Purchase::class, 'acc_type_id');
    }
}
