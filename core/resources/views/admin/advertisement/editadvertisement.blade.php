@extends('adminlte::page')

@section('plugins.summernote', true)

@section('title', __('app.Edit advertisement') )

@section('content_header')
    <h1>{{ __('app.Edit') }}</h1>
@stop




@section('content')

{{-- adminlte add right-sidebar start --}}
<aside class="control-sidebar control-sidebar-dark help-sidebar" style="display: block;">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>{{ __('app.Help') }}</h5>
        <p>{{ __('app.Locale Codes') }} - <a href="https://wpdew.com/plyushki/html-css/windows-locale-codes-sortable-list/" target="_blank">{{ __('app.read dock') }}</a></p>
    </div>
</aside>
{{-- adminlte add right-sidebar end --}}


@php
$ads = $data['ads'];
//var_dump($ads);
@endphp

{{-- form post advertisement.update with id --}}

<form action="{{ route('advertisement.update', $ads->id) }}" method="POST" enctype="multipart/form-data">

    @csrf

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-9">


                <div class="card">
                    <div class="card-header">
                        <a class="" href="#" data-widget="control-sidebar">
                            <i class="fas fa-question-circle"></i>
                        </a>
                    </div>
                    <div class="card-body">



                            <div class="form-group">
                                <label for="title">{{ __('app.Title') }}</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $ads->title }}">
                            </div>

                            <div class="form-group">
                                <label for="description">{!! __('app.Description') !!}</label>
                                <textarea class="form-control" id="description" name="description" rows="3">{{ $ads->description }}</textarea>
                            </div>

                            {{-- date start and date end --}}
                            <div class="row">

                                <div class="form-group col-md-6">
                                    {{-- SM size with single date/time config --}}
                                    @php
                                    $config_start = [
                                        "singleDatePicker" => true,
                                        "showDropdowns" => true,
                                        "startDate" => $ads->date_start,
                                        "minYear" => 2000,
                                        "maxYear" => "js:parseInt(moment().format('YYYY'),10)",
                                        "timePicker" => true,
                                        "timePicker24Hour" => true,
                                        "timePickerSeconds" => true,
                                        "cancelButtonClasses" => "btn-danger",
                                        "locale" => [
                                            "format" => "YYYY-MM-DD HH:mm:ss",
                                            "separator" => " - ",
                                            "applyLabel" =>  __('app.Apply'),
                                            "cancelLabel" => __('app.Cancel'),
                                        ],
                                    ];
                                    @endphp
                                    <x-adminlte-date-range name="date_start" label="{{ __('app.Date start') }}" :config="$config_start">
                                        <x-slot name="appendSlot">
                                            <div class="input-group-text bg-dark">
                                                <i class="fas fa-calendar-day"></i>
                                            </div>
                                        </x-slot>
                                    </x-adminlte-date-range>
                                </div>

                                <div class="form-group col-md-6">
                                    {{-- SM size with single date/time config --}}
                                    @php
                                    $config_end = [
                                        "singleDatePicker" => true,
                                        "showDropdowns" => true,
                                        "startDate" => $ads->date_end,
                                        "minYear" => 2000,
                                        "maxYear" => "js:parseInt(moment().format('YYYY'),10)",
                                        "timePicker" => true,
                                        "timePicker24Hour" => true,
                                        "timePickerSeconds" => true,
                                        "cancelButtonClasses" => "btn-danger",
                                        "locale" => [
                                            "format" => "YYYY-MM-DD HH:mm:ss",
                                            "separator" => " - ",
                                            "applyLabel" =>  __('app.Apply'),
                                            "cancelLabel" => __('app.Cancel'),
                                        ],
                                    ];
                                    @endphp
                                    <x-adminlte-date-range name="date_end" label="{{ __('app.Date end') }}" :config="$config_end">
                                        <x-slot name="appendSlot">
                                            <div class="input-group-text bg-dark">
                                                <i class="fas fa-calendar-day"></i>
                                            </div>
                                        </x-slot>
                                    </x-adminlte-date-range>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="link">{{ __('app.Link') }}</label>
                                    <input type="text" class="form-control" id="link" name="link" value="{{ $ads->link }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="alt">{{ __('app.Alt') }}</label>
                                    <input type="text" class="form-control" id="alt" name="alt" value="{{ $ads->alt }}">
                                </div>
                            </div>

                            <div class="row">
                            <div class="form-group col-md-4">
                                <label for="id_pos">{{ __('app.position') }}</label>
                                <select class="form-control" id="id_pos" name="id_pos">
                                    <option value="1_1" {{ $ads->id_pos == '1_1' ? 'selected' : '' }}>{{ __('app.Home 1') }}</option>
                                    <option value="1_2" {{ $ads->id_pos == '1_2' ? 'selected' : '' }}>{{ __('app.Home 2') }}</option>
                                    <option value="1_3" {{ $ads->id_pos == '1_3' ? 'selected' : '' }}>{{ __('app.Home 3') }}</option>
                                    <option value="1_4" {{ $ads->id_pos == '1_4' ? 'selected' : '' }}>{{ __('app.Home 4') }}</option>
                                    <option value="1_5" {{ $ads->id_pos == '1_5' ? 'selected' : '' }}>{{ __('app.Home 5') }}</option>

                                    <option value="2_1" {{ $ads->id_pos == '2_1' ? 'selected' : '' }}>{{ __('app.Category 1') }}</option>
                                    <option value="2_2" {{ $ads->id_pos == '2_2' ? 'selected' : '' }}>{{ __('app.Category 2') }}</option>
                                    <option value="2_3" {{ $ads->id_pos == '2_3' ? 'selected' : '' }}>{{ __('app.Category 3') }}</option>
                                    <option value="2_4" {{ $ads->id_pos == '2_4' ? 'selected' : '' }}>{{ __('app.Category 4') }}</option>
                                    <option value="2_5" {{ $ads->id_pos == '2_5' ? 'selected' : '' }}>{{ __('app.Category 5') }}</option>

                                    <option value="3_1" {{ $ads->id_pos == '3_1' ? 'selected' : '' }}>{{ __('app.Post 1') }}</option>
                                    <option value="3_2" {{ $ads->id_pos == '3_2' ? 'selected' : '' }}>{{ __('app.Post 2') }}</option>
                                    <option value="3_3" {{ $ads->id_pos == '3_3' ? 'selected' : '' }}>{{ __('app.Post 3') }}</option>
                                    <option value="3_4" {{ $ads->id_pos == '3_4' ? 'selected' : '' }}>{{ __('app.Post 4') }}</option>
                                    <option value="3_5" {{ $ads->id_pos == '3_5' ? 'selected' : '' }}>{{ __('app.Post 5') }}</option>

                                    <option value="4_1" {{ $ads->id_pos == '4_1' ? 'selected' : '' }}>{{ __('app.Page 1') }}</option>
                                    <option value="4_2" {{ $ads->id_pos == '4_2' ? 'selected' : '' }}>{{ __('app.Page 2') }}</option>
                                    <option value="4_3" {{ $ads->id_pos == '4_3' ? 'selected' : '' }}>{{ __('app.Page 3') }}</option>
                                    <option value="4_4" {{ $ads->id_pos == '4_4' ? 'selected' : '' }}>{{ __('app.Page 4') }}</option>
                                    <option value="4_5" {{ $ads->id_pos == '4_5' ? 'selected' : '' }}>{{ __('app.Page 5') }}</option>
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="link">{{ __('app.views') }}</label>
                                <input type="text" class="form-control" id="views" name="views" value="{{ $ads->views }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="link">{{ __('app.clicks') }}</label>
                                <input type="text" class="form-control" id="click" name="click" value="{{ $ads->click }}">
                            </div>

                            </div>


                            <div class="form-group">
                                <label for="userfile">{{ __('app.userfile') }}</label>
                                <textarea id="my-editor" name="userfile" class="form-control">{!! $ads->userfile !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="userfile_mobile">{{ __('app.userfile_mobile') }}</label>
                                <textarea id="my-editor2" name="userfile_mobile" class="form-control">{!! $ads->userfile_mobile !!}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('app.Save') }}</button>


                    </div>
                </div>


            </div>





            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        {{ __('app.Settings') }}
                    </div>
                    <div class="card-body">


                        <button class="btn-primary btn">
                            {{ __('app.Save') }}
                        </button>
                    </div>
                </div>
            </div>


        </div>
    </div>

</form>



    @include('admin.footer')

@stop







@section('css')
    <link rel="stylesheet" href="{{get_home_url()}}core/public/css/admin_custom.css">
@stop

@section('js')

@include('admin.langscript')

<script>

    CKEDITOR.replace('description', options);
    CKEDITOR.replace('my-editor', options);
    CKEDITOR.replace('my-editor2', options);





@if(Session::has('success'))
    toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session('success') }}");
@endif
@if ($errors->any())
     @foreach ($errors->all() as $error)
     toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true,
            "hideDuration": "2000",
        }
    toastr.error("{{ $error }}");
    @endforeach
@endif


    function changeLanguage_(lang) {
        $.ajax({
            url: '/changeLanguage',
            type: 'POST',
            data: {
                lang: lang
            },
            success: function(data) {
                window.location.reload();
            }
        });
    }


    </script>
@stop




