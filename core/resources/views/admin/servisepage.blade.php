@extends('adminlte::page')

@section('plugins.summernote', true)

@section('title', __('app.Servise pages') )

@section('content_header')
    <h1>{{ __('app.Servise pages') }}</h1>
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




    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">


                <div class="card">
                    <div class="card-header">
                        {{ __('app.Contents') }}
                        <a class="" href="#" data-widget="control-sidebar">
                            <i class="fas fa-question-circle"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        {{ __('app.Create Only Migration') }}
                        {{-- createartisatmigrate --}}
                        <form action="{{ route('createartisatmigrate') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">{{ __('app.Migration Name') }}</label>
                                <input type="text" class="form-control" name="name" value="">
                            </div>
                            <div class="form-group">
                                <label for="">{{ __('app.Migration Table') }}</label>
                                <input type="text" class="form-control" name="table" value="">
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('app.Create') }}</button>
                        </form>
                    </div>





                </div>


            </div>





            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        {{ __('app.Settings') }}
                    </div>
                    <div class="card-body">
                        {{ __('app.Create Controller or Model') }}

                        {{-- createartisatcontrollermodel --}}
                        <form action="{{ route('createartisatcontrollermodel') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">{{ __('app.Model Name') }}</label>
                                <input type="text" class="form-control" name="model" value="">
                            </div>
                            <div class="form-group">
                                <label for="">{{ __('app.Controller Name') }}</label>
                                <input type="text" class="form-control" name="controller" value="">
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('app.Create') }}</button>
                        </form>
                    </div>




                </div>
            </div>


            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        {{ __('app.Create Admin Blade template') }}
                        {{-- createadminblade --}}
                        <form action="{{ route('createadminblade') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">{{ __('app.Blade Name') }} <small>( php artisan make:adminview NameView )</small></label>
                                <input type="text" class="form-control" name="name" value="">
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('app.Create') }}</button>
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        {{ __('app.Create Component') }}
                        {{-- createcomponent --}}
                        <form action="{{ route('createcomponent') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">{{ __('app.Component Name') }}</label>
                                <input type="text" class="form-control" name="name" value="">
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('app.Create') }}</button>
                        </form>
                    </div>
                </div>
            </div>







            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        {{ __('app.Settings') }}
                    </div>
                    <div class="card-body">

                        <a href="artisatkeygenerate" class="btn btn-primary btn-block">
                            {{ __('app.Artisan key generate') }}
                        </a>

                        <a href="clearcache" title="{{ __('app.ClearCache') }}" class="btn btn-primary btn-block">
                            <i class="fas fa-sync"></i> {{ __('app.ClearCache') }}
                        </a>



{{--

<br>
<hr/>
<x-alert type="danger" message="x-alert"/>
<x-callout type="danger" message="x-callout"/>
--}}

                    </div>
                </div>
            </div>


        </div>
    </div>





    @include('admin.footer')

@stop







@section('css')
    <link rel="stylesheet" href="{{get_home_url()}}core/public/css/admin_custom.css">
@stop

@section('js')

@include('admin.langscript')

    <script>



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




