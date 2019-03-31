<?php
namespace App\Repositories\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface {
	protected $user;

	public function __construct(User $user){
		$this->user = $user;
	}

	public function registUser($request){
        $this->user->name = $request->name;
        $this->user->email = $request->email;
        $this->user->password = Hash::make($request->password);
        $this->user->save();
	}
}