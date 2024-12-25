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
                    <form class="form-horizontal" action="{{route('store.client')}}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <div class="form-group">
                            <label> Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>



                        <div class="form-group">
                            <label> Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>


                        <div class="table-responsive">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    {{-- client show section start --}}

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="table-responsive m-t-40">
                <table id="config-table" class="table display table-striped border no-wrap">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td><img src="{{ asset($client->image) }}" style="height: 100px"></td>
                            <td><h5 style="font-weight: 500">{{ $client->name }}</h5></td>


                            <td>
                                <a href="{{ route('edit.client',['id'=>$client->id]) }}" class="btn btn-primary btn-sm editProduct">Edit</a>
                                <a href="{{ route('delete.client',['id'=>$client->id]) }}" class="btn btn-danger btn-sm editProduct">Delete</a>

                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>
                </div>
            </div>
        </div>
    </div>


     {{-- client show section end --}}



    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea#default'
        });
    </script>
@endsection
