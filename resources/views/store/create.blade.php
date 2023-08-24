<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ADD STORE') }}
        </h2>
   
</x-slot>
    
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form  method="POST" action="{{route ('store.store')}}" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
              <label for="title">Store name</label>
              <input type="text" name="store_name"  id="store_name" class="form-control" placeholder="Name of store" maxlength="50"
                required>
            </div>
            <div class="form-group">
              <label for="title">Address</label>
              <input type="text" name="store_address" id="store_address" class="form-control" placeholder="Address" maxlength="50"
                required>
            </div>
            <div class="form-group">
              <label for="title">Contact</label>
              <input type="text" name="store_contact" id="store_contact" class="form-control" placeholder="Contact" maxlength="500"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
            </div>
            <div class="form-group">
              <label for="title">Email</label>
              <input type="email" name="store_email" id="store_email" class="form-control" placeholder="Email" maxlength="500" required>
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

