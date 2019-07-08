


@extends('layouts.app')

@section('content')
    @inject('faculties', 'App\Services\Faculties')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Agregar Estudiante</div>

                    <div class="card-body">
                        <form method="POST" action="personafs.store">
                            @csrf

                            

                            <div class="form-group row">
                                <label for="last_name" class="col-md-4 col-form-label text-md-right">Apellido</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                    @if ($errors->has('last_name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="faculty" class="col-md-4 col-form-label text-md-right">Facultad</label>

                                <div class="col-md-6">
                                    <select id="faculty" name="faculty_id" class="form-control{{ $errors->has('faculty_id') ? ' is-invalid' : '' }}">
                                        @foreach($faculties->get() as $index => $faculty)
                                            <option value="{{ $index }}" {{ old('faculty_id') == $index ? 'selected' : '' }}>
                                                {{ $faculty }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('faculty_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('faculty_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="career" class="col-md-4 col-form-label text-md-right">Carrera</label>

                                <div class="col-md-6">
                                    <select id="career" data-old="{{ old('career_id') }}" name="career_id" class="form-control{{ $errors->has('career_id') ? ' is-invalid' : '' }}"></select>

                                    @if ($errors->has('career_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('career_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="career" class="col-md-4 col-form-label text-md-right">Subarea</label>

                                <div class="col-md-6">
                                    <select id="subarea" data-old="{{ old('subarea_id') }}" name="subarea_id" class="form-control{{ $errors->has('subarea_id') ? ' is-invalid' : '' }}"></select>

                                    @if ($errors->has('career_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('career_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Guardar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
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
                $('#career').append("<option value=''>Selecciona una carrera</option>");

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
        alert(subarea);
        if ($.trim(subarea) != '') {
            $.get('subarea', {faculty_id: subarea}, function (careers) {

                var old = $('#career').data('old') != '' ? $('#career').data('old') : '';
                alert(careers);

                $('#subarea').empty();
                $('#subarea').append("<option value=''>Selecciona una carrera</option>");

                $.each(careers, function (index, value) {
                    $('#subarea').append("<option value='" + index + "'" + (old == index ? 'selected' : '') + ">" + value +"</option>");
                })
            });
        }
    });

            
});
</script>
@endsection
