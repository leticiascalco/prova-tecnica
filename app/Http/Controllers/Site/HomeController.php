<?php

namespace App\Http\Controllers\Site;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Feeds;

class HomeController extends Controller{

    private $user;

    public function __construct(User $user){
        $this->user = $user;

    }

    //retorna view index
    public function home(){
        $return = view('layouts.index');
        return $return;
    }


    //retorna view cadastro
    public function cadastro(){
        $return = view('layouts.cadastro');
        return $return;
    }


    //retorna view de notícias
    public function noticia(){        
        $feed = Feeds::make('https://news.google.com/news/section?cf=all&hl=pt-BR&pz=1&ned=pt-BR_br&topic=n&output=rss');
        $data = array(
          'title'     => $feed->get_title(),
          'permalink' => $feed->get_permalink(),
          'items'     => $feed->get_items(),
        );
        $return = view('layouts.noticia')->with('feed', $data);
        return $return;
    }

    //cadastra usuário
    public function cadastrar(UserRequest $request){
       $data = $request->all();
       $data['password'] = bcrypt($data['password']);       
       $this->user->create($data);
       return redirect()->to('/');
    }


    


}