@extends('layout.app')

@section('content')

<style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="cover.css" rel="stylesheet">
</head>
<body class="text-center">
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
<header class="masthead mb-auto">
  <div class="inner">
    <h3 class="masthead-brand">Cover</h3>
  </div>
</header>

<main role="main" class="inner cover">
  <h1 class="cover-heading">The Best Care</h1>
  <p class="lead">you all smile peacefully with our care.</p>
  <p class="lead">
    <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
  </p>
</main>
</div>
   <div class="jumbotron text-center">
       <h1>Gram Physiotherapy</h1>
       <p>GET IN</p>
       <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a><a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>

   </div>
   @endsection
 
