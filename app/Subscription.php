<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function subscription_plan() {
        return $this->hasOne('App\SubscriptionPlans');
    }
}
