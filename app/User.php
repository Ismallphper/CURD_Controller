<?php
namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_table';
    public $primaryKey = 'id';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */

    protected $guarded = ['id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    public $timestamps = false;

    //查
    public function userTest()
    {
        return view('test');
    }

    public function userRead()
    {
        return $this->where('id',2)->get();
    }

    //增加
    public function userAdd()
    {
        $res = ['name'=>'wppp','age'=>23];
        $this->fill($res);
        $this->save();
    //方法2
//        $this->name='user11';
//        $this->age = '22';
//        $this->save();
    }

    //更新
    public function userUpdate()
    {
        //方法1
        $user = $this->where('id','<','2');
        $user->update(['name'=>'wp9','age'=>'33']);
        //方法2
//        $user = $this->find(3);
//        $user->name='user_test';
//        $user->age = '12';
//        $user->save();
    }

    //删除
    public function userDelete()
    {
        $user = $this->find(2);
        $user->delete();
    }
}
