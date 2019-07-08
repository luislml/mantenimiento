@extends('layouts.app')

@section('content')
    @inject('faculties', 'App\Services\Faculties')
    <section class="content-header">
        <h1>
            Personal
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'person.updat']) !!}

                            <div class="form-group col-sm-12">
                            {!! Form::label('nombre', 'Nombre:') !!}
                            <select name="id" class="form-control">
                                <option value="">-- Seleccione al Usuario --</option>}
                                @foreach($user as $users)
                                    
                                    <option value="{{ $users->id }}">{!! $users->nombre !!}</option>
                                @endforeach
                            </select>
                            </div>

                            <div class="form-group col-sm-4">
                                    {!! Form::label('unidad', 'Unidad:') !!}
                                    <select id="faculty" name="unidad_id" class="form-control{{ $errors->has('faculty_id') ? ' is-invalid' : '' }}">
                                        @foreach($faculties->get() as $index => $faculty)
                                            <option value="{{ $index }}" {{ old('faculty_id') == $index ? 'selected' : '' }}>
                                                {{ $faculty }}
                                            </option>
                                        @endforeach
                                    </select>
                            </div>
                            
                            <div class="form-group col-sm-4">
                                    {!! Form::label('area', 'Area:') !!}
                                    <select id="career" data-old="{{ old('career_id') }}" name="area_id" class="form-control{{ $errors->has('area') ? ' is-invalid' : '' }}"></select>
                            </div>
                            
                            <div class="form-group col-sm-4">
                                    {!! Form::label('subarea', 'Sub Area:') !!}

                                    <select id="subarea" data-old="{{ old('subarea_id') }}" name="sub_area_id" class="form-control{{ $errors->has('subarea') ? ' is-invalid' : '' }}"></select>
                            </div>

                            <div class="form-group col-sm-12">
                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                <a href="{!! route('usuarios.index') !!}" class="btn btn-default">Cancel</a>
                            </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    
                        
    
                        
                    
                
        
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
    
            $('#faculty').on('change', function(){
                var faculty_id = $('#faculty').val();
        
        if ($.trim(faculty_id) != '') {
            $.get('areas', {faculty_id: faculty_id}, function (careers) {

                var old = $('#career').data('old') != '' ? $('#career').data('old') : '';
                

                $('#career').empty();
                $('#career').append("<option value=''>Selecciona Area</option>");

                $.each(careers, function (index, value) {
                    $('#career').append("<option value='" + index + "'" + (old == index ? 'selected' : '') + ">" + value +"</option>");
                })
            });
        }
    });


});
</script>
<script>
    $(document).ready(function(){
    
            $('#career').on('change', function(){
                var subarea = $('#career').val();
        if ($.trim(subarea) != '') {
            $.get('subarea', {faculty_id: subarea}, function (careers) {

                var old = $('#career').data('old') != '' ? $('#career').data('old') : '';

                $('#subarea').empty();
                $('#subarea').append("<option value=''>Selecciona Sub Area</option>");

                $.each(careers, function (index, value) {
                    $('#subarea').append("<option value='" + index + "'" + (old == index ? 'selected' : '') + ">" + value +"</option>");
                })
            });
        }
    });

            
});
</script>
@endsection