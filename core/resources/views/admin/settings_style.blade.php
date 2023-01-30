@extends('adminlte::page')

@section('plugins.summernote', true)
@section('plugins.toastr', true)



@section('title', __('app.Style and Scripts') )

@section('content_header')
    <h1>{{ __('app.Style and Scripts') }}</h1>
@stop

@section('content')







        <div class="row justify-content-center">


            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        {{ __('adminlte::menu.settings') }}
                    </div>

                    <div class="card-body">


                        <form method="post" action="{{ route('settings.store_style') }}" class="form-horizontal" role="form">
                            {!! csrf_field() !!}

                    <div class="row">
                        <div class="col-md-12">





                                @if(count(config('setting_fields_style', [])) )

                                    @foreach(config('setting_fields_style') as $section => $fields)
                                        <div class="card card-info">
                                            <div class="card-header">
                                                <i class="{{ Arr::get($fields, 'icon', 'fas fa-fw fa-sliders-h') }}"></i>
                                                {{ @translate('app',$fields['title']) }}
                                            </div>



                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p class="text-muted">{{ @translate('app',$fields['desc']) }}</p>
                                                        @foreach($fields['elements'] as $field)
                                                            @includeIf('admin.setting.fields.' . $field['type'] )
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- end panel for {{ $fields['title'] }} -->
                                    @endforeach

                                @endif

                                <div class="row m-b-md">
                                    <div class="col-md-12">


                                    </div>
                                </div>

                        </div>
                    </div>


























                    </div>
                </div>
            </div>




            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        {{ __('app.Status') }}
                    </div>

                    <div class="card-body">

                        <button class="btn-primary btn">
                            {{ __('app.SaveSettings') }}
                        </button>

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




