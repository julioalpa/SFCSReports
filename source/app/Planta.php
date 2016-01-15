<?php

namespace SFCSReports;

use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
    /**
     * @var string | Dato de conexi�n
     */
    protected $connection = 'sfc';

    /**
     * @var string | Nombre de la tabla
     */
    protected $table = 'Planta';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany | Lineas vinculadas con la planta
     */
    public function linea()
    {
        return $this->hasMany('SFCSReports\Linea','Planta_id');
    }
}
