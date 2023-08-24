

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CITI Store Management') }}
        </h2>
        <a href="{{route('store.create')}}"class="btn btn-primary">Add store</a>

        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
        store added
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@endif
@if(Session::has('edited'))
        <div class="alert alert-warning" role="alert">
        store updated
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
  @endif
  @if(Session::has('deleted'))
        <div class="alert alert-danger" role="alert">
        store deleted
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
  @endif
        
    </x-slot>
 

    <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Store name</th>
                                            <th>Store address</th>
                                            <th>Store contact</th>
                                            <th>Store email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($stored as $item)
                                        <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->stores_name }}</td>
                                        <td>{{ $item->stores_address }}</td>
                                        <td>{{ $item->stores_contact }}</td>
                                        <td>{{ $item->stores_email }}</td>
                                           
                                            <td> <a href="{{route('store.edit',$item->id)}}" class="btn btn-primary"> Update </a>
                                            
                                            <button type="button" class="btn btn-danger deleteBtn"> <i class="fas fa-trash-alt"></i> Delete </button>
                                      <!-- DELETE MODAL -->
 <div class="modal fade" id="deleteModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title" id="exampleModalLabel">Delete Store</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form method="POST" action="{{route('store.destroy',$item->id)}}" accept-charset="UTF-8" style="display:inline">
 
          <div class="modal-body">
 
   
 
            <h4>Are you sure want to delete?</h4>
 
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger deleteBtn" title="Delete Store" onclick="return confirm("Confirm delete?")""><i class="fa fa-trash-o" aria-hidden="true"></i> Yes</button>
                                          
        </div>
 
        </form>
      </div>
    </div>
    </div>
                                           
                                           
                                        </td>
                                         

                                        </tr>
                                     
                                    </tbody>
                                    @endforeach
      </table>
 

  <script src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
 
 
  <script>
    $(document).ready(function () {
      $('.deleteBtn').on('click', function(){
 
        $('#deleteModal').modal('show');
        
        // Get the table row data.
        $tr = $(this).closest('tr');
 
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();
 
        console.log(data);
 
        $('#deleteId').val(data[0]);
 
        });
    
    });
  </script>

  
</x-app-layout>

