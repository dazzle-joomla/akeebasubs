<? defined('KOOWA') or die('Restricted access'); ?>

<?= @helper('behavior.tooltip'); ?>
<!--
<script src="media://lib_koowa/js/koowa.js?<?=AKEEBASUBS_VERSIONHASH?>" />
<style src="media://com_akeebasubs/css/backend.css?<?=AKEEBASUBS_VERSIONHASH?>" />
-->

<form action="<?= @route('id='.$level->id) ?>" method="post" class="-koowa-form">
<input type="hidden" name="_visual" value="1" />

	<fieldset id="levels-basic">
		<legend><?= @text('COM_AKEEBASUBS_LEVEL_BASIC_TITLE'); ?></legend>
		
		<label for="title_field" class="main title"><?= @text('COM_AKEEBASUBS_LEVEL_FIELD_TITLE'); ?></label>
		<input type="text" size="20" id="title_field" name="title" class="title" value="<?= @escape($level->title) ?>" />
		<br/>
		
		<span class="hasTip" title="<?= @text( 'COM_AKEEBASUBS_LEVEL_FIELD_SLUG_TIP' );?>::<?= @text( 'Slug Tip' ); ?>">
		<label for="slug_field" class="main" class="mainlabel"><?= @text('COM_AKEEBASUBS_LEVEL_FIELD_SLUG'); ?></label>					
		</span>
		<input id="slug_field" type="text" name="slug" class="slug" value="<?= $level->slug; ?>" /><br />
		
		<label for="enabled" class="main" class="mainlabel"><?= @text('Published'); ?></label>
		<span>
			<?= @helper('select.booleanlist', array('name' => 'enabled', 'selected' => $level->enabled)); ?>
		</span>
		<br/>
		
		<label for="image_field" class="main"><?= @text('COM_AKEEBASUBS_LEVEL_FIELD_IMAGE'); ?></label>
		<?=@helper('image.listbox', array('name' => 'image','directory' => JPATH_IMAGES.(version_compare(JVERSION, '1.6.0', 'ge') ? '/' : '/stories'), 'filetypes' => array('swf', 'gif', 'jpg', 'png', 'bmp'), 'deselect' => false) ) ?>
		<br />					

		<label for="duration_field" class="main"><?= @text('COM_AKEEBASUBS_LEVEL_FIELD_DURATION'); ?></label>
		<input type="text" size="6" id="duration_field" name="duration" value="<?= (int)$level->duration ?>" />
		<br/>

		<label for="price_field" class="main"><?= @text('COM_AKEEBASUBS_LEVEL_FIELD_PRICE'); ?></label>
		<span>
			<input type="text" size="15" id="price_field" name="price" value="<?= $level->price ?>" style="float: none" />
			<?=KFactory::get('com://admin/akeebasubs.model.configs')->getConfig()->currencysymbol?>
		</span>
		<br/>
		
		<label for="notify1_field" class="main"><?= @text('COM_AKEEBASUBS_LEVEL_FIELD_NOTIFY1'); ?></label>
		<input type="text" size="6" id="notify1_field" name="notify1" value="<?= (int)$level->notify1 ?>" />
		<br/>
		
		<label for="notify2_field" class="main"><?= @text('COM_AKEEBASUBS_LEVEL_FIELD_NOTIFY2'); ?></label>
		<input type="text" size="6" id="notify2_field" name="notify2" value="<?= (int)$level->notify2 ?>" />
	</fieldset>
	
	<fieldset>
		<legend><?= @text('COM_AKEEBASUBS_LEVEL_FIELD_DESCRIPTION') ?></legend>
		<?= @editor( array('name' => 'description', 'width' => '450', 'height' => '210', 'cols' => '50', 'rows' => '10', 'buttons' => false)); ?>
	</fieldset>

	<div class="akeebasubs-clear"></div>
		
	<fieldset class="akeebasubs-float-left">
		<legend><?= @text('COM_AKEEBASUBS_LEVEL_FIELD_ORDERTEXT') ?></legend>
		<?= @editor( array('name' => 'ordertext', 'width' => '100%', 'height' => '391', 'cols' => '100', 'rows' => '20')); ?>
	</fieldset>

	<fieldset class="akeebasubs-float-left">
		<legend><?= @text('COM_AKEEBASUBS_LEVEL_FIELD_CANCELTEXT') ?></legend>
		<?= @editor( array('name' => 'canceltext', 'width' => '100%', 'height' => '391', 'cols' => '100', 'rows' => '20')); ?>
	</fieldset>

</form>