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
                    <form class="form-horizontal" action="{{route('update.glance')}}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <input type="hidden" name="id" value="{{ $glance->id }}">

                        <div class="form-group">
                            <label> Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $glance->title }}">
                        </div>

                        <div class="form-group">
                            <label> Counter</label>
                            <input type="text" name="counter" class="form-control" value="{{ $glance->counter }}">
                        </div>



                        <div class="form-group">

                            <div class="form-group">
                                <label> Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <img src="{{asset($glance->image)}}" class="mb-2" height="100" width="100" alt="">

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
