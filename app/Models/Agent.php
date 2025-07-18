<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{

    //protected $table="my_agents" if i waanna specify the name of the tbale

    //protected $primaryKey = "agent_id" if i wanna also change the name of the id

    //$incrementing = false can be id decrementing or non numeric primary key

    // protected $keyType = "string" swtiching to string 

    //use HasUuids; it means unique alpha numeric identifiers, in addition they can be overide by defining new unique id

    //use HasUlids 26 characters

    // public $timstamps = false if u dont want them in ur db

    //protected $dateFormat = "U"; if u wanna change the format 


    //protected $connection = "mysql" if u wanna change the connection for a specific mode


    //protected $attributes = ['options' => '[]','delayed' => false,]; if u wanna define the default value

    //preventLazyLoading(! $this->app->isProduction()); i still dont know where this might be useful
    
    use HasFactory;
}
