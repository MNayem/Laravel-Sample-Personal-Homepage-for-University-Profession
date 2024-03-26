<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Models\Food;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /*Produts Add */
    public function productStore(Request $request)
    {
        $user_email = Auth::user()->email;
        $product=new Product;
        $product->email= $user_email;
        $product->title= $request->title;
        $product->description= $request->description;
        $product->buyingprice= $request->buyingprice;
        $product->sellingprice= $request->sellingprice;
        $product->updated_price= $request->sellingprice - $request->buyingprice;

        $files=$request->file('image');
        $name=$request->file('image')->getClientOriginalName();


        if($request->hasFile('image')) {
          $name=$request->file('image')->getClientOriginalName();
          $request->file('image')->storeAs('images/',$name);
          $request->image->move(public_path('images'), $name);

        // $path = $file->storeAs('public/', $originalname);


        }

      $product->image="images/".$name;
      $product->save();
      return redirect()->back()->with('message', 'Product has been added successly!!');
    }

    /*Products Show */
    public function productshow()
    {
      $productshow= Product::select('*')
                    ->orderBy('id', 'DESC')
                    ->get();
      return view('product.allproduct',compact('productshow'));
    }
    
    /*Edit and Delete Product */
    public function productedit($id)
    {
        $data=Product::find($id);
        return view('product.productedit', compact('data'));
    }
    public function producteditprocess(Request $request, $id)
    {
        $data=Product::find($id);
        $data->title= $request->title;
        $data->description= $request->description;
        $data->buyingprice= $request->buyingprice;
        $data->sellingprice= $request->sellingprice;
        $data->updated_price= $request->sellingprice - $request->buyingprice;
        
        $file=$request->file('image');
        $name=$request->file('image')->getClientOriginalName();


        if($request->hasFile('image')) {
          $name=$request->file('image')->getClientOriginalName();
          $request->file('image')->storeAs('images/',$name);
          $request->image->move(public_path('images'), $name);

        // $path = $file->storeAs('public/', $originalname);


        }

        $data->image="images/".$name;
        
        $data->save();
      	return redirect()->to('/productshow')->with('message', 'Product has been updated successly!!');  
    }

    /* Delete Product */
    public function deleteproduct($id)
    {
        $data=Product::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Product has been deleted successly!!');
    }
    
    /*Food Add */
    public function foodStore(Request $request)
    {
        $user_email = Auth::user()->email;
        $food=new Food;
        $food->email= $user_email;
        $food->name= $request->name;
        $food->description= $request->description;
        $food->category= $request->category;
        $food->fnumber= $request->fnumber;
        $food->makingcost= $request->makingcost;
        $food->sellingprice= $request->sellingprice;
        $food->estimatedprofit	= $request->sellingprice - $request->makingcost;

        $files=$request->file('image');
        $name=$request->file('image')->getClientOriginalName();
        //return $name;


        if($request->hasFile('image')) {
          $name=$request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('images/',$name);
        $request->image->move(public_path('images'), $name);

        // $path = $file->storeAs('public/', $originalname);


    }

     $food->image="images/".$name;
      $food->save();
      return redirect()->back()->with('message', 'Food Item has been added successly!!');
    }

    /*Food Item Show */
    public function foodShow()
    {
      $foodshow= Food::select('*')
                    ->orderBy('id', 'DESC')
                    ->limit(5)
                    ->get();
      return view('food.allfood',compact('foodshow'));
    }
    
    /*Edit and Delete Product */
    public function food_edit($id)
    {
        $data=Food::find($id);
        return view('food.foodedit', compact('data'));
    }
    public function food_edit_process(Request $request, $id)
    {
        $data=Food::find($id);
        $data->name= $request->name;
        $data->fnumber= $request->fnumber;
        $data->description= $request->description;
        $data->category= $request->category;
        $data->makingcost= $request->makingcost;
        $data->sellingprice= $request->sellingprice;
        $data->estimatedprofit= $request->sellingprice - $request->makingcost;
        $data->availability= $request->availability;
        
        $file=$request->file('image');
        $name=$request->file('image')->getClientOriginalName();


        if($request->hasFile('image')) {
          $name=$request->file('image')->getClientOriginalName();
          $request->file('image')->storeAs('images/',$name);
          $request->image->move(public_path('images'), $name);

        // $path = $file->storeAs('public/', $originalname);


        }

        $data->image="images/".$name;
        
        $data->save();
      	return redirect()->to('/foodshow')->with('message', 'Food has been updated successly!!');  
    }
    /* Delete Food */
    public function delete_food($id)
    {
        $data=Food::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Product has been deleted successly!!');
    }
    
    /*Ingredients Add */
    public function add_ingredients()
     {
        $productName = Product::get();
        $foodItemName = Food::get();
        return view('food.ingredientsAdd',compact('productName','foodItemName'));
     }
    public function ingredients_store(Request $request)
    {
        $user_email = Auth::user()->email;
        $ingredients=new Ingredients;
        $ingredients->email= $user_email;
        $ingredients->productname= $request->title;
        $ingredients->foodname= $request->name;
        $ingredients->quantity= $request->quantity;

	     $ingredients->save();
	      return redirect()->back()->with('message', 'Ingedients has been added successly!!');
	    }
        
    /*Ingredients Show */
    public function ingredientsShow()
    {
      $ingredientsShow= Ingredients::select('*')
                ->orderBy('id', 'DESC')
                ->get();
      return view('food.ingredientslist',compact('ingredientsShow'));
    }
	/*Edit and Delete Stock */
    public function ingredients_edit($id)
    {
        $data=Ingredients::find($id);
        return view('food.ingredientsedit', compact('data'));
    }
    public function ingredients_edit_process(Request $request, $id)
    {
        $data=Ingredients::find($id);
        $data->productname= $request->productname;
        $data->foodname= $request->foodname;
        $data->quantity = $request->quantity;
        
        $data->save();
      	return redirect()->to('/ingredientsShow')->with('message1', 'Ingredients has been updated successly!!');  
    }

    /* Delete Stock */
    public function delete_ingredients($id)
    {
        $data=Ingredients::find($id);
        $data->delete();
        return redirect()->back()->with('message2', 'Ingredients has been deleted successly!!');
    }

    
    /* Product Cart */
    public function productcart(){
        $product = Food::select('*')
                  ->get();
        return view('product.productcart', compact('product'));
    }
    
    /* Product Cart Front */
    public function productcartfront(){
        $product = Food::select('*')
                  ->where('category','Party')
                  ->where('availability','Yes')
                  ->orWhere('category','Launch')
                  ->orWhere('category','Dinner')
                  ->get();
        $productL = Food::select('*')
                  ->where('availability','Yes')
                  ->where('category','Launch')
                  ->orWhere('category','Dinner')
                  ->get(); 
        $productD = Food::select('*')
                  ->where('availability','Yes')
                  ->where('category','Dinner')
                  ->orWhere('category','Dinner')
                  ->get(); 
        $productBandD = Food::select('*')
                  ->where('availability','Yes')
                  ->where('category','Beverage and Dessert')
                  ->get();
        $productBr = Food::select('*')
                  ->where('availability','Yes')
                  ->where('category','Breakfast')
                  ->get();
        return view('welcome', compact('product','productL','productD','productBandD','productBr'));
    }
    
    public function productcartmenu(){
        $product = Food::select('*')
                  ->where('availability','Yes')
                  ->where('category','Party')
                  ->orWhere('category','Launch')
                  ->orWhere('category','Dinner')
                  ->get();
        $productL = Food::select('*')
                  ->where('availability','Yes')
                  ->where('category','Launch')
                  ->orWhere('category','Dinner')
                  ->get(); 
        $productD = Food::select('*')
                  ->where('availability','Yes')
                  ->where('category','Dinner')
                  ->orWhere('category','Dinner')
                  ->get(); 
        $productBandD = Food::select('*')
                  ->where('availability','Yes')
                  ->where('category','Beverage and Dessert')
                  ->get();
        $productBr = Food::select('*')
                  ->where('availability','Yes')
                  ->where('category','Breakfast')
                  ->get();
        return view('pages.menu', compact('product','productL','productD','productBandD','productBr'));
    }    
    
    
    /* Return Cart*/
    public function returncart(){
        $product = Product::select('*')
                   ->get();
        return view('product.returncart', compact('product'));
    }

    /* Company Cart*/
    public function companycart(){
        $product = Product::select('*')
                  ->get();
        return view('product.companycart', compact('product'));
    }
    
    /* Search Food */
    
    public function table1(){
        return view('restaurant.table.table1');
    }
    public function searchFood(Request $request){
        $search_number = $request->foodNumber;
        $food = Food::where('fnumber', $search_number)->get();
        
        // echo  $food;
        return view('restaurant.table.table1result', compact('food'));
    }
    public function tableCartsStore(Request $request){
        $tableCarts=new TableCarts;
        $tableCarts->food_number= $request->food_number;
        $tableCarts->fname= $request->fname;
        $tableCarts->product_quantity= $request->product_quantity;
        $tableCarts->tablenumber= $request->tablenumber;
        $tableCarts->amount = $request->amount;
        $tableCarts->tamount = $tableCarts->amount * $tableCarts->product_quantity;
        $tableCarts->date= Carbon::today();
        
        $idCheck = TableCarts::where('tablenumber', 1)
                 ->orderBy('id', 'DESC')
                 ->first();
        if(empty($idCheck)){
            $tableCarts->order_id = 1010001;
        }
        else if($idCheck->status == 'Incomplete'){
            $tableCarts->order_id = $idCheck->order_id;
        }else{
            $tableCarts->order_id = $idCheck->order_id + 1;
        }
	    $tableCarts->save();
	   //echo "Insert Success!";
	   return redirect()->to('/table1')->with('message', 'Product has been added to cart!!');
    }
    
     /*Table Carts Show */
    public function tableCarts_show()
    {
      $tableCartsShow= TableCarts::select('*')
                ->orderBy('id', 'DESC')
                ->get();
      return view('restaurant.table.tableCartShow',compact('tableCartsShow'));
    }
    
    /* Table 1 Carts Print Show */
    public function printCart_show()
    {
      $tableCartsPrintShow= TableCarts::select('*')
                           ->where('tablenumber', 1)
                           ->where('status','Incomplete')
                           ->orderBy('id', 'DESC')
                           ->get();
      $orderIdShow = TableCarts::select('*')
                    ->orderBy('id', 'DESC')
                    ->first();
      $totalAmountShow = TableCarts::select('*')
                        ->where('tablenumber', 1)
                        ->where('status', 'Incomplete')
                        ->get();
      return view('restaurant.table.tableCartPrintShow',compact('tableCartsPrintShow','orderIdShow','totalAmountShow'));
    }
    
    //Customer Order Store Table 1
    public function customerOrderStore(Request $request){
        $customerOrder = new TableOrders;
        $customerOrder->order_id= $request->order_id;
        $customerOrder->vat= 0;
        $customerOrder->tamount = $request->tamount;
        $customerOrder->cname = $request->cname;
        if(!empty($request->date)){
            $customerOrder->date=$request->date;
        }
        else{
            $customerOrder->date= Carbon::today();
        }
        $customerOrder->phone_no = $request->phone_no;
        $customerOrder->payment_type = $request->payment_type;
        
        $customerOrder->save();
        
        // $status = TableCarts::select('*')
        //         ->where('tablenumber', 1)
        //         ->where('status', 'Incomplete')
        //         ->update(['status'=>'Complete']);
        
        return redirect()->to('/customerPrintShowT1')->with('message', 'Order has been placed successfully!!');
    }
    
    //Customer Print Show Table 1
    public function customerPrintShowT1(){
        $customerPrintShowT1 = TableCarts::select('*')
                            ->where('tablenumber', 1)
                            ->where('status', 'Incomplete')
                            ->get();
        $customerPrintShowtableNumber1 = TableCarts::select('*')
                            ->where('tablenumber', 1)
                            ->where('status', 'Incomplete')
                            ->first();
                            
        $totalPayableAmount = TableCarts::select('*')
                        ->where('tablenumber', 1)
                        ->where('status', 'Incomplete')
                        ->get();

        return view('restaurant.table.customerPrintShowT1', compact('customerPrintShowT1','customerPrintShowtableNumber1','totalPayableAmount'));
    }
    public function customerPrintShowT1updateStatus(){
        $status = TableCarts::select('*')
                ->where('tablenumber', 1)
                ->where('status', 'Incomplete')
                ->update(['status'=>'Complete']);
                
        return redirect()->to('/table1')->with('message','Success!!');
    }
    
    //KOT Order Table 1
    public function kotOrderStore(){
         $kotPrintShowT1 = TableCarts::select('*')
                            ->where('tablenumber', 1)
                            ->where('status', 'Incomplete')
                            ->get();
         $kotTableNumber =  TableCarts::select('*')
                            ->where('tablenumber', 1)
                            ->where('status', 'Incomplete')
                            ->first();

        return view('restaurant.table.kotPrintShowT1', compact('kotPrintShowT1','kotTableNumber'));
    }
    
    /*Table Orders Show */
    public function tableOrders_show()
    {
      $tableOrdersShow= TableOrders::select('*')
                ->orderBy('id', 'DESC')
                ->get();
      return view('restaurant.table.tableOrderShow',compact('tableOrdersShow'));
    }
}
