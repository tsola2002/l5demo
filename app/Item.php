<?php
/**
 * Created by PhpStorm.
 * User: isaac
 * Date: 19/10/16
 * Time: 17:44
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    public $fillable = ['title','description'];

}