<?php 
/**
阅读文章页面
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
	<h2 style="text-align:center;"><?php topflg($top); ?><?php echo $log_title; ?></h2>
	<p style="text-align:center;">作者：<?php blog_author($author); ?> 发布于：<?php echo gmdate('Y-n-j G:i', $date); ?> 浏览<?php echo $views; ?>次
	<?php blog_sort($logid); ?> <?php editflg($logid,$author); ?>
	</p>
	<hr>
	<?php echo $log_content; ?>
	<?php doAction('log_related', $logData); ?>
	<div id="nextlog"><p><?php neighbor_log($neighborLog); ?></p></div>
	<!-- Duoshuo Comment BEGIN -->
	<div class="ds-thread"></div>
	<script type="text/javascript">
	var duoshuoQuery = {short_name:"hs520cn"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = 'http://static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		|| document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- Duoshuo Comment END -->
	<div style="clear:both;"></div>
</div><!--end #contentleft-->
<?php
 include View::getView('footer');
?>