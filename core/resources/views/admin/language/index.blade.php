@extends('adminlte::page')

@section('plugins.summernote', true)

@section('title', __('app.Language settings') )

@section('content_header')
    <h1>{{ __('app.Language settings') }}</h1>
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
                        {{ __('app.Language settings') }}
                        <a class="" href="#" data-widget="control-sidebar">
                            <i class="fas fa-question-circle"></i>
                        </a>
                        {{-- add buton --}}
                        <x-adminlte-button class="float-right bg-teal" label="{{ __('app.Add language') }}" theme="" icon="fas fa-sm fa-plus" data-toggle="modal" data-target="#modalAddLanguage"/>

                    </div>

                    <div class="card-body">




        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>{{ __('app.Id') }}</th>
                    <th>{{ __('app.Name') }}</th>
                    <th>{{ __('app.Code') }}</th>
                    <th>{{ __('app.Status') }}</th>
                    <th width="280px">{{ __('app.Action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['language'] as $language)
                    <tr>
                        <td>{{ $language->id }}</td>
                        <td>{{ $language->name }}</td>
                        <td>{{ $language->code }}</td>
                        <td>
                            @if ($language->status == 1)
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('deletelanguage',$language->id) }}" method="Post">
                                @csrf
                                @if($language->id != '1')
                                <x-adminlte-button icon="fas fa-trash" title="{{ __('app.Delete') }}" type="submit" theme="danger"/>
                                @endif

                                {{-- Example button to open modal --}}
                                <x-adminlte-button icon="fas fa-cog" title="{{ __('app.Edit Language') }}" data-toggle="modal" data-target="#modalLanguage_{{ $language->id }}" class="bg-teal"/>

                            </form>

                            {{-- modalLanguage modal --}}
                            <form action="updatelanguage/{{ $language->id }}" method="POST">
                                <x-adminlte-modal id="modalLanguage_{{ $language->id }}" title="{{ __('app.Edit Language') }}" size="lg" theme="teal"
                                        icon="fas fa-lg fa-language" v-centered static-backdrop scrollable>


                                    @csrf
                                    <input type="hidden" name="id" value="{{ $language->id }}">
                                    <div class="row">
                                        <x-adminlte-input name="name" label="{{ __('app.Name') }}" placeholder="{{ __('app.Enter name') }}" fgroup-class="col-md-12" value="{{ $language->name }}" />
                                        <x-adminlte-input name="code" label="{{ __('app.Code') }}" placeholder="{{ __('app.Enter code') }}" fgroup-class="col-md-6" value="{{ $language->code }}" />
                                        <x-adminlte-input name="locale" label="{{ __('app.Locale') }}" placeholder="{{ __('app.Enter locale') }}" fgroup-class="col-md-6" value="{{ $language->locale }}" />
                                    </div>
                                    <div class="row">
                                    <x-adminlte-input name="flag" label="{{ __('app.Flag') }}" placeholder="{{ __('app.Enter flag name') }}" fgroup-class="col-md-6" value="{{ $language->flag }}" />
                                    <x-adminlte-select name="status" label="{{ __('app.Status') }}" fgroup-class="col-md-6">
                                            <option value="1" @if ($language->status == 1)  selected @endif>{{ __('app.Active') }}</option>
                                            <option value="0" @if ($language->status == 0)  selected @endif>{{ __('app.Inactive') }}</option>
                                    </x-adminlte-select>
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
            {!! $data['language']->links() !!}
        </div>








{{-- modalAddLanguage modal --}}
<form action="{{ route('addlanguage') }}" method="POST">
    @csrf
<x-adminlte-modal id="modalAddLanguage" title="{{ __('app.Add language') }}" size="lg" theme="teal"
        icon="fas fa-lg fa-language" v-centered static-backdrop scrollable>


    <div class="row">
        <x-adminlte-input name="name" label="{{ __('app.Name') }}" placeholder="{{ __('app.Enter name') }}" fgroup-class="col-md-12" />
        <x-adminlte-input name="code" label="{{ __('app.Code') }}" placeholder="{{ __('app.Enter code') }}" fgroup-class="col-md-6" />
        <x-adminlte-input name="locale" label="{{ __('app.Locale') }}" placeholder="{{ __('app.Enter locale') }}" fgroup-class="col-md-6" />
    </div>
    <div class="row">
    <x-adminlte-input name="flag" label="{{ __('app.Flag') }}" placeholder="{{ __('app.Enter flag name') }}" fgroup-class="col-md-6" />
    <x-adminlte-select name="status" label="{{ __('app.Status') }}" fgroup-class="col-md-6">
        <option value="1">{{ __('app.Active') }}</option>
        <option value="0">{{ __('app.Inactive') }}</option>
    </x-adminlte-select>

    <x-slot name="footerSlot">
        <x-adminlte-button class="mr-auto" theme="success" type="submit" label="{{ __('app.Save') }}"/>
        <x-adminlte-button theme="danger" label="{{ __('app.Dismiss') }}" data-dismiss="modal"/>
    </x-slot>

</x-adminlte-modal>

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




