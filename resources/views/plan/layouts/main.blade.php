<!DOCTYPE html>
<html>
<head>
@include('plan.includes.header_start')

@yield('header')

@include('plan.includes.header_end')

</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    @include('plan.includes.topbar')


    <!-- ========== Left Sidebar Start ========== -->

    @include('plan.includes.menu_left')
    <!-- Left Sidebar End -->




    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->

        <!-- end content -->
        @yield('content')

        <footer class="footer">
            2018 © Bodygram <span class="hide-phone">- Зохиогчийн эрхээр хамгаалагдав</span>
        </footer>

    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->



    <!-- /Right-bar -->

</div>
<!-- END wrapper -->


@include('plan.includes.footer_start')

@yield('footer')

@include('plan.includes.footer_end')

</body>
</html>