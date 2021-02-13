<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    >
    <meta
      name="description"
      content=""
    >
    <meta
      name="author"
      content=""
    >
    <title>POST</title>
    <!-- Bootstrap core CSS -->
    <link
      href="{{asset('css/bootstrap.min.css')}}"
      rel="stylesheet"
    >
    <!-- Custom styles for this template -->
    <link
      href="{{asset('css/homepage.css')}}"
      rel="stylesheet"
    >
  </head>

  <body>
    <!-- Navigation -->
    <nav
      class="navbar navbar-expand-lg  fixed-top"
      style="background-color:#f9f9f9"
    >
      <div class="container">
        <a
          class="navbar-brand"
          href="{{ url('index') }}"
        >POST</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse"
          id="navbarResponsive"
        >
          <ul class="navbar-nav mr-auto d-flex align-items-center">
            <!-- Authentication Links --> 
            {{Auth::guest()}}
            @if (Auth::guest()) <li class="nav-link"><a
                href="{{ route('login') }}">Login</a></li>
            <li class="nav-link"><a href="{{ route('register') }}">Register</a></li> @else <li class="nav-link">
              <a
                class="btn icon-btn btn-success"
                href="{{ url('addPost') }}"
              >
                <span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span> Add New Post </a>
            </li>
            <li class="dropdown">
              <a
                href="#"
                class="dropdown-toggle"
                data-toggle="dropdown"
                role="button"
                aria-expanded="false"
              > {{ Auth::user()->name }} <span class="caret"></span>
              </a>
              <ul
                class="dropdown-menu"
                role="menu"
              >
                <li>
                  <a
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"
                  > Logout </a>
                  <form
                    id="logout-form"
                    action="{{ route('logout') }}"
                    method="POST"
                    style="display: none;"
                  > {{ csrf_field() }} </form>
                </li>
              </ul>
            </li> @endif <li class="nav-link"><img src="{{ asset('css/postIcon.png')}}" /></li>
          </ul> 
        </div>
      </div>
    </nav>
    <!-- Page Content -->
    <div
      class="container-fluid"
      id="main_container"
    >
      <div class="row">
        <div class="col-lg-3 text-right">
          <h1 class="my-4">POST</h1>
          <!--categories list-->
          <div class="list-group">
             @foreach($items as $item)
              <a
              class="list-group-item list-group-item-action"
              href="<?php echo url('/category/') ?>/{{$item->id}}"
            >{{$item->category_name}}</a>
            @endforeach 
          </div>
        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">
          <div class="container">
            <div class="row">
              <div class="col-12"> @yield('content') </div>
            </div>
          </div>
        </div>
        <!-- /.col-lg-9 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- Footer -->
    <footer
      class="py-5 bg-dark"
    >
      <div class="w-100">
        <p class="m-0 text-center text-white">Copyright &copy; SE FACTORY Safaa 2018</p>
      </div>
      <!-- /.container -->
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  </body>

</html>