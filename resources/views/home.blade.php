@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="container">
                            <button type="button" id="image_manager" class="btn btn-primary">File Manager</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>

        $(function () {
            var base_url = {!! json_encode(url('/')) !!}


        $('#image_manager').click(function(e){

                window.open( base_url + "/laravel-filemanager?type=Images&langCode=en");


            });



        });




    </script>

@endsection
