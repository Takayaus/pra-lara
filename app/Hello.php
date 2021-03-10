<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hello extends Model
{
    public static function foo()
{
    return 'hello';
}

}
