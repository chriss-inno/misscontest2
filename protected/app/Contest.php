<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
    //
    public function contestants()
    {
        return $this->hasMany('\App\Contestant','contest_id','id');
    }

    public function contestantsMostViewed()
    {
        return $this->hasMany('\App\Contestant','contest_id','id')->orderBy('hints','Desc')->take(5);
    }
}
