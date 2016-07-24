<?php 
$this->breadcrumbs = array(
		Yii::t('ReviewModule.review', 'Reviews') => array('/review/reviewBackend/index'),
		"Отзывы",
);
?>
<div class="page-header">
    <h1>
        <?php echo Yii::t('ReviewModule.review', 'Отзывы'); ?>
        <small><?php echo Yii::t('ReviewModule.review', 'управление'); ?></small>
    </h1>
</div>
<div class="page-grid">
<span>Показывать по: </span>
<input type="hidden" value="<?php echo Yii::app()->request->csrfToken; ?>" name="YUPE_TOKEN" />
<?php 

$listperpage = $this->module->getEditableParams()['itemsperpage'];
$itemsperpage = $this->module->itemsperpage;
$nn=0;
foreach ($listperpage as $i){
	if($nn==$itemsperpage){
		$class='ipp active';
	}
	else{
		$class='ipp';
	}
	echo '<a href="/backend/review/review/?ipp='.$nn.'" style="padding: 10px;" class="'.$class.'" data-ipp="'.$nn.'">'.$i.'</a>';
$nn++;
}

?>

<a class="btn btn-primary" id="modSettings" href="/backend/modulesettings?module=review" >Настройки отзывов</a>
<?php $this->widget(
    'zii.widgets.CListView',
    array(
        'dataProvider' => $dataProvider,
    	'id' => 'reviewlist',
        'itemView'     => '_view',
    	'ajaxUpdate' => true,
    	'summaryText'  => '',
		'pager' => array(
        'maxButtonCount'=>'5',
),
    	'pagerCssClass'=>'pagination',
    )
); ?>
</div>
<script type="text/javascript">
 $( document ).ready(function() {
	 
bindevents();


});
 function bindevents (){
		$("span[id^='moderation']").live("change", function(){
			var parent = $(this).parent();
			var id = $(this).attr("id");
			id = id.split("_")[1];

			var mod = $(this).children("input[checked='checked']").val();
			
	 		$.ajax({
				  url: "/backend/review/review/Updatemoderation?id="+id+"&mod="+mod,
				}).done(function(html) {
					$(parent).children(".review-status").html(html);
				  //alert(html);
				}); 
			});
		
	        $(".delete").live("click", function() {
		        var url = $(this).attr("href"); 

		       
 		 		$.ajax({
					  url: url,
					}).done(function(html) {
						
					});  
				
	             $.fn.yiiListView.update("reviewlist", {
	            }); 
	            return false;
	            
	        });
	 }
</script>

<style>
.ipp{
	text-decoration: underline;
}
.ipp.active{
text-decoration: none;
}
</style>