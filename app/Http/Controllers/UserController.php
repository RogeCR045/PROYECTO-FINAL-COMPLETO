<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $users = User::all(); 
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('/register');

    }

    public function store(Request $request)
    {
        //$user = request()->except('_token');
        //User::insert($user);
        //return redirect()->to(url('/users')); 
    //}

    $user = request()->all();
        if($img = $request->file('image')){
            $destinationPath = 'images/users/';
            $name = date('YmdHis') . "." .
            $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $user['image'] = "$name";
        }

        User::create($user);
        return redirect()->to(url('/home'));
    }

       public function exportUsersToCSV(Request $request){
        $fileName= 'users.csv';
        $users = User::all();

        $headers = array(
            "Content-type"              => "text/csv",
            "Content-Disposition"       => "attachment; fileName=$fileName",
            "Pragma"                    => "no-cache",
            "Cache-Control"             => "must-revalidate, post-check=0, pre-check=0",
            "Expires"                   => "0"
        );

        $columns = array('Nombre','|', 'Correo electrónico');

         $callback = function() use($users, $columns){
             $file = fopen('php://output', 'w');
             fputcsv($file, $columns);

             foreach($users as $user){
                
                 $row['name']                     = $user->name;
                 
                 $row['email']                    = $user->email;

                 fputcsv($file, array($row['name'],'|',$row['email']));
             }
             fclose($file);
         };
         return response()->stream($callback, 200, $headers);
    }
    public function cards(){
        $users = User::all();
        return view('users.cards', compact('users'));
    }
    public function exportToXlsx(){
        return Excel::download(new UserExport, 'users.xlsx');
    }
}
