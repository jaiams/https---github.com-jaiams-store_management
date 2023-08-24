<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ADD EMPLOYEE') }}
        </h2>
   
</x-slot>
    
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form  method="POST" action="{{route ('emp.store')}}" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
              <label for="title">Employee name</label>
              <input type="text" name="emp_name"  id="emp_name" class="form-control" placeholder="Name of Employee" maxlength="50"
                required>
            </div>
            <div class="form-group">
            <label for="title">Position</label>
            <select class="form-control" value="select position" name="emp_position"  id="emp_position" required>
  <option>Team Leader</option>
  <option>Assistant Team Leader</option>
  <option>Head Cashier</option>
  <option>Store inventory in-charge</option>
  <option>Human resource staff</option>
  <option>Merchandiser</option>
  <option>Cashier</option>
  <option>Checker</option>
  <option>Receiving in-charge</option>
  
</select>
</div>
<div class="form-group">
<label for="title">Select Store</label>
            <select class="form-control" name="emp_store"  id="emp_store" required>
            @foreach($store as $item)
  <option>{{ $item->stores_name }}</option>
  @endforeach
</select>

</div>
            <div class="form-group">
              <label for="title">Address</label>
              <input type="text" name="emp_address" id="emp_address" class="form-control" placeholder="Address" maxlength="50"
                required>
            </div>
            <div class="form-group">
              <label for="title">Contact</label>
              <input type="text" name="emp_contact" id="emp_contact" class="form-control" placeholder="Contact" maxlength="500"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
            </div>
            <div class="form-group">
              <label for="title">Email</label>
              <input type="email" name="emp_email" id="emp_email" class="form-control" placeholder="Email" maxlength="500" required>
            </div>
            <div class="modal-footer">
              <button class="btn btn-primary">Save</button>
            </div>
          </form>
                </div>
            </div>
        </div>
    </div>

   

  
</x-app-layout>

