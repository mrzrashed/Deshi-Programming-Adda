

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/posts.index') }}">
                {{ config('', 'Deshi Programming Adda') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <ul class="nav navbar-nav" id="js-menu" >
                <!--<li><a href="/pages.topquestions" class="nav-links">Top Questions</a></li>-->
                <li><a href="/about" class="nav-links">About Us</a></li>
                <li>
                        <form class="form-inline my-2 my-lg-0">
                            <div id="search-box">
                               <script>
                                 (function() {
                                   var cx = '001587144486271946168:vjpuc2uxrwe';
                                   var gcse = document.createElement("script");
                                   gcse.type = "text/javascript";
                                   gcse.async = true;
                                   gcse.src = "https://cse.google.com/cse.js?cx=" + cx;
                                   var s = document.getElementsByTagName("script")[0];
                                   s.parentNode.insertBefore(gcse, s);
                                 })();
                                 window.onload = function()
                                 { 
                                   var searchBox =  document.getElementById("gsc-i-id1");
                                   searchBox.placeholder="Search stackoverflow";
                                   searchBox.title="Search stackoverflow"; 
                                 }
                               </script>
                               <gcse:search></gcse:search>
                            </div>
                        </form>                          
                </li>
            
          </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register')}}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/posts.index">Dashboard</a></li>
                            <li><a href="/posts.create">Create Post</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

