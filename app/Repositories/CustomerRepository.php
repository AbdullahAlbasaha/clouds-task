<?php
namespace App\Repositories;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerRepository  {
    public static function customers(Request $request)  {
       return  Customer::select(["id","name","email","activation"])
       ->when($request->has("search"), function ($query) use ($request){
        $query->where("email","like","%". $request->search ."%")->orWhere("name","like","%". $request->search ."%");
       })
       ->paginate(10);

    }
    public static function update_customer($customer,$dto){
        $data = [
            'name' => $dto->name,
            'email' => $dto->email,
        ];
        if(!empty($dto->password)){
            $data += ['password'=> bcrypt($dto->password)];
        }
        return  $customer->update($data);

    }

     public static function delete_customer(Customer $customer)  {
       return  $customer->delete();

    }
    public static function activation(Customer $customer,$activation)  {
       return  $customer->update(['activation' => $activation]);

    }


}
