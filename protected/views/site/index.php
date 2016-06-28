<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bienvenido <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
$this->widget('zii.widgets.CMenu', array(
        'items'=>array(
                array(
                        'label'=>CHtml::image(Yii::app()->request->baseUrl."/images/principal.png"),
                ),
        ),
        'encodeLabel' => false,
));
?>