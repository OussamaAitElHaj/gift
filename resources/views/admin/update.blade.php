<html>
<head>
@include('gabarit.links')
</head>
<body>

@include('gabarit.navBar')

@include('gabarit.sideBare')
<div class="content">
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-4"></div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <form action="{{url('user/update'.'/'.$user->id)}}" method="POST">
                    {{csrf_field()}}
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control" value="{{$user->name}}" name="username">
                        </div>
                    </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control" value="{{$user->email}}" disabled>
                        </div>
                       </div>
                    
                    
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      @include('gabarit.footer')
@include('gabarit.script')
</body>
</html>