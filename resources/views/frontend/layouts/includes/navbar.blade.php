<ul>
      <li class="{{ Request::is('user*') ? 'active' : ''}}"><a href="{{ route('user.home')}}">Home</a></li>
      <li class="{{ Request::is('user/about*') ? 'active' : ''}}"><a href="{{ route('user.about')}}">About</a></li>
      <li class="{{ Request::is('user/film*') ? 'active' : ''}}"><a href="{{ route('user.film')}}">Film</a></li>
      <li class="{{ Request::is('user/kontak*') ? 'active' : ''}}"><a href="{{ route('user.kontak')}}">Kontak</a></li>
      <li class="last"><a href=""></a></li>
</ul>