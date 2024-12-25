@extends('admin.master')
@section('body')
{{--
    <div class="row mt-2">
        <div class="col-lg-12">
            <div class="card">

                @if(session('message'))
                    <div class="alert alert-success" role="alert">
                        {{session('message')}}
                    </div>
                @endif
                <div class="card-body">
                    <form class="form-horizontal" action="{{route('add.company.store')}}" enctype="multipart/form-data" method="POST">
                        @csrf



                        <div class="form-group">
                            <label> Image One</label>
                            <input type="file" name="image1" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Description One</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des1"></textarea>
                        </div>



                        <div class="form-group">
                            <label> Image Two</label>
                            <input type="file" name="image2" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Description Two</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des2"></textarea>
                        </div>





                        <div class="form-group">
                            <label> Image Three</label>
                            <input type="file" name="image3" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Description Three</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des3"></textarea>
                        </div>


                        <div class="form-group">
                            <label> Image Four</label>
                            <input type="file" name="image4" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Description Four</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des4"></textarea>
                        </div>



                        <div class="form-group">
                            <label> Image Five</label>
                            <input type="file" name="image5" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Description Five</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des5"></textarea>
                        </div>

                        <div class="form-group">
                            <label> Image Six</label>
                            <input type="file" name="image6" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Description Six</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des6"></textarea>
                        </div>




                        <div class="form-group">
                            <label> Image Seven</label>
                            <input type="file" name="image7" class="form-control">
                        </div>


                         <div class="form-group">
                            <label>Description seven</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des7"></textarea>
                        </div>


                        <div class="form-group">
                            <label> Image Eight</label>
                            <input type="file" name="image8" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Description Eight</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="des8"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Company Long Detail</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="detail"></textarea>
                        </div>


                        <div class="table-responsive">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 --}}


{{-- Company Info  section start --}}

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <div class="table-responsive m-t-40">
            <table id="config-table" class="table display table-striped border no-wrap">
                <thead>
                <tr>
                    <th>Section 1</th>
                    <th>Section 2</th>
                    <th>Section 3</th>
                    <th>Section 4</th>
                    <th>Section 5</th>
                    <th>Section 6</th>
                    <th>Section 7</th>
                    <th>Section 8</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                    <tr>
                        <td><img src="{{ asset($companyInfo->image1) }}" style="height: 70px"></td>
                        <td><img src="{{ asset($companyInfo->image2) }}" style="height: 70px"></td>
                        <td><img src="{{ asset($companyInfo->image3) }}" style="height: 70px"></td>
                        <td><img src="{{ asset($companyInfo->image4) }}" style="height: 70px"></td>
                        <td><img src="{{ asset($companyInfo->image5) }}" style="height: 70px"></td>
                        <td><img src="{{ asset($companyInfo->image6) }}" style="height: 70px"></td>
                        <td><img src="{{ asset($companyInfo->image7) }}" style="height: 70px"></td>
                        <td><img src="{{ asset($companyInfo->image8) }}" style="height: 70px"></td>


                        <td>
                            <a href="{{ route('company.info.edit',['id'=>$companyInfo->id]) }}" class="btn btn-primary btn-sm editProduct">Edit</a>
                            {{-- <a href="{{ route('edit.gallery',['id'=>$companyInfo->id]) }}" class="btn btn-danger btn-sm editProduct">Delete</a> --}}

                        </td>
                    </tr>


                </tbody>

            </table>
            </div>
        </div>
    </div>
</div>


 {{-- Company info  section end --}}



    {{-- <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="table-responsive m-t-40">
                <table id="config-table" class="table display table-striped border no-wrap">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Active/Deactive</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($galleries as $gallery)
                        <tr>
                            <td><img src="{{ asset($gallery->image) }}" style="height: 100px"></td>

                            <td>
                                @if ($gallery->status == 1)
                                    <button class="btn btn-sm btn-primary">Active</button>
                                @elseif($gallery->status == 0)
                                    <button class="btn btn-sm btn-danger">Deactive</button>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('edit.gallery',['id'=>$gallery->id]) }}" class="btn btn-primary btn-sm editProduct">Edit</a>

                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>
                </div>
            </div>
        </div>
    </div> --}}
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea#default'
        });
    </script>
@endsection
