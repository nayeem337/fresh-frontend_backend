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
                    <form class="form-horizontal" action="{{route('store.software')}}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <div class="form-group">
                            <label> Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Short Title</label>
                            <input type="text" name="short_title" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Slider Image</label>
                            <input type="file" name="image_main" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Banner Image</label>
                            <input type="file" name="banner_image" class="form-control">
                        </div>



                        <div class="form-group">
                            <label>Short Description</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="short_des"></textarea>
                        </div>

                        <div class="form-group">
                            <label> Image One</label>
                            <input type="file" name="image1" class="form-control">
                        </div>

                        <div class="form-group">
                            <label> Description One</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des1"></textarea>
                        </div>



                        <div class="form-group">
                            <label> Image Two</label>
                            <input type="file" name="image2" class="form-control">
                        </div>

                        <div class="form-group">
                            <label> Description Two</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des2"></textarea>
                        </div>


                        <div class="form-group">
                            <label> Image Three</label>
                            <input type="file" name="image3" class="form-control">
                        </div>

                        <div class="form-group">
                            <label> Description Three</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des3"></textarea>
                        </div>


                        <div class="form-group">
                            <label> Image Four</label>
                            <input type="file" name="image4" class="form-control">
                        </div>

                        <div class="form-group">
                            <label> Description Four</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des4"></textarea>
                        </div>


                        <div class="form-group">
                            <label> Image Five</label>
                            <input type="file" name="image5" class="form-control">
                        </div>

                        <div class="form-group">
                            <label> Description Five</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des5"></textarea>
                        </div>




                        <div class="table-responsive">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>







    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="table-responsive m-t-40">
                <table id="config-table" class="table display table-striped border no-wrap">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Short Title</th>

{{--                        <th>Details</th>--}}
                        {{-- <th>Active/Deactive</th> --}}
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($softwares as $software)
                        <tr>
                            <td><img src="{{ asset($software->banner_image) }}" style="height: 100px"></td>
                            <td>{{ $software->title ?? null }}</td>
                            <td>{{ $software->short_title ?? null }}</td>

                            <td>
                                <a href="{{ route('edit.software',['id'=>$software->id]) }}" class="btn btn-primary btn-sm editProduct">Edit</a>
                                <a href="{{ route('delete.software',['id'=>$software->id]) }}" class="btn btn-danger btn-sm editProduct">Delete</a>

                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>
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
