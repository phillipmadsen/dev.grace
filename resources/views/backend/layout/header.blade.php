<header class="main-header">
<!-- Logo -->
<a href="{!! url(getLang() . '/admin') !!}" class="logo"><strong>Grace </strong>CMS</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
<!-- Sidebar toggle button-->
<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span>
</a>
<!-- Navbar Right Menu -->
<div class="navbar-custom-menu">
<ul class="nav navbar-nav">

{{--         <li class="dropdown messages-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
<img alt="" src="img/flags/us.png">
<span class="username">{{ LaravelLocalization::getCurrentLocaleName() }}</span>
<b class="caret"></b>
</a>
<ul class="dropdown-menu">
@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
<li>
<a href="{{LaravelLocalization::getLocalizedURL($localeCode) }}" hreflang="{{$localeCode}}"><img alt="" src="img/flags/es.png">{{{ $properties['native'] }}}</a>

</li>
@endforeach
</ul>
</li>
--}}
<!-- Notifications: style can be found in dropdown.less -->
{{--            <li class="dropdown notifications-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i>
<span class="label label-warning">{{ $formPost->count() }}</span> </a>
<ul class="dropdown-menu">
<li class="header">You have {{ $formPost->count() }} notifications</li>
<li>
<!-- inner menu: contains the actual data -->
<ul class="menu">
@foreach($formPost as $item)
<li>
<a href="#">
<p>{{ $item->subject }}</p>
</a>
</li>
@endforeach
</ul>
</li>
<li class="footer"><a href="{{ url(getLang() . '/admin/form-post') }}">See All Messages</a></li>
</ul>
</li> --}}

<!-- User Account: style can be found in dropdown.less -->
<li class="dropdown user user-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<img src="{{ gratavarUrl(Sentry::getUser()->email) }}" class="user-image" alt="User Image"/>
<span class="hidden-xs">{{ Sentry::getUser()->first_name . ' ' . Sentry::getUser()->last_name }}</span> </a>
<ul class="dropdown-menu">
<!-- User image -->
<li class="user-header">
<img src="{{ gratavarUrl(Sentry::getUser()->email) }}" class="img-circle" alt="User Image"/>

<p>
<p> {{ Sentry::getUser()->first_name . ' ' . Sentry::getUser()->last_name }} - Web Developer
<small>Member since Nov. 2012</small>
</p>
</li>
<!-- Menu Body -->
<li class="user-body">
<div class="col-xs-4 text-center">

</div>
<div class="col-xs-4 text-center">

</div>
<div class="col-xs-4 text-center">

</div>
</li>
<!-- Menu Footer-->
<li class="user-footer">
<div class="pull-left">
<a href="{{ url(getLang() . '/admin/user/' . Sentry::getUser()->id) }}" class="btn btn-default btn-flat">Profile</a>
</div>
<div class="pull-right">
<a href="{{ url('/admin/logout') }}" class="btn btn-default btn-flat">Sign out</a></div>

</li>
</ul>
</li>
</ul>
</div>
</nav>
</header>