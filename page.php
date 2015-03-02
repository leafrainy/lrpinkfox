<?php 
/**
自建页面模板
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
	<h2 style="text-align:center;"><?php echo $log_title; ?></h2>
	<?php echo $log_content; ?>
	<br/>
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