<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = [
        'bloodGroup','fullName','gender','donorId','donorEmail', 'age', 'weight','phoneNumber','address','upazila','city','status','donatingDate','bloodUnit','bloodUnitSection','bloodUnitCity'
    ];

}
