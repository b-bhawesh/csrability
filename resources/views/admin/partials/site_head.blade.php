<!DOCTYPE html>
<html class="attachment">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>@yield('title')</title>
    <!-- Bootstrap Styles-->
    <link href="{{ asset('assets/admin/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{ asset('assets/admin/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{ asset('assets/admin/css/custom-styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/admin/images/logo1.png') }}">
    <!-- Select 2 -->	
    <link href="{{ asset('assets/admin/css/select2.min.css') }}" rel="stylesheet">    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script> 
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/foopicker.css') }}">
    <script type="text/javascript" src="{{ asset('assets/admin/js/foopicker.js') }}"></script>
    <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)attachment(\s|$)/,"$1js$2")})(document,window,0);</script>
    @yield('style')

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('auth.dashboard') }}"><img src="{{ asset('assets/img/logo.png') }}"></a>
				
        		<div id="sideNav" href="">
        		    <i class="fa fa-bars icon"></i> 
        		</div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <img src="{{ asset('assets/admin/images/logo1.png') }}" class="user-profile" > <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('admin.logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </nav>