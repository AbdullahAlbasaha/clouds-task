<?php

namespace App\Http\Controllers\Admin;

use App\DTOs\UpdateCustomerDTO;
use App\Http\Requests\updateCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CustomerRepository;

class CustomerController extends Controller
{
    private $success_message = "process success";
    private $failed_message = "process failed !";
   public function index(Request $request) {
    $customers =  CustomerRepository::customers($request);
    return view("admin.customers.index", compact("customers"));
   }
   public function edit(Customer $customer) {
    return view("admin.customers.edit", compact("customer"));
   }
   public function update(updateCustomerRequest $updateCustomerRequest ,Customer $customer) {
       $dto = UpdateCustomerDTO::getData($updateCustomerRequest);
       $updated = CustomerRepository::update_customer($customer,$dto);

       return $this->redirect($updated,true);
    }


   public function destroy(Customer $customer) {
      $deleted = CustomerRepository::delete_customer($customer);
       return $this->redirect($deleted);
   }
   public function activation(Request $request,Customer $customer){
    $updated =  CustomerRepository::activation($customer,$request->activation);
    return $this->redirect($updated);
 }
   private function redirect($status = true,$back = false){
    if($status){
        $flash_msg = ["success_message" => $this->success_message];
    }else{
        $flash_msg = ["error_message" => $this->failed_message];
    }
    if ($back) {
        return back()->with($flash_msg);
    }else{
        return redirect(route("customers.index"))->with($flash_msg);
    }
   }


}
