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
                <form class="form-horizontal" action="{{route('update.package')}}" enctype="multipart/form-data" method="POST">
                    @csrf

                    <input type="hidden" value="{{$package->id}}" name="id">

                    <div class="form-group">
                        <label> Title</label>
                        <input type="text" name="title" class="form-control" value="{{$package->title}}">
                    </div>

                    <div class="form-group">
                        <label>Sub Title</label>
                        <input type="text" name="sub_title" class="form-control" value="{{$package->sub_title}}">
                    </div>

                    <div class="form-group">
                        <label> Price</label>
                        <input type="text" name="price" class="form-control" value="{{$package->price}}">
                    </div>

                    <div class="form-group">

                        <div class="form-group">
                            <label> Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <img src="{{asset($package->image)}}" class="mb-2" height="100" width="100" alt="">

                    </div>

                    <div class="form-group">
                        <label>Features</label>
                        <textarea id="tinymce" class="editor form-control" row="3" name="featurs">{!! $package->featurs !!}</textarea>
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
