@extends('adminlte::page')

@section('plugins.summernote', true)
@section('plugins.toastr', true)



@section('title', __('adminlte::menu.settings'))

@section('content_header')
    <h1>{{ __('adminlte::menu.settings') }}</h1>
@stop

@section('content')




<form method="post" action="{{ route('settings.store') }}" class="form-horizontal" role="form">
    {!! csrf_field() !!}
    <div class="row">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="float-right">
                            <button class="btn-primary btn" title="{{ __('app.SaveSettings') }}">
                                {{ __('app.SaveSettings') }}
                            </button>
                            <a href="clearcache" title="{{ __('app.ClearCache') }}" class="btn-primary btn">
                                <i class="fas fa-sync"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">

            </div>


            @if (count(config('setting_fields', [])))
                @foreach (config('setting_fields') as $section => $fields)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <i class="{{ Arr::get($fields, 'icon', 'fas fa-fw fa-sliders-h') }}"></i>
                        {{ @translate('app', $fields['title']) }}
                        </div>

                        <div class="card-body">
                            <p class="text-muted">{{ @translate('app', $fields['desc']) }}
                            </p>
                            @foreach ($fields['elements'] as $field)
                                @includeIf('admin.setting.fields.' . $field['type'])
                            @endforeach
                        </div>

                    </div>

                </div>
                @endforeach
            @endif






    </div>
</form>











    </div>






    @include('admin.footer')

@stop







@section('css')
    <link rel="stylesheet" href="{{ get_home_url() }}core/public/css/admin_custom.css">
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
