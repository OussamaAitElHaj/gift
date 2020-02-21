
<html>
<head>
@include('gabarit.links')
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href=javascript:;">Brand</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="#pablo" class="nav-link">Choose a city</a>
                </li>
                <li class="nav-item">
                    <a href="#pablo" class="nav-link">link</a>
                </li>
            </ul>

        </div>
    </div>
</nav>




<div class="row">
  <div class="col-2"></div>

@foreach($cities as $city)
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="{{ asset('uploads/cities/'.$city->image)}}" rel="nofollow" alt="Card image cap">
  <div class="card-body">
    <h2 class="card-text">{{$city->name}}</h2>
  </div>
  <a href="{{url('/to?id='.$city->id)}}" class="btn btn-lg btn-primary">Select</a>
</div>
@endforeach
  </div>

@include('gabarit.script')
</body>
</html>