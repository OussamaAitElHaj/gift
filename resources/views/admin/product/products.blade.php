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
            <div class="col-md-6" >
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          name
                        </th>
                      
                        <th>
                          Edit
                        </th>
                        <th>
                          Delete
                        </th>
                      </thead>
                      <tbody>
                       
                          @foreach($products as $row)
                        <tr>
                          <td>
                            {{$row ->name}}
                          </td>
                        
                          <td>
                            <a href="" class="btn btn-success">Edit</a>
                          </td>
                          <td>
                            <a href="{{url('/product/delete').'/'.$row->id}}" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                       @endforeach 
                      </tbody>
                    </table>
                    <a href="{{url('/product/addProduct')}}" class="btn button-blue">Add Product</a>
                  </div>
                </div>
                {{$products->links()}}

              </div>
            </div>
          </div>
        </div>
      </div>
      

      @include('gabarit.footer')
@include('gabarit.script')
</body>
</html>