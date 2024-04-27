<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\order;
use App\Models\Reservation;
use App\Models\FoodChef;

class AdminController extends Controller
{
    public function users(){
        $data = User::all();
        return view("admin.users",compact('data'));
    }

    public function deleteuser($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->back()->with('success','User DEleted Successfully');
    }

    public function foodmenu(){
        $data = Food::all();
        return view('admin.foodmenu',compact('data'));
    }

    public function upload(Request $request){
        $data = new Food;

        $image = $request->image;
        $imagename = time().".".$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);

        $data->title = $request->title;
        $data->image = $imagename;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->category = $request->category;
        $data->save();

        return redirect()->back()->with('success','Food Added Successfully');
    }

    public function deletefood($id){
        $data = Food::find($id);
        $data->delete();
        return redirect()->back()->with('success','Food Deleted Successfully');
    }

    public function editfood($id){
        $data = Food::find($id);
        return view('admin.updatefood',compact('data'));
    }

    public function updatefood($id , Request $request){
        $data = Food::find($id);

        $image = $request->image;
        $imagename = time().".".$image->getclientOriginalExtension();

        $request->image->move('foodimage',$imagename);

        $data->title = $request->title;
        $data->price = $request->price;
        $data->image = $imagename;
        $data->description = $request->description;
        $data->save();

        return redirect('foodmenu')->with('success','Food Updated Successfully');
        
    }

    public function reservation(Request $request){
        $data = new Reservation;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;
        $data->save();

        return redirect()->back()->with('success','Reservation Done Successfully');

    }

    public function viewreservation(){
        $data = Reservation::all();
        return view('admin.adminreservation',compact('data'));
    }

    public function viewchef(){
        $data = FoodChef::all();
        return view('admin.adminchef',compact('data'));
    }

    public function addchef(Request $request){
        $data = new FoodChef;

        $image = $request->image;
        $imagename = time().".".$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);

        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->image = $imagename;
        $data->save();
        return redirect()->back()->with('success','Chef Added Successfully');
    }

    public function deletechef($id){
        $data = FoodChef::find($id);
        $data->delete();
        return redirect()->back()->with('success','Chef Deleted Successfully');
    }

    public function editchef($id){
        $data = FoodChef::find($id);
        return view('admin.editchef',compact('data'));
    }

    public function updatechef($id , Request $request){
        $data = FoodChef::find($id);

        $image = $request->image;
        $imagename = time().".".$image->getclientOriginalExtension();

        $request->image->move('foodimage',$imagename);

        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->image = $imagename;
        $data->save();

        return redirect('viewchef')->with('success','Chef Data Updated Successfully');
        
    }

    public function vieworders(){
        $order = order::all();
        return view('admin.order',compact('order'));
    }
}


