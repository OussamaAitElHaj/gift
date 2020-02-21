<html>
<head>
@include('gabarit.links')
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href=javascript:;">Store</a>
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

            <form class="form-inline ml-auto">
                <div class="form-group no-border">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-just-icon btn-round">
                  <i class="material-icons">search</i>
                </button>
            </form>
        </div>
    </div>
</nav>



<div class="row">
  <div class="col-2"></div>

@foreach($gifts as $gift)
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="{{ asset('uploads/gift/'.$gift->image)}}" rel="nofollow" alt="Card image cap">
  <div class="card-body">
    <h2 class="card-text">{{$gift->name}}</h2>
  </div>
  <a href="{{url('/to?id='.$gift->id)}}" class="btn btn-lg btn-primary">Select</a>
</div>
@endforeach
  </div>
@include('gabarit.script')
</body>
</html>