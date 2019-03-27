<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function presentYear()
    {
      return substr($this->details, 9, 4);
    }
}
