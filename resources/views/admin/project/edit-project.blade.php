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
                    <form action="{{route('update.project')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" value="{{$project->id}}" name="id">

                        <h3>Front page information</h3>
                        <div class="form-group">
                            <label>Project Title</label>
                            <input type="text" class="form-control" rows="5" name="title" id="title" value="{{$project->title}}" placeholder="Project Title">
                        </div>
                        <div class="form-group">
                            <label>Project Sub Title</label>
                            <input type="text" class="form-control" rows="5" name="sub_title" id="sub_title" value="{{$project->sub_title}}" placeholder="Project Sub Title">
                        </div>
                        <div class="form-group">
                            <label>Project URL</label>
                            <input type="text" min="0" class="form-control" rows="5" name="link" id="link" placeholder="Project URL" value="{{$project->link}}" >
                        </div>


                        <div class="form-group">
                            <label>Project Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <img src="{{asset($project->image)}}" class="mb-2" height="100" width="100" alt="">


                        {{-- <div class="form-group">
                            <label>Service Image</label>
                            <input type="file" name="main_image" class="form-control">
                        </div>
                        <img src="{{asset($service->main_image)}}" class="mb-2" height="100" width="100" alt=""> --}}

                        @php
                        $projects= \App\Models\ProjectType::all();
                        @endphp
                        <div class="form-group" style="margin-top: 20px">
                            <label>Type Of Project</label>
                            <select class="form-control" name="type">
                                @foreach ($projects as $projecttype)
                                <option value="{{ $projecttype->id }}" @if ($projecttype->id == $project->type)
selected
                                @endif>{{ $projecttype->title }}</option>
                                @endforeach

                            </select>
                        </div>
                        <button type="submit" class="btn btn-info">Update</button>
                    </form>                </div>
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
