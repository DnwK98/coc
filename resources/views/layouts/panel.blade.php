<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('include.page_head')
</head>
<body>
        @include('include.nav')
        <div class="col-12">
            <div class="row">

                <!-- Menu on left side for large screen -->
                <div class="col-lg-2 d-none d-lg-block">
                    <div class="row">
                        <div class="col-lg-2 second_color_background" style="position: fixed;  z-index: 999; height: 100%;">
                            @include('include.panel_nav')
                        </div>
                    </div>
                </div>

                <!-- Menu on top for smaller -->
                <div class="col-md-12 d-block d-lg-none">
                        @include('include.panel_nav')
                </div>

                <div class="col-lg-10">
                    @yield('content')
                </div>

            </div>
        </div>
</body>
</html>
