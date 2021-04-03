@extends('layouts.client')
@section('title') Personal Information @endsection
@section('main')
    <section id="validation">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Create New Complaint</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('complaints.store') }}">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                                <label for="generation" class="is-required">Generation</label>
                                                <select name="generation" class="custom-select @error('generation') is-invalid @enderror" id="generation">
                                                    <option value="A">Generation A</option>
                                                    <option value="B">Generation B</option>
                                                    <option value="C">Generation C</option>
                                                    <option value="D">Generation D</option>
                                                    <option value="E">Generation E</option>
                                                </select>

                                            @error('generation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="serial_number" class="is-required">Serial Number</label>
                                            <input type="tel" name="serial_number" id="serial_number" class="form-control @error('serial_number') is-invalid @enderror" >
                                            @error('serial_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="problem_date" class="is-required">When did the problem start?</label>
                                            <input name="problem_date" id="problem_date"
                                                   pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d"
                                                   class="form-control @error('problem_date') is-invalid @enderror" type="date"
                                                   aria-required="true" aria-describedby="date-format"
                                                   title="Enter a date  with dd/mm/yyyy format" />
                                            @error('problem_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="errors" class="is-required">The Expected Errors <small> (multiple select, use ctrl on your keyboard) </small> </label>
                                            <select name="errors[]" multiple class="custom-select @error('errors') is-invalid @enderror" id="error">
                                                <option value="error A">A</option>
                                                <option value="error B">B</option>
                                                <option value="error C">C</option>
                                                <option value="error D">D</option>
                                                <option value="error E">E</option>
                                            </select>
                                            @error('errors')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-1">
                                        <div class="form-group">
                                            <label class="mb-3">Device Type:</label>
                                            <div id="radio-action" class="form-inline d-flex justify-content-between">
                                                <div class="custom-control custom-radio custom-control-inline ">
                                                    <input type="radio" name="device_type" value="HP" id="type_a"
                                                           class="custom-control-input" autocomplete="off">
                                                    <label class="custom-control-label " for="type_a">HP</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="device_type" value="Lenovo" id="type_b"
                                                           class="custom-control-input" autocomplete="off">
                                                    <label class="custom-control-label " for="type_b">Lenovo</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="device_type" value="Dell" id="type_c"
                                                           class="custom-control-input" autocomplete="off">
                                                    <label class="custom-control-label" for="type_c">Dell</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="device_type" value="Mac" id="type_d"
                                                           class="custom-control-input" autocomplete="off">
                                                    <label class="custom-control-label" for="type_d">Mac</label>
                                                </div>
                                                @error('device_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <div class="form-check mt-4">
                                            <input class="custom-control-input "  name="is_urgent" type="checkbox"  id="is_urgent" >
                                            <label class="custom-control-label" for="is_urgent">My case is an Urgent Complaint</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <div class="form-group">
                                            <label for="problem_cause" class="is-required">What were you doing when the problem occurred?</label>
                                            <textarea class="form-control @error('problem_cause') is-invalid @enderror" id="problem_cause" rows="4" name="problem_cause" ></textarea>
                                            @error('problem_cause')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <button class="btn btn-primary btn-lg pull-right float-right ml-3" type="submit">Send</button>
                            <button class="btn btn-secondary btn-lg pull-right float-right" type="reset">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
        @endsection
        @section('script')
            <script src="{{asset('assets/js/wizard.js')}}"></script>
            <script>

            </script>
@endsection

