<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
  protected $fillable = [
    'policy_expiry_date',
    'name',
    'address',
    'contact1',
    'contact2',
    'email',
    'cnglpg_kit',
    'vehicle_brand',
    'vehicle_model',
    'vehicle_registration_number',
    'vehicle_engine_number',
    'vehicle_chassis_number',
    'vehicle_rta_code',
    'vehicle_cc',
    'number_of_seats',
    'year_of_manufacture',
    'basic_idv',
    'renewal_discount',
    'renewal_idv',
    'renewal_total_premium',
    'renewal_ncb',
    'hpothecation',
    'addon_plan',
    'feedback'
  ];
}
