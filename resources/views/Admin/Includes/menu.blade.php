
<div class="wrapper">

    <div class="sidebar" data-background-color="white" data-active-color="danger">
        	<div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.hkmmart.com" class="simple-text">
                        hkmmart.com
                    </a>
                </div>

                <ul class="nav">
                    <li class="{{ active('admin.dashboard') }}">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="ti-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="user.html">
                            <i class="ti-shopping-cart"></i>
                            <p>Product</p>
                        </a>
                    </li>
                    <li class="{{ active('admin.kategori.index') }}">
                        <a href="{{ route('admin.kategori.index') }}">
                            <i class="ti-menu-alt"></i>
                            <p>Kategori</p>
                        </a>
                    </li>
                    <li>
                        <a href="typography.html">
                            <i class="ti-text"></i>
                            <p>Article</p>
                        </a>
                    </li>

                </ul>
        	</div>
        </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                 {{Auth::user()->name}}
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">


                                <li class="divider"></li>
                                <li><a href="{{ route('logout') }}">
                                        Log out
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
