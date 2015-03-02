<?php
/**
 * Plugin Name: 网站统计插件
 * Version: 1.2 
 * Description: 在侧边栏显示网站的文章数，说说数，评论数。
 * Author: 叶雨梧桐
 * Author Email:825591305@qq.com
 * Author URL: http://blog.gt520.com
 */
!defined('EMLOG_ROOT') && exit('access deined!');

function count_show()
	{  
		echo'<font  style="font-weight: bold; font-size:120%">站点统计</font><br><br>';
		$CACHE = Cache::getInstance();
        	$sta_cache = $CACHE->readCache('sta');

			echo'<font  style="line-height: 150%; font-size:120%">';
			echo "文章总计&nbsp;".$sta_cache['lognum']."&nbsp;&nbsp;篇";
			echo'<br>';
			echo "说说总计&nbsp;".$sta_cache['twnum']."&nbsp;&nbsp;条";
			echo'<br>';
			echo "评论总计&nbsp;".$sta_cache['comnum_all']."&nbsp;&nbsp;条";
			echo'</font>';
          
	}

	addAction('diff_side','count_show');//挂钩调用
