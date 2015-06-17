 @include('frontend/layout/partials/top')
<!-- Header ============================================= -->
<header id="header" class="transparent-header semi-transparent dark full-header">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo ============================================= -->
            <div id="logo">
                 <a href="{!! url('/' . getLang()) !!}" class="standard-logo" itemprop="url"> <img itemprop="logo" src="{!! url('frontend/images/grace-logo-light.png') !!}" alt="Grace Logo"></a>
            </div><!-- #logo end -->

            <!-- Primary Navigation ============================================= -->
           @include('frontend/layout/menu')

        </div>

    </div>

</header><!-- #header end -->
 