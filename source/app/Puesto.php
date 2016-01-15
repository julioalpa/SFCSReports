<?php

namespace SFCSReports;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    protected $connection = 'sfc';

    protected $table = 'Puesto';

    public function CodigoPuesto()
    {
        return $this->hasMany('SFCSReports\CodigoPuesto','Puesto_id');
    }
}
