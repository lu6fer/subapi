<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    public function subscription() {
        return $this->belongsTo('App\Subscription');
    }
}
