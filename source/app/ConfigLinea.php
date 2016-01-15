<?php

namespace SFCSReports;

use Illuminate\Database\Eloquent\Model;

class ConfigLinea extends Model
{
    protected $connection = 'sfc';

    protected $table = 'ConfigLinea';

    public function linea()
    {
        return $this->belongsTo('SFCSReports\Linea');
    }

    public function trazabilidad()
    {
        return $this->hasMany('SFCSReports\Trazabilidad', 'ConfigLinea_id');
    }

    public function trazabilidadMotorola()
    {
        return $this->hasMany('SFCSReports\TrazabilidadMotorola','ConfigLinea_id');
    }

    public function modelo()
    {
        return $this->belongsTo('SFCSReports\Modelo');
    }
}
