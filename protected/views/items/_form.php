<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'items-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model, '', ''); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'item_name', array('label'=>'Todo')); ?>
        <?php echo $form->textField($model,'item_name',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Add' : 'Update'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
