<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 01.07.2016
 * Time: 9:51
 */
    namespace app\controllers;

    use app\models\Comments;
    use app\models\MyForm;
    use yii\helpers\Html;
    use yii\web\Controller;

    class BlogController extends Controller
    {
        public function actions()
        {
            return [
                'error' => [
                    'class' => 'yii\web\ErrorAction',
                ],
            ];
        }
        public function actionHello()
        {
            $form = new MyForm();
            if($form->load(\Yii::$app->request->post()) && $form->validate())
            {
                $name = Html::encode($form->name);
                $email = Html::encode($form->email);
                return $this->render('success', ['name' => $name, 'email' => $email]);
            }
            return $this->render('hello', ['myform' => $form]);
        }
        public function actionComments()
        {
            $comments = Comments::find()->all();
            return $this->render('comments', ['comments' => $comments]);
        }
    }