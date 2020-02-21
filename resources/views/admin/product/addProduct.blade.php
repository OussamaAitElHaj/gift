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
                  <form action="{{url('product/create')}}" method="POST">
                    {{csrf_field()}}
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Product name</label>
                          <input type="text" class="form-control" name="productName">
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