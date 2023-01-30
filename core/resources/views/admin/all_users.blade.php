@extends('adminlte::page')

@section('title', __('adminlte::menu.all_users') )

@section('content_header')
    <h1>{{ __('adminlte::menu.all_users') }}</h1>
@stop

@section('content')





    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('adminlte::menu.all_users') }}
                    </div>

                    <div class="card-body">


                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="d-none d-lg-table-cell">{{ __('app.Id') }}</th>
                                <th>{{ __('app.Name') }}</th>
                                <th class="d-none d-lg-table-cell">{{ __('app.Email') }}</th>
                                <th>{{ __('app.Role') }}</th>
                                <th width="280px">{{ __('app.Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['users'] as $users)
                                <tr>
                                    <td class="d-none d-lg-table-cell">{{ $users->id }}</td>
                                    <td>{{ $users->name }}</td>
                                    <td class="d-none d-lg-table-cell">{{ $users->email }}</td>
                                    <td>{{ __('app.'. $users->role .'') }}</td>
                                    <td>
                                        <form action="{{ route('delite_user',$users->id) }}" method="Post">

                                            @csrf

                                            <?php if($users->id != '1'){ ?>
                                            <x-adminlte-button icon="fas fa-trash" title="{{ __('app.Delete') }}" type="submit" theme="danger"/>
                                            <?php    } ?>
                                            <x-adminlte-button icon="fas fa-cog" title="{{ __('app.Edit') }}" data-toggle="modal" data-target="#modalEditUser_{{ $users->id }}" class="bg-teal"/>

                                        </form>




<!-- Modal -->
    {{-- Custom --}}
    <x-adminlte-modal id="modalEditUser_{{ $users->id }}" title="{{ __('app.EditUser') }}" size="lg" theme="teal"
    icon="fas fa-user" v-centered static-backdrop scrollable>
    <form action="updateuser/{{ $users->id }}" method="POST">

    <div style="height:470px;">
        <div class="card-body">

                @csrf
                @method('PUT')
                <div class="form-group">
                    <input type="hidden" name="id" value="{{ $users->id }}">
                    <label for="name">{{ __('app.Name') }}</label>
                    <input type="text" class="form-control" name="name" value="{{ $users->name }}" placeholder="{{ __('app.EnterName') }}">
                </div>
                <div class="form-group">
                    <label for="email">{{ __('app.Email') }}</label>
                    <input type="text" class="form-control" name="email" value="{{ $users->email }}" placeholder="{{ __('app.EnterEmail') }}">
                </div>
                <div class="form-group">
                    <label for="password">{{ __('app.Password') }}</label>
                    <input type="password" class="form-control" name="password" placeholder="{{ __('EnterPassword') }}">
                </div>

                <div class="form-group">
                    <label for="lang_code">{{ __('app.lang_code') }}</label>
                    <select name="lang_code" class="form-control">
                        @foreach($data['language'] as $lang)
                            <option value="{{ $lang->code }}" @if($lang->code == $users->lang_code) selected @endif>{{ $lang->name }}</option>
                        @endforeach

                    <!--
                        <option value="en" <?php if($users->lang_code == 'en'){ echo 'selected';} ?>>{{ __('app.en') }}</option>
                        <option value="ru" <?php if($users->lang_code == 'ru'){ echo 'selected';} ?>>{{ __('app.ru') }}</option>
                        <option value="uk" <?php if($users->lang_code == 'uk'){ echo 'selected';} ?>>{{ __('app.uk') }}</option>
                        <option value="pl" <?php if($users->lang_code == 'pl'){ echo 'selected';} ?>>{{ __('app.pl') }}</option>
                    -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="role">{{ __('app.Role') }}</label>
                    <select name="role" class="form-control">
                        <option value="superadmin" <?php if($users->role == 'superadmin'){ echo 'selected';} ?>>{{ __('app.superadmin') }}</option>
                        <option value="admin" <?php if($users->role == 'admin'){ echo 'selected';} ?>>{{ __('app.admin') }}</option>
                        <option value="editor" <?php if($users->role == 'editor'){ echo 'selected';} ?>>{{ __('app.editor') }}</option>
                        <option value="moderator" <?php if($users->role == 'moderator'){ echo 'selected';} ?>>{{ __('app.moderator') }}</option>
                        <option value="user" <?php if($users->role == 'user'){ echo 'selected';} ?>>{{ __('app.user') }}</option>
                        <option value="banned" <?php if($users->role == 'banned'){ echo 'selected';} ?>>{{ __('app.banned') }}</option>
                        <option value="blocked" <?php if($users->role == 'blocked'){ echo 'selected';} ?>>{{ __('app.blocked') }}</option>
                    </select>
                </div>


        </div>

    </div>
    <x-slot name="footerSlot">
        <x-adminlte-button class="mr-auto" theme="success" type="submit" label="{{ __('app.Save') }}"/>
        <x-adminlte-button theme="danger" label="{{ __('app.Dismiss') }}" data-dismiss="modal"/>
    </x-slot>
    </x-adminlte-modal>
    </form>



                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    <div class="float-right">
                        {!! $data['users']->links() !!}
                    </div>





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




