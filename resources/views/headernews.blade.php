<div id="navarea">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav custom_nav">
            <li class=""><a href="{{url('index')}}">Home</a></li>
            <li class="dropdown"> <a href="" class="" data-toggle="dropdown" role="button" aria-expanded="false">Berita</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{url('kategori')}}">Kategori Berita</a></li>
                <li><a href="{{url('tanggal')}}">Tanggal Berita</a></li>
                <li><a href="{{url('kategori')}}">Rating Berita</a></li>
              </ul>
            </li>
            <li><a href="{{url('pendaftaran')}}">Pendaftaran Akun</a></li>
            <li><a href="{{url('login')}}">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>