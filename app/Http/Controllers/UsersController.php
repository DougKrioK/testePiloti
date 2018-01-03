<?php namespace controleDeUsuarios\Http\Controllers;

use Request;
use controleDeUsuarios\Usuario;
// estou setando para o usuario ao inves de user, para nao misturar com o metodo de register
use controleDeUsuarios\Categoria;
use controleDeUsuarios\Http\Requests\UsersRequest;

class UsersController extends Controller
{  
    public function __construct()
    {  
        // declarando o middleware padrao auth, para sempre conferir se esta logado 
        // somente para os metodos adiciona e remove
        $this->middleware('auth');
    }


    public function lista () {
        $usuarios = Usuario::all();
        return view('usuario.listagem')->with('usuarios', $usuarios);
    }

    public function mostra ($id) {
        $usuario = Usuario::find($id);
        
        if(empty($usuario)) {
            return "Esse usuario não existe";
        }
        return view('usuario/detalhes')->with('usuario', $usuario);
    }

    public function novo () {
        return view('usuario/novo')->with('categorias', Categoria::all());
    }

    public function adiciona (UsersRequest $request) {

        Usuario::create($request->all());
        return redirect()->action('UsersController@lista')->withInput(Request::only('nome'));
    }

    public function altera ($id) {
        $usuario = Usuario::find($id);
        if(empty($usuario)) {
            return "Esse usuario não existe";
        }
        $usuario->name = Request::input('name');
        $usuario->email = Request::input('email');
        $usuario->password = bcrypt(Request::input('password'));
        $usuario->save();
        return redirect()->action('UsersController@lista')->withInput(Request::only('name'));
    }

    public function remove($id){
        $usuario = Usuario::find($id);
        $usuario->ativo = 0;
        $usuario->save();
        return redirect()->action('UsersController@lista');
    }
}
