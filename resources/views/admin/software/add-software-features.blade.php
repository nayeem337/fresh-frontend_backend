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
                    <form class="form-horizontal" action="{{route('store.software.feature')}}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <div class="form-group">
                            <label> Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>



                        <div class="form-group">
                            <label> Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>


                        @php
                        $softwares= \App\Models\Software::all();

                        @endphp


                        <div class="form-group">
                            <label>Software</label>
                            <select class="form-control" name="software_id">
                                <option >Select an option</option>
                                @foreach ($softwares as $software)

                                <option value="{{ $software->id }}">{{ $software->title }}</option>

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





    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="table-responsive m-t-40">
                <table id="config-table" class="table display table-striped border no-wrap">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Software</th>

{{--                        <th>Details</th>--}}
                        {{-- <th>Active/Deactive</th> --}}
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($software_feature as $feature)
                        <tr>
                            @php
                            $softwares= \App\Models\Software::find($feature->software_id);

                             @endphp



                            <td><img src="{{ asset($feature->image) }}" style="height: 100px"></td>
                            <td>{{ $feature->title ?? null }}</td>

                            <td>{{ $softwares ? $softwares->title : 'No Software' }}</td>

                            <td>
                                <a href="{{ route('edit.software.feature',['id'=>$feature->id]) }}" class="btn btn-primary btn-sm editProduct">Edit</a>
                                <a href="{{ route('delete.software.feature',['id'=>$feature->id]) }}" class="btn btn-danger btn-sm editProduct">Delete</a>

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
