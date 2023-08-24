<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('UPDATE STORE') }}
        </h2>
   
</x-slot>
    
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form method="POST" action="{{route ('store.update',$store->id)}}" enctype="multipart/form-data">
                @csrf
              @method('patch')
            
                <div class="form-group">
                <input type="hidden" name="id" id="id" value="{{$store->id}}">
              <label for="title">Store name</label>
              <input type="text" name="store_name" id="store_name" class="form-control" placeholder="Name of store" maxlength="50" value="{{ $store->stores_name }}"
                required>
            </div>
            <div class="form-group">
              <label for="title">Address</label>
              <input type="text" name="store_address" id="store_address" class="form-control" placeholder="Address" maxlength="50" value="{{ $store->stores_address }}"
                required>
            </div>
            <div class="form-group">
              <label for="title">Contact</label>
              <input type="text" name="store_contact" id="store_contact" class="form-control" placeholder="Contact" maxlength="10"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="{{ $store->stores_contact }}" required>
            </div>
            <div class="form-group">
              <label for="title">Email</label>
              <input type="email" name="store_email" id="store_email"  class="form-control" placeholder="Email" maxlength="500" value="{{ $store->stores_email }}" required>
            </div>          
          
            <div class="modal-footer">
            <button class="btn btn-primary">Update</button>
            </div>
          </form>
                </div>
            </div>
        </div>
    </div>

   

  
</x-app-layout>

