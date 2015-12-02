
{{--<div class="page-header">
    <h1>Configurar Vistas <small>Completar los datos</small> </h1>

    <form action="{{ route('monitores_show_path')  }}" method="post">
        {{ csrf_field() }}

        {!! Form::open([]) !!}

        <?php $plantas = \SFCSReports\Planta::all();?>

        {!! Form::select('Planta', $plantas->lists('Nombre','Id')) !!}

        {!! Form::close() !!}
    </form>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="container col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    {!! Form::open() !!}
                    {!! Field::text('name') !!}
                    {!! Field::email('email', ['class' => 'email-field-class' ]) !!}
                    {!! Field::password('password') !!}
                    {!! Field::password('password_confirmation') !!}
                    {!! Form::submit('Send', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div> --}}

{!! Form::open() !!}
{!! Field::select('contact_names_value') !!}

<script>
    $('#contact_names_value').select2({
        placeholder: 'Search contacts',
        minimumInputLength: 3,
        ajax: {
            url: '/linea/dropdown/2',
            dataType: 'json',
            data: function (term, page) {
                return {
                    contact_names_value: term
                };
            },
            results: function (data, page) {
                return {results: data};
            }
        },
        tags: true
    });
</script>