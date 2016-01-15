
<div class="container-fluid">
    <div class="row">

        <div class="container col-xs-6">
            <div class="panel panel-default">
                <div class="panel-heading">Configuración - Vista Izquierda</div>
                <div class="panel-body">
                    {!! Form::open(array('route' => 'monitores_store_path', 'class' => 'form')) !!}
                    {!! Form::token() !!}
                    <?php $plantas = \SFCSReports\Planta::all();?>

                    <div class="form-group">
                        {!! Form::select('plantaVistaIzquierda', $plantas->lists('Nombre','Id'),'', [
                            'class' => 'form-control',
                            'placeholder' => 'Seleccione una planta..'
                            ]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::select('lineaVistaIzquierda',[],'', [
                            'class' => 'form-control',
                            'disabled' => 'disabled'
                            ]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::number('targetVistaIzquierda','', [
                            'class' => 'form-control',
                            'placeholder' => 'Indique el target..'
                            ]) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="container col-xs-6">
            <div class="panel panel-default">
                <div class="panel-heading">Configuración - Vista Derecha</div>
                <div class="panel-body">

                    <div class="form-group">
                        {!! Form::select('plantaVistaDerecha', $plantas->lists('Nombre','Id'),'', [
                            'class' => 'form-control',
                            'placeholder' => 'Seleccione una planta..'
                            ]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::select('lineaVistaDerecha',[],'', [
                            'class' => 'form-control',
                            'disabled' => 'disabled'
                            ]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::number('targetVistaDerecha','', [
                            'class' => 'form-control',
                            'placeholder' => 'Indique el target..'
                            ]) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container col-xs-6 col-md-offset-11">
            {!! Form::submit('Iniciar', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>


{{--Cargando las LINEAS desde las Plantas--}}

<script type="text/javascript">
    $(document).ready(function () {
        $('select[name=plantaVistaIzquierda]').change(function () {
            var id_planta = $(this).val();

            // $('select[name=cidade]').html('').append('<option value="">  Carregando...  </option>');
            $.get('/linea/dropdown/' + id_planta, function (lineas) {
                $('select[name=lineaVistaIzquierda]').empty();
                $('select[name=lineaVistaIzquierda]').prop('disabled', false);
                $('select[name=lineaVistaIzquierda]').append('<option value=' + null + '> Seleccione una linea.. </option>');

                $.each(lineas, function (key, value) {
                    $('select[name=lineaVistaIzquierda]').append('<option value=' + value.Id + '>' + value.Nombre + '</option>');
                });
            });
        });

        $('select[name=plantaVistaDerecha]').change(function () {
            var id_planta = $(this).val();

            // $('select[name=cidade]').html('').append('<option value="">  Carregando...  </option>');
            $.get('/linea/dropdown/' + id_planta, function (lineas) {
                $('select[name=lineaVistaDerecha]').empty();
                $('select[name=lineaVistaDerecha]').prop('disabled', false);
                $('select[name=lineaVistaDerecha]').append('<option value=' + null + '> Seleccione una linea.. </option>');

                $.each(lineas, function (key, value) {
                    $('select[name=lineaVistaDerecha]').append('<option value=' + value.Id + '>' + value.Nombre + '</option>');
                });
            });
        });

        $('.linea1').change(function () {
            $('.target1').prop('disabled', false);
        });
    });

</script>

