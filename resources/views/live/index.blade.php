<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Dashboard - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>

    <!-- includes stylesheets and other css from top_scripts.blade.php(placed in views.live.includes)  -->
    @include('live.includes.top_scripts')

</head>
<body>
<div class="wrapper">
    <!-- includes top header for log and login UI placed above navigation view (placed in views.live.includes)  -->
    @include('live.includes.top_header')

            <!-- includes top navigation for all menu and drop down UI placed below header (placed in views.live.includes)  -->
    @include('live.includes.top_navigation_ui')

    <div class="page-wrapper">

        <div class="container-xl">
            <!-- Page title -->
            <div class="page-header d-print-none">
                <div class="row align-items-center">
                    <div class="col">
                        <!-- Page pre-title -->
                        <h2 class="page-title">
                            Main Dashboard
                        </h2>

                        <div class="page-pretitle">
                            Select any project to continue
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-page-body-starts-here  -->
        <div class="page-body">
            <!-- main-container-starts-here  -->
            @include('live.all-projects')
            <!-- main-container-ends-here  -->
        </div>
        <!-- main-page-body-ends-here  -->


        <!-- bottom footer (placed in views.live.includes  -->
        @include('live.includes.bottom_footer')
    </div>
</div>


<!-- these are core libraries of project, they includes scripts to render UI and other Charts and data -  bottom_scripts.blade.php(placed in views.live.includes  -->
@include('live.includes.bottom_scripts')
</body>
</html>