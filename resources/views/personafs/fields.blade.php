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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('personafs.index') !!}" class="btn btn-default">Cancel</a>
</div>
