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
                          color
                        </th>
                        <th>
                          image
                        </th>
                        <th>
                          fornisseur id
                        </th>
                        <th>
                          Edit
                        </th>
                        <th>
                          Delete
                        </th>
                      </thead>
                      <tbody>
                          @foreach($gifts as $gift)
                        <tr>
                          <td>
                            {{$gift->name}}
                          </td>
                          <td>
                          {{$gift->color}}
                          </td>
                          <td>  
                            <img src="{{ asset('uploads/gift/'.$gift->image)}}" alt="image" width="75" height="75">
                          </td>
                          <td>  
                          {{$gift->fornisseur_id}}
                          </td>
                          <td>
                            <a href="{{url('/gift/update')}}" class="btn btn-success">Edit</a>
                          </td>
                          <td>
                            <a href="{{url('/gift/delete/').'/'.$gift->id}}" class="btn btn-danger">Delete</a>
                            
                          </td>
                          @endforeach
                          
                        </tr>
                      </tbody>
                    </table>
                    <a href="{{url('/gift')}}" class="btn button-blue">Add gift</a>
                  </div>
                </div>
              </div>
              {{$gifts->links()}}
            </div>
          </div>
        </div>
      </div>
      

      @include('gabarit.footer')
@include('gabarit.script')
</body>
</html>