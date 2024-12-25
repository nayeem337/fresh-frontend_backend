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
                    <form class="form-horizontal" action="{{route('update.software')}}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <input type="hidden" value="{{$softwares->id}}" name="id">

                        <div class="form-group">
                            <label> Title</label>
                            <input type="text" name="title" class="form-control" value="{{$softwares->title}}">
                        </div>

                        <div class="form-group">
                            <label>Short Title</label>
                            <input type="text" name="short_title" class="form-control" value="{{$softwares->short_title}}">
                        </div>


                        <div class="form-group">

                            <div class="form-group">
                                <label>Slider Image</label>
                                <input type="file" name="image_main" class="form-control">
                            </div>
                            <img src="{{asset($softwares->image_main)}}" class="mb-2" height="100" width="100" alt="">

                        </div>


                        <div class="form-group">

                            <div class="form-group">
                                <label>Banner Image</label>
                                <input type="file" name="banner_image" class="form-control">
                            </div>
                            <img src="{{asset($softwares->banner_image)}}" class="mb-2" height="100" width="100" alt="">

                        </div>

                        <div class="form-group">
                            <label>Short Description</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="short_des">{{$softwares->short_des}}</textarea>
                        </div>

                        <div class="form-group">

                            <div class="form-group">
                                <label> Image One</label>
                                <input type="file" name="image1" class="form-control">
                            </div>
                            <img src="{{asset($softwares->image1)}}" class="mb-2" height="100" width="100" alt="">

                        </div>

                        <div class="form-group">
                            <label> Description One</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des1">{{$softwares->des1}}</textarea>
                        </div>



                        <div class="form-group">

                            <div class="form-group">
                                <label> Image Two</label>
                                <input type="file" name="image2" class="form-control">
                            </div>
                            <img src="{{asset($softwares->image2)}}" class="mb-2" height="100" width="100" alt="">

                        </div>

                        <div class="form-group">
                            <label> Description Two</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des2">{{$softwares->des2}}</textarea>
                        </div>


                        <div class="form-group">

                            <div class="form-group">
                                <label> Image Three</label>
                                <input type="file" name="image3" class="form-control">
                            </div>
                            <img src="{{asset($softwares->image3)}}" class="mb-2" height="100" width="100" alt="">

                        </div>

                        <div class="form-group">
                            <label> Description Three</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des3">{{$softwares->des3}}</textarea>
                        </div>


                        <div class="form-group">

                            <div class="form-group">
                                <label> Image Four</label>
                                <input type="file" name="image4" class="form-control">
                            </div>
                            <img src="{{asset($softwares->image4)}}" class="mb-2" height="100" width="100" alt="">

                        </div>

                        <div class="form-group">
                            <label> Description Four</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des4">{{$softwares->des4}}</textarea>
                        </div>


                        <div class="form-group">

                            <div class="form-group">
                                <label> Image Five</label>
                                <input type="file" name="image5" class="form-control">
                            </div>
                            <img src="{{asset($softwares->image5)}}" class="mb-2" height="100" width="100" alt="">

                        </div>

                        <div class="form-group">
                            <label> Description Five</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des5">{{$softwares->des5}}</textarea>
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
