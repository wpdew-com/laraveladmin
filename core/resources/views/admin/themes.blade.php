@extends('adminlte::page')

@section('plugins.summernote', true)

@section('title', __('app.Themes') )

@section('content_header')
    <h1>{{ __('app.Themes') }}</h1>
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
            <div class="col-md-12">


                <div class="card">
                    <div class="card-header">
                        {{ __('app.Contents') }}
                        <a class="" href="#" data-widget="control-sidebar">
                            <i class="fas fa-question-circle"></i>
                        </a>
                        <div class="float-right">
                            <button class="btn-primary btn" title="{{ __('app.SaveSettings') }}">
                                {{ __('app.SaveSettings') }}
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        {{ __('app.Clear page') }}
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




