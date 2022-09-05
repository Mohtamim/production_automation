<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>@yield('title') </title>
    @include('manager.inc.style')

</head>

<body class="layout-boxed">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    @include('manager.inc.nav')


    <!--  BEGIN MAIN CONTAINER  -->



    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        @include('manager.inc.sidebar')

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">

                    <div class=" layout-top-spacing">
                        @yield('manager_content')
                    </div>


                </div>



            </div>

        </div>
        <!--  END CONTENT AREA  -->

    </div>

    <!-- END MAIN CONTAINER -->

    @include('manager.inc.scrpit')

</body>

</html>
