<?php
$this->breadcrumbs=array(
    'Items'=>array('index'),
    $model->id=>array('view','id'=>$model->id),
    'Update',
);

?>

<h1>Update Todo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
