<?php 
	namespace app\modules\controllers;

	use yii\web\Controller;
	use Yii;
	use app\models\Admin;

	class PublicController extends Controller{


		public function actionLogin(){


			if(Yii::$app->request->isPost){

				$post = Yii::$app->request->post();

				$admin = new Admin;

				$admin->params = $post;
				
				if($admin->doLogin()){
				}else{
				}
			}

			

			return $this->render('login');
		}

	}

 ?>