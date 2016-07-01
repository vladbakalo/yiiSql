<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 01.07.2016
 * Time: 9:57
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

echo "$a  -- $b";?>
<?php $f = ActiveForm::begin();?>
<?php
    echo $f->field($myform, 'name');
    echo $f->field($myform, 'email');
    echo Html::submitButton('Send');
    ActiveForm::end();

?>
