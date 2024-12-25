@if($blogs->isEmpty())
    <p>No results found</p>
@else
    @foreach ($blogs as $blog)
        <div class="col-lg-6">
            <div class="card mb-3 shadow-lg p-3 mb-5 bg-white rounded">
                <img class="card-img-top" src="{{ asset($blog->main_image) }}" alt="Card image cap" style="height: 200px">
                <div class="card-body">
                    <a href="{{ route('blogs.details', $blog->id) }}">
                        <h5 class="card-title">{!! Str::limit($blog->title, 50) !!}</h5>
                    </a>
                    <p class="p-1 text-white" style="background: linear-gradient(to left, #f83600, #fe8c00);">
                        published: {{ $blog->created_at->format('M d, Y, g:i a') }}
                    </p>
                    <p class="card-text">{!! Str::limit($blog->short_details, 120) !!}</p>
                    <a href="{{ route('blogs.details', $blog->id) }}" class="text-bold float-right btn btn-success">Details <i class="fa-solid fa-forward"></i></a>
                </div>
            </div>
        </div>
    @endforeach
@endif
