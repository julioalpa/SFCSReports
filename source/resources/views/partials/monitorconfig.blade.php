
<div class="container-fluid">
    <div class="row">
        <div class="container col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">Configuración</div>
                <div class="panel-body">
                    {!! Form::open() !!}
                        <?php $plantas = \SFCSReports\Planta::all();?>

                    <div class="form-group">
                        {!! Form::select('planta', $plantas->lists('Nombre','Id'),'', [
                            'class' => 'form-control',
                            'placeholder' => 'Seleccione una planta..'
                            ]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::select('linea',[],'', [
                            'class' => 'form-control',
                            'disabled' => 'disabled'
                            ]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::number('target','', [
                            'class' => 'form-control',
                            'disabled' => 'disabled'
                            ]) !!}
                    </div>

                    {!! Form::submit('Iniciar', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>


{{--Cargando las LINEAS desde las Plantas--}}

<script type="text/javascript">
    $(document).ready(function () {
        $('select[name=planta]').change(function () {
            var id_planta = $(this).val();

            // $('select[name=cidade]').html('').append('<option value="">  Carregando...  </option>');
            $.get('/linea/dropdown/' + id_planta, function (lineas) {
                $('select[name=linea]').empty();
                $('select[name=linea]').prop('disabled', false);
                $('select[name=linea]').append('<option value=' + null + '> Seleccione una linea.. </option>');

                $.each(lineas, function (key, value) {
                    $('select[name=linea]').append('<option value=' + value.Id + '>' + value.Nombre + '</option>');
                });
            });
        });

        $('.linea').change(function () {
            $('.target').prop('disabled', false);
        });
    });

</script>

