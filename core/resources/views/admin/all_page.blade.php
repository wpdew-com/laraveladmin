@extends('adminlte::page')

@section('plugins.summernote', true)

@section('title', __('app.Dashboard') )

@section('content_header')
    <h1>{{ __('app.Dashboard') }}</h1>
@stop

@section('content')






    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('app.Dashboard') }}
                    </div>

                    <div class="card-body">



    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>description</th>
                    <th>slug</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['pages'] as $pages)
                    <tr>
                        <td>{{ $pages->id }}</td>
                        <td>{{ $pages->title }}</td>
                        <td>{{ $pages->description }}</td>
                        <td>{{ $pages->slug }}</td>
                        <td>
                            <form action="{{ route('page',$pages->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('page',$pages->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>

                                {{-- Example button to open modal --}}
                                <x-adminlte-button label="Edit Modal" data-toggle="modal" data-target="#modalPurple" class="bg-teal"/>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <div class="float-right">
            {!! $data['pages']->links() !!}
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




