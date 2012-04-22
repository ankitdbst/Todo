<div class="view">

    <b><?php echo CHtml::encode($data->item_name); ?></b>
    <div id="options">
        <?php
            $imageUrl = CHtml::image('images/update.png');
            echo CHtml::link(
                $imageUrl,
                array('items/update', 'id'=>$data->id));
        ?>
        <?php
            $imageUrl = CHtml::image('images/delete.png');
            echo CHtml::link(
                $imageUrl,
                 array('items/delete','id'=>$data->id),
                 array('confirm' => 'Are you sure?')
            );
        ?>
    </div>
    <br />


</div>
