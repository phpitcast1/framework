<?php if (!defined('THINK_PATH')) exit(); echo ($data1); ?>
<hr />
<?php if($data2['sex'] == '男' ): ?>强大
    <?php else: ?> 需要保护<?php endif; ?>

<hr />
<?php if(is_array($data3)): foreach($data3 as $key=>$temp): echo ($temp["name"]); ?> <br /><?php endforeach; endif; ?>