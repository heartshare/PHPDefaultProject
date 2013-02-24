<!-- messages -->
<?php if(UserUtil::getDefaultWebUser()->hasFlash(Constants::SUCCESS_MESSAGE_ID)):?>
<div class="alert alert-success">
	<?php echo UserUtil::getDefaultWebUser()->getFlash(Constants::SUCCESS_MESSAGE_ID); ?>
</div>
<?php endif; ?>

<?php if(UserUtil::getDefaultWebUser()->hasFlash(Constants::ERROR_MESSAGE_ID)):?>
<div class="alert alert-error">
	<?php echo UserUtil::getDefaultWebUser()->getFlash(Constants::ERROR_MESSAGE_ID); ?>
</div>
<?php endif; ?>

<?php if(UserUtil::getDefaultWebUser()->hasFlash(Constants::INFO_MESSAGE_ID)):?>
<div class="alert alert-block">
	<?php echo UserUtil::getDefaultWebUser()->getFlash(Constants::INFO_MESSAGE_ID); ?>
</div>
<?php endif; ?>

<?php if(UserUtil::getDefaultWebUser()->hasFlash(Constants::WARNING_MESSAGE_ID)):?>
<div class="alert alert-info">
	<?php echo UserUtil::getDefaultWebUser()->getFlash(Constants::WARNING_MESSAGE_ID); ?>
</div>
<?php endif; ?>

<div style="clear: both"></div>
<!-- end: messages -->