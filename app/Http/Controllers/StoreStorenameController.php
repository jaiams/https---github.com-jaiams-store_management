<?php
namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\store_storename;
use App\Models\store_employees;
use Illuminate\Support\Facades\DB;

class StoreStorenameController extends Controller
{
    public function index(){
        $stored = store_storename::all();

        return view('store.index',compact('stored'));


    }

    public function create(){

        return view('store.create');
    }


    public function store(Request $request){
        $stored = store_storename::all();


   
        $stores = new store_storename;
        $stores->stores_name = $request->store_name;
        $stores->stores_address = $request->store_address;
        $stores->stores_contact = $request->store_contact;
        $stores->stores_email = $request->store_email;
        $stores->save();
        return redirect()->route('store.index')->with('success','Store updated successfully');

           
        
    }




    public function edit($id){

        $store = store_storename::find($id);
        return view('store.edit')->with('store',$store);
    }

    public function update(Request $request,$id){

        $stores = store_storename::find($request->id);
        $stores->stores_name = $request->store_name;
        $stores->stores_address = $request->store_address;
        $stores->stores_contact = $request->store_contact;
        $stores->stores_email = $request->store_email;
        $stores->save();
        return redirect()->route('store.index')->with('edited','Store updated successfully');
    }


    public function destroy($id){
      
        //$storenam  = store_storename::has('profiles')->get();
    
        //$storeName = store_storename::where('id', $id)->get(); 
        //store_employees::where('emp_store', $storeName)->delete();

    
        store_storename::destroy($id);

        return redirect()->route('store.index')->with('deleted','Successfully deleted');

    }

}
