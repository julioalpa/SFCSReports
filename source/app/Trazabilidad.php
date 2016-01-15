<?php

namespace SFCSReports;

use Illuminate\Database\Eloquent\Model;

class Trazabilidad extends Model
{
    protected $connection = 'sfc';

    protected $table = 'Trazabilidad';

    public function ConfigLinea()
    {
        return $this->belongsTo('SFCSReports\ConfigLinea');
    }
}
