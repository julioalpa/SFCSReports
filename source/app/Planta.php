<?php

namespace SFCSReports;

use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
    protected $connection = 'sfc';

    protected $table = 'Planta';

    public function Linea()
    {
        return $this->hasMany('SFCSReports\Linea','Planta_id');
    }
}
