<?php
namespace Cempaka\Webtool;
/**
* 
*/
class Auth
{
	
	public function getProfile(){

	}

	public function login($user,$password){
		$md5 	= md5($password);	
		$user 	= UserModel::where('user','=',$user)->where('password')->get();
		if($user){
			$session = new \RKA\Session();
			$session->set('auth-identity',array(
				'id'		=> $user->id,
				'user'  	=> $user->user,
				'password' 	=> $user->password,
				'profile'	=> $user->name,
				'group'		=> $user->group,
			));

		}

	}

	public function logout()
	{
		return \RKA\Session::destroy();
	}

	public function userProfile()
	{
		$session = new \RKA\Session();
		return $session->get('auth-identity');
	}

	public static function isAllowed()
	{
		return "tes";
	}






}