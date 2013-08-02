<?php $this->_extends('_layouts/default_layout'); ?>

<?php $this->_block('contents'); ?>

<h2>账户信息</h2>
<?php echo $form->start();?>
<table class="dataform" border="0" cellspacing="0" cellpadding="0" width="100%">
<?php
foreach ($form->elements() as $e):
    $id = $e->id;
?>    
    <tr>
        <td width="80"><?php if ($e->_label): ?><label for="<?php echo $id; ?>"><?php echo h($e->_label); ?></label><?php endif; ?></td>
        <td><?php echo Q::control($e->_ui, $id, $e->attrs()); ?>
        <?php if (!$e->isValid()): ?><span class="error"><?php echo nl2br(h(implode("，", $e->errorMsg()))); ?></span><?php endif; ?>

        <?php if ($id == 'user_pass'  && $e->isValid()): ?><span class="error">不改密码请留空即可。</span><?php endif; ?>
</td>
    </tr>
<?php endforeach;?>

</table>
<input class="meta-button" value="修改" type="submit" />  <input onclick="location.href='<?=url('default::account/signout');?>';" class="meta-button" value="退出" type="button" />
<?php echo $form->close();?>


<?php $this->_endblock('contents'); ?>
