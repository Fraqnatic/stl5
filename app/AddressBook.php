<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AddressBook extends Model {

    protected $table = 'address_book';
    
    protected $fillable = [
      'name',
      'address',
      'mail',
      'appointment',
      'phone'
    ];

}
