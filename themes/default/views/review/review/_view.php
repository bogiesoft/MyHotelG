<div style="width: 970px; float:left; background:#F4F4F4; margin:0 0 15px 0; padding:10px; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; border: 1px solid rgb(227, 227, 227);">
		<div style="float:left; width:970px;">
		 <div style="float:left; padding:0 15px 0 0; color:#747474; font-size:14px;">
			<?php echo CHtml::encode(Yii::app()->dateFormatter->format("dd MMMM yyyy", $data->date_created)); ?>
		   </div>
		   <div style="float:left; padding:0 15px 0 0; color:#747474; font-size:14px;">
		   <?php echo CHtml::encode( $data->username); ?>
		   </div>
		</div>
		<?php 
		
		?>

	<div style="float:left; width:970px;">
			<p> <?php echo $data->text; ?></p>
	</div>

</div>
