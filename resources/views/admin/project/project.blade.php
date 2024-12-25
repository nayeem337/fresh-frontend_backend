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
                    <form class="form-horizontal" action="{{route('store.project')}}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <h3>Front page information</h3>
                        <div class="form-group">
                            <label>Project Title</label>
                            <input type="text" class="form-control" rows="5" name="title" id="title" placeholder="Project Title">
                        </div>
                        <div class="form-group">
                            <label>Project Sub Title</label>
                            <input type="text" min="0" class="form-control" rows="5" name="sub_title" id="sub_title" placeholder="Project Sub Title">
                        </div>
                        <div class="form-group">
                            <label>Project URL</label>
                            <input type="text" min="0" class="form-control" rows="5" name="link" id="link" placeholder="Project URL">
                        </div>
                        <div class="form-group">
                            <label>Project Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>


                        @php
                        $projects= \App\Models\ProjectType::all();
                        @endphp
                        <div class="form-group">
                            <label>Project Type</label>
                            <select class="form-control" name="type">
                                <option value="">Select an Option</option>
                        @foreach ($projects as $projecttype)
                        <option value="{{ $projecttype->id }}">{{ $projecttype->title }}</option>
                        @endforeach


                            </select>
                        </div>





                        <div class="table-responsive">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

     {{-- Project show section start --}}

     <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="table-responsive m-t-40">
                <table id="config-table" class="table display table-striped border no-wrap">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Sub Title</th>
                        <th>URL</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                        $projects= \App\Models\Project::all();

                        @endphp
                    @foreach ($projects as $project)
                    @php
                        //dd($project->subtitle);
                    @endphp

                        <tr>
                            <td><img src="{{ asset($project->image) }}" style="height: 100px"></td>
                            <td><h5 style="font-weight: 500">{{ $project->title }}</h5></td>
                            <td><h5 style="font-weight: 500">{{ $project->sub_title }}</h5></td>
                            <td><h5 style="font-weight: 500">{{ $project->link }}</h5></td>


                            <td>
                                <a href="{{ route('edit.project',['id'=>$project->id]) }}" class="btn btn-primary btn-sm editProduct">Edit</a>
                                <a href="{{ route('delete.project',['id'=>$project->id]) }}" class="btn btn-danger btn-sm editProduct">Delete</a>

                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>
                </div>
            </div>
        </div>
    </div>


     {{-- Project show section end --}}



    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea#default'
        });
    </script>
@endsection
