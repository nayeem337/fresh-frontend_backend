<style>

        .menu {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .menu a {
            padding: 10px 20px;
            text-decoration: none;
            background-color: #0178A7;
            color: #fff;
            margin: 0 5px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .menu a:hover {
            background-color: #076185;
        }

        /* Grid styling */
        .grid-project {
            display: flex;
            flex-wrap: wrap;
        }
        .grid-item-pro {
            width: 30%;
            margin: 10px;
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 5px;
            text-align: center;
            transition: transform 0.3s;
        }
        .grid-item-pro:hover {
            transform: scale(1.05);
        }

        /* Category-specific styling */
        .project-1 {
            background-color: #ff9999;
        }
        .project-2 {
            background-color: #99ff99;
        }
        .project-3 {
            background-color: #9999ff;
        }
</style>


  <div id="rs-popular-courses" class="rs-popular-courses style1 orange-color md-pt-70 md-pb-70" style="background-color: #fff">
        <div class="container">

            <div style="text-align:center; margin-bottom:55px">
                <h3 style="color: #076185">Latest Projects</h3>
                <h5>Some of Our Web Design Sample List</h5>
           </div>



            @php
            $projects= \App\Models\Project::all();

            $project_types= \App\Models\ProjectType::all();

            @endphp



            <div id="rs-popular-courses" class="rs-popular-courses style1 orange-color md-pt-70 md-pb-70">
                <div class="container">
                    <!-- Filter Menu -->
                    <div class="menu">
                        <a href="#" class="filter-button" data-filter="*">ALL</a>

                        @foreach ($project_types as $project)



                        <a href="#" class="filter-button" data-filter=".project-{{ $project->id }}" style="text-transform: uppercase;">
                            {{ $project->title }}
                        </a>

                        @endforeach

                    </div>

                    <!-- Grid of Items -->
                    <div class="grid-project">
                        @foreach ($projects as $project)
                        <div class="grid-item-pro project-{{ $project->type }}">
                            <a href="{{ $project->link }}">
                                <img src="{{ asset($project->image) }}" alt="" style="height:250px">
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>



        </div>
    </div>


    <script>
        // Ensure jQuery is ready
        $(document).ready(function(){
            // Initialize Isotope for filtering
            var $grid = $('.grid-project').isotope({
                itemSelector: '.grid-item-pro',
                layoutMode: 'fitRows'
            });

            // Filter items when a menu item is clicked
            $('.filter-button').on('click', function(e) {
                e.preventDefault();
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({ filter: filterValue });
            });
        });
    </script>
