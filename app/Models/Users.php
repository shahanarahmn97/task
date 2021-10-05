<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = "users_table";
    protected $fillable = [
    'id','user_name','email','user_mobile_number','password','created_at','updated_at'


];
}
