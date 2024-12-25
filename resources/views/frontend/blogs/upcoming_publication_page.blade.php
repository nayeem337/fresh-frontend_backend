
@extends('frontend.master')
@section('title')
  Upcoming Publications
@endsection
@section('content')

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="{{asset($banner->image)}}" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Upcoming Publication</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('front.page')}}">Home</a>
                    </li>
                    <li>Upcoming Publication</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Popular Courses Section Start -->
        <div class="container my-5">

            <h3>Upcoming Publications </h3>

            </style>

            <div class="row mt-2">




                    <div class="col-lg-8 ">
                       <div class="row">
                        @foreach ($blogs as $blog)


                         <div class="col-lg-6">
                            <div class="card mb-3 shadow-lg p-3 mb-5 bg-white rounded">
                                <img class="card-img-top" src="{{ asset($blog->main_image) }}" alt="Card image cap"style="height: 200px">
                                <div class="card-body">
                                    <a href="{{ route('blogs.details',$blog->id) }}"><h5 class="card-title">{!!  Str::limit($blog->title, 50) !!}</h5></a>
                                    <p class="p-1 text-white" style="background: #fe8c00;  /* fallback for old browsers */
                                    background: -webkit-linear-gradient(to left, #f83600, #fe8c00);  /* Chrome 10-25, Safari 5.1-6 */
                                    background: linear-gradient(to left, #f83600, #fe8c00); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                                    ">published: {{ $blog->created_at->format('M d, Y, g:i a') }}</p>
                                  <p class="card-text">{!!  Str::limit($blog->short_details, 120) !!}</p>


                                  <a href="{{ route('blogs.details',$blog->id) }}" class="text-bold float-right btn btn-success">Buy Author <i class="fa-solid fa-forward"></i></a>
                                </div>
                              </div>

                        </div>
                        @endforeach
                       </div>
                    </div>

                        <!-- Pagination links -->




                    <div class="col-lg-4">
                        {{-- <div class="card search-bar">
                            <div class="card-header">
                                <h4><b>New Search</b></h4>
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="search-input" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                      <div class="card ">
                        <div class="card-header top">
                            <h4><b>Recent Posts</b></h4>
                        </div>
                        <div class="card-body">



                          @foreach ($recent_blogs as $blog )
                          <div class="row no-gutters mt-4">
                            <div class="col-md-4 col-3 d-flex align-items-center">
                                <img class="card-img responsive-img" src="{{ asset($blog->main_image) }}" alt="Card image cap" style="height: 80px ;widht:80px">
                            </div>
                            <style>
                                .responsive-img {
                                    width: 100%;
                                    height: auto;
                                    max-width: 80px;
                                    max-height: 60px;
                                }

                                @media (max-width: 576px) { /* Mobile devices (extra small screens) */
                                    .responsive-img {
                                        max-width: 50px;
                                        max-height: 40px;
                                    }

                                }
                            </style>
                            <div class="col-md-8 col-9">
                                <div class="card-body d-flex align-items-center">
                                   <a href="{{ route('blogs.details',$blog->id) }}"> <p class="card-title mb-0"><b>{{ Str::limit($blog->title, 20) }}</b></p></a>
                                </div>
                            </div>
                          </div>
                          @endforeach

                        </div>
                    </div>

                    </div>


                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function(){
    $('#search-input').on('input', function() {
        var query = $(this).val();

        if (query != '') {
            $.ajax({
                url: "{{ route('blogs.search') }}",
                method: "POST",
                data: {
                    query: query,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    $('#search-results').html(data.html);
                }
            });
        } else {
            $('#search-results').html('');
        }
    });
});
</script>






                {{-- <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img class="card-img" src="..." alt="Card image cap">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card Title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> --}}



            </div>


                {!! $blogs->links() !!}


        </div>
        <!-- Popular Courses Section End -->


    </div>
    <!-- Main content End -->





@endsection



@if(session('message'))
<div class="alert alert-success" role="alert">
    {{session('message')}}
</div>
@endif
