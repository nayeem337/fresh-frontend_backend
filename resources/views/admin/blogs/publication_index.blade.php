@extends('admin.master')
@section('body')


    <div class="container my-5 d-flex justify-content-end">
      <div class="row ">
        <div class="col-12">
            <a href="{{ route('add.blogs') }}" class="btn btn-success"> Add Publications</a>
        </div>
      </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var button = document.getElementById('scroll-button');

            window.addEventListener('scroll', function () {
                if (window.scrollY > 100) { // Adjust the scroll threshold as needed
                    button.classList.add('active');
                } else {
                    button.classList.remove('active');
                }
            });
        });
        </script>


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="table-responsive m-t-40">
                    <table id="config-table" class="table display table-striped border no-wrap">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Image</th>

    {{--                        <th>Details</th>--}}
                            <th>Active/Deactive</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $blog->title ?? null }}</td>
                                <td><img src="{{ asset($blog->main_image) }}" style="height: 100px"></td>

    {{--                            <td>{!! $blog->short_details ?? null !!}</td>--}}
                                <td>
                                    @if ($blog->status == 1)
                                        <button class="btn btn-sm btn-primary">Active</button>
                                    @elseif($blog->status == 0)
                                        <button class="btn btn-sm btn-danger">Deactive</button>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('edit.blogs',['id'=>$blog->id]) }}" class="btn btn-primary btn-sm editProduct">Edit</a>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                    </div>
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
