
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="/">{{config('app.name','myapp')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault"><ul class="nav">
    <li class="nav-item">
    <a class="nav-link" href="{{url('/')}}">Home</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{url('/about')}}">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/services')}}">Services</a>
      </li>
    <li class="nav-item">
    <a class="nav-link " href="{{url('/post ')}}">Blog</a>
    </li>
  </ul>
</div>
</nav>