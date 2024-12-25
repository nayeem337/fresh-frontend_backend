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
                    <form class="form-horizontal" action="{{route('company.info.update')}}" enctype="multipart/form-data" method="POST">
                        @csrf


                        <input type="hidden" name="id" class="form-control" value="{{ $companyInfo->id }}">


                        <div class="form-group">

                            <div class="form-group">
                                <label> Image One</label>
                                <input type="file" name="image1" class="form-control">
                            </div>
                            <img src="{{asset($companyInfo->image1)}}" class="mb-2" height="100" width="100" alt="Client Image">

                        </div>




                        <div class="form-group">
                            <label>Description One</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des1">{{ $companyInfo->des1 }}</textarea>
                        </div>



                        <div class="form-group">

                            <div class="form-group">
                                <label> Image Two</label>
                                <input type="file" name="image2" class="form-control">
                            </div>
                            <img src="{{asset($companyInfo->image2)}}" class="mb-2" height="100" width="100" alt="Client Image">

                        </div>

                        <div class="form-group">
                            <label>Description Two</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des2">{{ $companyInfo->des2 }}</textarea>
                        </div>





                        <div class="form-group">

                            <div class="form-group">
                                <label> Image Three</label>
                                <input type="file" name="image3" class="form-control">
                            </div>
                            <img src="{{asset($companyInfo->image3)}}" class="mb-2" height="100" width="100" alt="Client Image">

                        </div>


                        <div class="form-group">
                            <label>Description Three</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des3">{{ $companyInfo->des3 }}</textarea>
                        </div>


                        <div class="form-group">

                            <div class="form-group">
                                <label> Image Four</label>
                                <input type="file" name="image4" class="form-control">
                            </div>
                            <img src="{{asset($companyInfo->image4)}}" class="mb-2" height="100" width="100" alt="Client Image">

                        </div>


                        <div class="form-group">
                            <label>Description Four</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des4">{{ $companyInfo->des4 }}</textarea>
                        </div>



                        <div class="form-group">

                            <div class="form-group">
                                <label> Image Five</label>
                                <input type="file" name="image5" class="form-control">
                            </div>
                            <img src="{{asset($companyInfo->image5)}}" class="mb-2" height="100" width="100" alt="Client Image">

                        </div>


                        <div class="form-group">
                            <label>Description Five</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des5">{{ $companyInfo->des5 }}</textarea>
                        </div>

                        <div class="form-group">

                            <div class="form-group">
                                <label> Image Six</label>
                                <input type="file" name="image6" class="form-control">
                            </div>
                            <img src="{{asset($companyInfo->image6)}}" class="mb-2" height="100" width="100" alt="Client Image">

                        </div>


                        <div class="form-group">
                            <label>Description Six</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des6">{{ $companyInfo->des6 }}</textarea>
                        </div>




                        <div class="form-group">

                            <div class="form-group">
                                <label> Image Seven</label>
                                <input type="file" name="image7" class="form-control">
                            </div>
                            <img src="{{asset($companyInfo->image7)}}" class="mb-2" height="100" width="100" alt="Client Image">

                        </div>


                         <div class="form-group">
                            <label>Description seven</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des7">{{ $companyInfo->des7 }}</textarea>
                        </div>


                        <div class="form-group">

                            <div class="form-group">
                                <label> Image Eight</label>
                                <input type="file" name="image8" class="form-control">
                            </div>
                            <img src="{{asset($companyInfo->image8)}}" class="mb-2" height="100" width="100" alt="Client Image">

                        </div>


                        <div class="form-group">
                            <label>Description Eight</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des8">{{ $companyInfo->des8 }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Company Long Detail</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="detail">{{ $companyInfo->detail }}</textarea>
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
