<?php

namespace App;

use App\Traits\StudentActions;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use StudentActions;
}
