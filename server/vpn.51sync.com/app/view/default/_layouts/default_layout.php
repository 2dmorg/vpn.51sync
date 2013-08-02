<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php $this->_block('title'); ?><?=$_META_TITLE;?><?php $this->_endblock('title'); ?></title>
    <meta name="keywords" content="<?php $this->_block('keywords'); ?><?=$_META_KEYWORDS;?><?php $this->_endblock('keywords'); ?>" />
    <meta name="description" content="<?php $this->_block('description'); ?><?=$_META_DESCRIPTION;?><?php $this->_endblock('description'); ?>" />
    <link rel="stylesheet" href="<?=$_BASE_DIR;?>css/style.css" />
    <script type="text/javascript">var _speedMark = new Date();</script>
</head>
<body>
<div class="wapper">
    <div class="nav">
        <ul>
            <li<?php ic($_UDI,'default::default/index',' class="current"');?>><a href="<?=url('default::default/index');?>">首页</a></li>

            <?php if(!$_USER_ID):?>
            <li<?php ic($_UDI,'default::default/signin,default::default/signup',' class="current"');?>><a href="<?=url('default::default/signin');?>">登陆系统</a></li>
            <?php else:?>
            <li<?php ic($_UDI,'default::account/index',' class="current"');?>><a href="<?=url('default::account');?>">我的账户</a></li>
            <li<?php ic($_UDI,'default::service/index',' class="current"');?>><a href="<?=url('default::service');?>">我的服务</a></li>
            <li<?php ic($_UDI,'default::service/invoice',' class="current"');?>><a href="<?=url('default::service/invoice');?>">我的账单</a></li>
            <?php endif;?>
            <?php if(Q::ini('isAdmin')):?>
            <li style="float: right;"><a href="<?=url('manage::default/index');?>">管理中心</a></li>
            <?php else:?>
            <?php endif;?>
            <div style="clear:both;"></div>

        </ul>
        <div style="clear:both;"></div>
    </div>
    <div class="main">
        <?php echo $_MSG ? '<div class="global_msg">'.$_MSG.'</div>':'';?>
        <?php $this->_block('contents'); ?><?php $this->_endblock(); ?>
    </div>
    <div class="copyright"><p></p><p>在线咨询:<a target="_blank" href="http://www.taobao.com/webww/ww.php?ver=3&touid=qibinghua&siteid=cntaobao&status=1&charset=utf-8" ><img border="0" src="http://amos.alicdn.com/online.aw?v=2&uid=qibinghua&site=cntaobao&s=1&charset=utf-8" alt="咨询事宜" /></a> <a target=blank href=tencent://message/?uin=458940&Site=VPN&Menu=yes><img border="0" SRC=http://wpa.qq.com/pa?p=1:458940:10 alt="相关咨询"></a></p>
    <p>&copy; 2012 <?=Q::ini('appini/meta/title');?> </p>
    </div>
    <?= ($_USER_ID == 1) ? '':Q::ini('appini/analytics');?>
</div>
</body>
</html>
