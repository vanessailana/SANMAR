<?php 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class ContactUS extends Model
{
 
public $table = 'contactus1';
 
public $fillable = ['name','email','message'];
 
}
