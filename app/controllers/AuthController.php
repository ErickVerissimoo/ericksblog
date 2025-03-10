<?php

namespace Note\Ericksblog\controllers;

use Note\Ericksblog\model\User;
use DB\SQL\Session as sessao;

require __DIR__.'/../../vendor/autoload.php';


class AuthController
{
    public function getPage(\Base $f3)
    {

       echo \Template::instance()->render('auth.html');
    }
    public function cadastro(\Base $f3)
    {
      $parameters = $f3->get('POST');
      $email = $parameters['email'];
      $password = $parameters['password'];
      $user = new User;
      $user->saveUser($email, $password);
      
      echo \Template::instance()->render('auth.html');
    }
public function login(\Base $f3)
{

  $email = $f3->get('POST.email');
  $password = $f3->get('POST.password');
  
$auth = new \Auth(new User, ['id'=> 'email', 'pw' => 'password'] );
$bool = $auth->login($email, $password);
if($bool){
  $db = $f3->get('DB');
$f3->set('SESSION.email', $email);
$f3->reroute('/home');
return;
}
throw new \Exception('Username or password invalids');

}
    
}