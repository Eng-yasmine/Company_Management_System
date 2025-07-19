<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /** @use HasFactory<\Database\Factories\ContactFactory> */
    use HasFactory;

   protected $table = 'contacts';

    protected $PrimaryKey = 'id';

    protected $KeyType = 'integer';

    protected $guarded = ['id'];

   ## const UPLOADPATH ='images/';

  ##  const UPLOADFILES = [];

    ## public $incrementing = true ;

   ## public $timestamps = true ;



}
