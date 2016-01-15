<?php

namespace SFCSReports;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $connection = 'sfc';

    protected $table = 'Modelo';

    public function ConfigLinea()
    {
        return $this->hasMany('SFCSReports\ConfigLinea','Modelo_id');
    }
}
