<?php

namespace SFCSReports;

use Illuminate\Database\Eloquent\Model;

class TrazabilidadMotorola extends Model
{
    protected $connection = 'sfc';

    protected $table = 'TrazabilidadMotorola';

    public function configLinea()
    {
        return $this->belongsTo('SFCSReports\ConfigLinea');
    }
}
