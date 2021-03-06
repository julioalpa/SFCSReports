<?php

namespace SFCSReports\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use SFCSReports\Http\Requests;
use SFCSReports\Trazabilidad;

class TrazabilidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param $hr
     * @param $lineaId
     * @return mixed
     */
    public function getProductionByLine($hr, $lineaId)
    {
        $dateBegin = date('Y-m-d');
        $dateEnd = date('Y-m-d');

        if ($hr < 15)
        {
            $dateBegin .= " 06:00:00";
            $dateEnd .= " 14:59:59";
        }
        else
        {
            $dateBegin .= " 15:00:01";
            $dateEnd .= " 23:59:59";
        }

        $TrazabilidadByLine = Trazabilidad::selectRaw('COUNT(Trazabilidad.Codigo1) as Total, Modelo.Nombre')
            ->where([
                'Linea.Id' => $lineaId,
                'CodigoPuesto.Newsan' => true
            ])
            ->whereBetween('Trazabilidad.FechaHora',array($dateBegin, $dateEnd))
            ->join('ConfigLinea','ConfigLinea.Id','=','Trazabilidad.ConfigLinea_id')
            ->join('Modelo','Modelo.Id','=','ConfigLinea.Modelo_id')
            ->join('Linea','Linea.Id','=','ConfigLinea.Linea_id')
            ->join('CodigoPuesto','CodigoPuesto.Id','=','Trazabilidad.CodigoPuesto1_id')
            ->groupBy('Modelo.Nombre')
            ->get();

        return Response::make($TrazabilidadByLine);
    }

    /**
     * @param $hr
     * @param $plantaId
     * @return mixed
     */
    public function getProductionByPlant($hr, $plantaId)
    {
        $dateBegin = date('Y-m-d');
        $dateEnd = date('Y-m-d');

        if ($hr < 15)
        {
            $dateBegin .= " 06:00:00";
            $dateEnd .= " 14:59:59";
        }
        else
        {
            $dateBegin .= " 15:00:01";
            $dateEnd .= " 23:59:59";
        }

        $TrazabilidadByLine = Trazabilidad::selectRaw('COUNT(Trazabilidad.Codigo1) as Total, Modelo.Nombre')
            ->where([
                'Planta.Id' => $plantaId,
                'CodigoPuesto.Newsan' => true
            ])
            ->whereBetween('Trazabilidad.FechaHora',array($dateBegin, $dateEnd))
            ->join('ConfigLinea','ConfigLinea.Id','=','Trazabilidad.ConfigLinea_id')
            ->join('Modelo','Modelo.Id','=','ConfigLinea.Modelo_id')
            ->join('Linea','Linea.Id','=','ConfigLinea.Linea_id')
            ->join('Planta','Planta.Id','=','Linea.Planta_id')
            ->join('CodigoPuesto','CodigoPuesto.Id','=','Trazabilidad.CodigoPuesto1_id')
            ->groupBy('Modelo.Nombre')
            ->get();

        return Response::make($TrazabilidadByLine);
    }
}
