
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li><a href="{{ route('auth.dashboard') }}"><i class="fa fa-home"></i>Dashboard </a></li> 

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Users <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ route('auth.users.index') }}">Manual User</a></li> 
							<li><a href="{{ route('auth.users.social.index') }}">Social User</a></li>
							<li><a href="{{ route('auth.users.create') }}">Add User</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Jobs <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ route('auth.job.index') }}">List Job</a></li>
					        <li><a href="{{ route('auth.job.create') }}">Add Job</a></li>
                        </ul>
                    </li>
							
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Settings <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ route('auth.setting.scrape-job') }}">Scrape Data</a></li>
                        </ul>
                    </li>  

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Advertisements <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ route('auth.advertisement.index') }}">List Advertisements</a></li>
                            <li><a href="{{ route('auth.advertisement.create') }}">Add Advertisements</a></li>
                        </ul>
                    </li>            
                    
                </ul>

            </div>

        </nav>