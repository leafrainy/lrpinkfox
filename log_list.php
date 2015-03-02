<?php 
/**
首页文章列表部分
Template Name:LR_PinkFox
Description:粉色清新，简洁优雅，
Version:1.3
Author:叶雨梧桐
Author Url:http://blog.gt520.com
Sidebar Amount:0
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>

<div id="content">
<div id="contentleft">
<?php doAction('index_loglist_top'); ?>

<?php 
if (!empty($logs)):
foreach($logs as $value): 
?><div id="list">

	<h2><?php topflg($value['top']); ?><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></h2>
	<div class="date">作者：<?php blog_author($value['author']); ?> 发布于：<?php echo gmdate('Y-n-j', $value['date']); ?> <?php blog_tag($value['logid']); ?>
	<a href="<?php echo $value['log_url']; ?>">浏览(<?php echo $value['views']; ?>)</a>
	<?php editflg($value['logid'],$value['author']); ?>
	</div>
     <?php echo subString(strip_tags($value['content']),0,100,"..."); ?>
	<div style="clear:both;"></div>
	</div>
<?php 
endforeach;
else:
?>
	<h2>未找到</h2>
	<p>抱歉，没有符合您查询条件的结果。</p>
<?php endif;?>

<div class="navigation"><div class="pagination"><?php echo $page_url;?></div></div>

<div id="listlink">
<ul class="fixed">
<li>友情链接:</li>
<ul><?php widget_link($title);?></ul>
</div>
</div><!-- end #contentleft-->
<?php
 include View::getView('footer');
?>