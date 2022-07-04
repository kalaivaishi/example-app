<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\API_test_model;

class ApiController extends Controller
{
    //
    public function getdata()
    {
        
    }

     public function list()
    {

        return API_test_model::all();
    }

    public function add(Request $request)
    {
        $obj= new API_test_model;
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->username = $request->username;
        $result = $obj->save();
        if($result)
        {
            return ["Data saved successfully"];
        }
        else
        {
            return ["Not saved"];
        }
 
    }

    public function update(Request $request)
    {
        $obj=API_test_model::find($request->id);
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->username = $request->username;
        $result = $obj->save();
        if($result)
        {
            return ["Data updated successfully"];
        }
        else
        {
            return ["Not updated"];
        }

    }

    public function delete($id)
    {
        $obj=API_test_model::find($id);
        $result = $obj->delete();

        if($result)
        {
            return ["Data deleted successfully"];
        }
        else
        {
            return ["Not deleted"];
        }
    }

    public function search($name)
    {
        $result=API_test_model::where("name","like","%".$name."%")->get();
        if($result)
        {
            return $result;
        }
        else
        {
            return ["No data found..."];
        }
        
    }

}
