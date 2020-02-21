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
                  <h4 class="card-title">Add Product</h4>
                  
                </div>
                <div class="card-body">
                  <form action="{{route('addgift')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">name</label>
                          <input type="text" class="form-control" name="name">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">color</label>
                          <input type="text" class="form-control" name="color">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                          <select>
                          @foreach($arrayname as $data)
                          <option value="{{$data->id}}" name="fornisseur_id">{{$data->name}}</option>
                          @endforeach
                          </select>
                          
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                          <label class="bmd-label-floating">image</label>
                          <input type="file"  name="image">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary pull-right">Add</button>
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