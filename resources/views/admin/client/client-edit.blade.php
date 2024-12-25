@extends('admin.master')
@section('body')
    <div class="row mt-2">
        <div class="col-lg-12">
            <div class="card">

                @if(session('message'))
                    <div class="alert alert-success" role="alert">
                        {{session('message')}}
                    </div>
                @endif
                <div class="card-body">
                    <form class="form-horizontal" action="{{route('update.client')}}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <div class="form-group">
                            <label> Name</label>
                            <input type="text" name="names" class="form-control" value="{{ $client->name }}">
                            <input type="hidden" name="id" class="form-control" value="{{ $client->id }}">
                        </div>


                        <div class="form-group">

                            <div class="form-group">
                                <label>Clent Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <img src="{{asset($client->image)}}" class="mb-2" height="100" width="100" alt="Client Image">

                        </div>


                        <div class="table-responsive">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea#default'
        });
    </script>
@endsection
