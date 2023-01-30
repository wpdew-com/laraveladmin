@extends('adminlte::page')

@section('plugins.summernote', true)
@section('plugins.toastr', true)



@section('title', __('app.faq'))

@section('content_header')
    <h1>{{ __('app.faq') }}</h1>
@stop

@section('content')







    <div class="row justify-content-center">


        <div class="col-md-9">
            <div class="card">

                <div class="card-header help-header">
                    <strong><h5>{{ __('app.dependencies') }}</h5></strong>
                </div>

                <div class="card-body">

                    @include('admin.faq.dependencies')
                </div>


                <!-- Example block start -->
                <div class="card-header help-header">
                    <strong><h5>{{ __('app.faq') }}</h5></strong>
                </div>

                <div class="card-body">

                    @include('admin.faq.maintab')
                </div>
                <!-- Example block end -->



                <div id="helpers" class="card-header help-header">
                    <strong><h5>{{ __('app.Helpers') }}</h5></strong>
                </div>

                <div class="card-body">

                    @include('admin.faq.helpers')
                </div>


                {{-- components --}}
                <div id="components" class="card-header help-header">
                    <strong><h5>{{ __('app.Components') }}</h5></strong>
                </div>

                <div class="card-body">

                    @include('admin.faq.components')
                </div>


            </div>
        </div>


        <div class="col-md-3">
            <div class="card sticky-top">
                <div class="card-header">
                    {{ __('app.Contents') }}
                </div>

                <div class="card-body">

                    <ol>
                        <li><a href="#dependencies">Dependencies & Plugins</a></li>
                        <li><a href="#example">Example block</a></li>
                        <li><a href="#helpers">Helpers</a>
                            <ul class="ulpanel">
                                <li><a href="#sendtelegram">SendTelegram()</a></li>
                                <li><a href="#getuserip">getUserIpAddr()</a></li>
                                <li><a href="#translate">translate()</a></li>
                                <li><a href="#esc_html">esc_html()</a></li>
                                <li><a href="#get_home_url">get_home_url()</a></li>
                                <li><a href="#get_template_directory_uri">get_template_directory_uri()</a></li>
                                <li><a href="#get_template_directory">get_template_directory()</a></li>
                            </ul>
                        </li>

                        <li><a href="#components">Components</a>
                            <ul class="ulpanel">
                                <li><a href="#x-alert">x-alert</a></li>
                                <li><a href="#x-callout">x-callout</a></li>
                            </ul>
                        </li>
                        <li>HelpBlock</li>
                        <li>HelpBlock</li>
                        <li>HelpBlock</li>
                    </ol>

                    </form>
                </div>
            </div>
        </div>










    </div>
    </div>






    @include('admin.footer')

@stop







@section('css')
    <link rel="stylesheet" href="{{get_home_url()}}core/public/css/admin_custom.css">
    <link rel="stylesheet" href="{{get_home_url()}}core/public/css/highlighter.css">
@stop

@section('js')

@include('admin.langscript')

    <script>
        @if (Session::has('success'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('success') }}");
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
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
