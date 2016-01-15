<?php

namespace SFCSReports;

use Illuminate\Database\Eloquent\Model;

class CodigoPuesto extends Model
{
    protected $connection = 'sfc';

    protected $table = 'CodigoPuesto';

    public function Puesto()
    {
        return $this->belongsTo('SFCSReports\Puesto');
    }
}
