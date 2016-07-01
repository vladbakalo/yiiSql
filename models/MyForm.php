<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 01.07.2016
 * Time: 10:09
 */

namespace app\models;


use yii\base\Model;

class MyForm extends Model
{
    public $name;
    public $email;
    public function rules()
    {
        return [[['email', 'name'],'required'], ['email', 'email']];
    }
}