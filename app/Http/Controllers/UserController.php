<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\User;
use \App\Carro;
use Illuminate\Validation\Rule;



class UserController extends Controller
{
    public function index(){

          
    	

    		    		//$users =['julian','pedro','camila','carolina'];

    		    	//$users = DB::table('users')->get();
                    // $users = User::all();
          $users = User::latest()->paginate(6);

                

                    
                    //$users = DB::table('users')->get();

    	
             $title='Listado de usuarios';

    	 return view('user.users',compact('users','title'))->with('i',(request()->input('page',1)-1)*6);
    	    	 
    }

    public function show(User $user){

        //$user = User::findOrFail($id);
 

        return view('user.show-user', compact('user'));
   
    }

    public function create(){
   return view('user.create');
    }

   

    public function store(){

      
        $datos = request()->validate([
              
              'name'=>'required',
              'email'=>['required','email','unique:users,email'],
              'password'=>['required','min:8'],
            ], [
             'name.required'=>'El campo Nombre es obligatorio',
             'email.required'=>'El campo Correo es obligatorio',
             'email.unique'=>'Esta direccion ya se encuentra registrada',
             'email.email'=>'Ingrese una direccion de corrreo valida',
             'password.required'=>'El campo Password es obligatorio',
             'password.min'=>'El password debe contener minimo 8 digitos'
             ]);

        User::create([

            'name'=>$datos['name'],
            'email'=>$datos['email'],
            'password'=>bcrypt($datos['password'])
        ]);
         
        return redirect('usuarios')->with('success','Se ha creado un usuario correctamente');
    }


    public function edit(User $user){
     
      return view('user.editar',compact('user'));

    }


    public function update(User $user){

    
           $data = request()->validate([
              
              'name'=>'required',
              'email'=>['required','email', Rule::unique('users')->ignore($user->id)],
              'password'=>'',
            ], [
             'name.required'=>'El campo Nombre es obligatorio',
             'email.required'=>'El campo Correo es obligatorio',
             'email.unique'=>'Esta direccion ya se encuentra registrada',
             'email.email'=>'Ingrese una direccion de corrreo valida'
         ]);

         if ($data['password']!=null) {

              $data['password'] = bcrypt($data['password']);
         }else{
            unset($data['password']);
         }
       

        $user->update($data);

        return redirect()->route('user.show',['user'=>$user]);


    }

    public function destroy(User $user){
      

      $user->delete();

     return redirect()->route('users')->with('danger','Se Elimino un usuario de la base de datos');

    }

     public function carro(){

    $carro = Carro::all();

 
      
     return view('carros.carros', compact('carro'));


    }

    public function showcar(Carro $carro){

        // $carro=Carro::findOrFail($id);
         

        return view('carros.show-carros',compact('carro'));
    }

    public function createCar(){

        return view('carros.create');
    }

    public function process(){
      
      $data = request()->validate([
       'marca'=>'required',
       'modelo'=>'required'],

       ['marca.required'=>'Este campo Marca es obligatorio',
         'modelo.required'=>'Este campo modelo es obligatorio'
       ]

   );

      Carro::create([
        'marca'=>$data['marca'],
        'modelo'=>$data['modelo'],

    ]);

      return redirect()->route('carros');
  }

  public function borrarCar(Carro $carro){
    
    $carro->delete();

    return redirect()->route('carros');

  }

  public function editCar(Carro $carro){

    return view('carros.editar',compact('carro'));
  }


  public function updateCar(Carro $carro){

    $data = request()->validate([
       'marca'=>'required',
       'modelo'=>'required',
    ],[

      'marca.required'=>'Debe ingresar una marca',
      'modelo.required'=>'Debe ingresar una modelo'

    ]);


    $carro->update($data);

    return redirect()->route('carid',['carro'=>$carro]);

  }


}
