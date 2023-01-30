@extends('adminlte::page')

@section('plugins.summernote', true)
@section('plugins.toastr', true)



@section('title', __('app.AddUser') )

@section('content_header')
    <h1>{{ __('app.AddUser') }}</h1>
@stop

@section('content')







        <div class="row justify-content-center">


            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        {{ __('app.AddUser') }}
                    </div>

                    <div class="card-body">




                        <form method="post" action="/adduseradd" class="form-horizontal" role="form">
                            {!! csrf_field() !!}

                    <div class="row">
                        <div class="col-md-12">



                @csrf
                <div class="form-group">
                    <label for="name">{{ __('app.Name') }}</label>
                    <input type="text" class="form-control" name="name" value="" placeholder="{{ __('app.EnterName') }}">
                </div>
                <div class="form-group">
                    <label for="email">{{ __('app.Email') }}</label>
                    <input type="text" class="form-control" name="email" value="" placeholder="{{ __('app.EnterEmail') }}">
                </div>
                <div class="form-group">
                    <label for="password">{{ __('app.Password') }}</label>
                    <input type="password" class="form-control" name="password" placeholder="{{ __('EnterPassword') }}">
                </div>

                <div class="form-group">
                    <label for="lang_code">{{ __('app.lang_code') }}</label>
                    <select name="lang_code" class="form-control">
                        @foreach($data['language'] as $lang)
                            <option value="{{ $lang->code }}">{{ $lang->name }}</option>
                        @endforeach

                    <!--
                        <option value="en">{{ __('app.en') }}</option>
                        <option value="ru">{{ __('app.ru') }}</option>
                        <option value="uk">{{ __('app.uk') }}</option>
                        <option value="pl">{{ __('app.pl') }}</option>
                    -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="role">{{ __('app.Role') }}</label>
                    <select name="role" class="form-control">
                            <option value="superadmin">{{ __('app.superadmin') }}</option>
                            <option value="admin">{{ __('app.admin') }}</option>
                            <option value="editor">{{ __('app.editor') }}</option>
                            <option value="moderator">{{ __('app.moderator') }}</option>
                            <option value="user" selected>{{ __('app.user') }}</option>
                            <option value="banned">{{ __('app.banned') }}</option>
                            <option value="blocked">{{ __('app.blocked') }}</option>
                    </select>
                </div>




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




