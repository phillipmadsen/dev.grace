<head>
<meta charset="utf-8">
<title>{!! $settings['site_title'] or "Grace CMS - Multi Language Content Managment System" !!}</title>
<meta name="description" content="{!! isset($meta_description) ? $meta_description : ($settings['meta_description']) !!}">
<meta name="keywords" content="{!! isset($meta_keywords) ? $meta_keywords : ($settings['meta_keywords']) !!}">
<meta name="author" content="Phillip Madsen">

<!-- Stylesheets ============================================= -->
{!! HTML::style('http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic') !!}
{!! HTML::style('frontend/css/bootstrap.css') !!}
{!! HTML::style('frontend/style.css') !!}
{!! HTML::style('frontend/css/dark.css') !!}
{!! HTML::style('frontend/css/font-icons.css') !!}
{!! HTML::style('frontend/css/animate.css') !!}
{!! HTML::style('frontend/css/magnific-popup.css') !!}
{!! HTML::style('frontend/css/custom-css/header.css') !!}

{!! HTML::style('frontend/css/responsive.css') !!}
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- External JavaScripts ============================================= -->
{!! HTML::script('frontend/js/jquery.js') !!}
{!! HTML::script('frontend/js/plugins.js') !!}

<!--[if lt IE 9]>
{!! HTML::script('frontend/js/html5shiv.js') !!}
{!! HTML::script('frontend/js/respond.min.js') !!}
{!! HTML::script('http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js') !!}

<![endif]-->

<link rel="shortcut icon" href="{!! url('favicon.ico') !!}">
<script type="text/javascript">

</script>
</head><!--/head-->