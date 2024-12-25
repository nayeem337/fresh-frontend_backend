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
                    <form class="form-horizontal" action="{{route('update.software.feature')}}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <input type="hidden" value="{{$software_features->id}}" name="id">

                        <div class="form-group">
                            <label> Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $software_features->title }}">
                        </div>


                        <div class="form-group">

                            <div class="form-group">
                                <label> Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <img src="{{asset($software_features->image)}}" class="mb-2" height="100" width="100" alt="">

                        </div>



                        @php
                        $softwares= \App\Models\Software::all();

                        @endphp


                        <div class="form-group">
                            <label>Software</label>
                            <select class="form-control" name="software_id">
                                <option >Select An Option</option>
                                @foreach ($softwares as $software)

                                <option value="{{ $software->id }}" {{$software->id==$software_features->software_id?'selected':''}}>{{ $software->title }}</option>

                                @endforeach
                            </select>
                        </div>

                        {{-- <div class="form-group">
                            <label>Type</label>
                            <select class="form-control" name="add_type">
                                <option disabled>Select an option</option>
                                <option value="1">Package</option>
                                <option value="0">Service</option>
                            </select>
                        </div> --}}

                        {{-- <div class="form-group">
                            <label>Add to Homepage</label>
                            <select class="form-control" name="add_home">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div> --}}
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
