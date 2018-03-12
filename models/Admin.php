<?php

namespace app\models;

use yii\base\Model;

use yii\db\ActiveRecord;


class Admin extends ActiveRecord
{	
	public $params;

    public static function tableName()
    {
        return '{{%admin}}';
    }

    public function doLogin(){

    	$params = $this->params;

    	$user = $this->getUserByUserName($params['username']);

    	$salt = $user['salt'];

    	$where = ['username'=>$params['username'],'password'=>md5($params['password'].$salt)];

    	$user = $this->find()->where($where)->one();

    	if($user){
    		return true;
    	}else{
    		return false;
    	}
    }

    public function getUserByUserName($username){

    	$where = ['username'=>$username];

    	$user = $this->find()->where($where)->one();

    	return $user;
    }
}
