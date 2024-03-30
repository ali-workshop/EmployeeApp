<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function __construct(){

        $this->middleware("auth");
        $this->middleware("manager");
    }
    public function index(){

        return view('manager.dashboard');
    }
    public function create(){

        return view('manager.create');

    }
    public function store(Request $request){

        $NewRecord=$request->validate([
            'name'=> ["String","Required"],
            'email'=> ['Email','Required'],
            'password'=> ['String','Required'],
            'role'=> ['string'],

        ]);

      User::create($NewRecord);
      return redirect()->route('manager.dashboard')->with('success','Account Added Successfully..');#make wiht this meesake link for see the table 
    }

    // public function edit($user){
    // $user=User::findorfill($user);
    // return view('manager.edit',compact('user'));
  
    // }


    public function getID(){

        return view('manager.get');


    }
    public function editID(Request $request){
        $id=$request->id;
        $user=User::find($id);
        return view('manager.edit',['user'=>$user]);


    }
    public function updateID($id,Request $request){
// dd($id);
 $request->validate([
    'name'=> ['String','Required'],


 ]);
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->role=$request->role;
        $user->save();
        return redirect()->route('manager.dashboard')->with('success','Account updated successfully');

    }
    public function showmanagers(){

        $users=User::all();
        return view('manager.home',['users'=>$users]);
        
    }
public function editoption(){

return view('manager.editoption');


}
public function showedit(){
    $users=User::all();
    return view('manager.showedit',['users'=>$users]);#compact('users'));


}
public function showedelet(){
    $users=User::all();
    return view('manager.showedelet',['users'=>$users]);#compact('users'));


}
public function delet(User $user){

$user->delete();
return redirect()->route('manager.dashboard')->with('success','Account Deleted successfully');
}

public function edit(User $user){
// dd($user);
    return view('manager.edit',['user'=>$user]);
}


public function getrole(){
return view('manager.getrole');
}
public function editrole(Request $request){
    // $user=new User();
    // User::find( $request->id );
    // $user->find($request->validate([
    //     'id'=> ['required','integer'],
    // ]));
    
$user=User::find($request->id );

    return view('manager.editrole',['user'=>$user]);
    }
    public function updaterole($id,Request $request){
        //dd($id)
        $user=User::find($id);
        $user->role=$request->role;
        $user->save();
        return redirect()->route('manager.dashboard')->with('success','Account updated successfully');
    
    }
    }
