<?php

namespace SFCSReports;

use Illuminate\Database\Eloquent\Model;

class Linea extends Model
{
    protected $connection = 'sfc';

    protected $table = 'Linea';

    public function Planta()
    {
        return $this->belongsTo('SFCSReports\Planta','Planta_id');
    }

    public function ConfigLinea()
    {
        return $this->hasMany('SFCSReports\ConfigLinea','Linea_id');
    }
}
