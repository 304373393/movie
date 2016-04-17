<?php
//if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

/**
 * 系统调试设置
 * 项目正式部署后请设置为false
 */
define('APP_DEBUG', true );
/**
 * 应用目录设置
 * 安全期间，建议安装调试完成后移动到非WEB目录
 */
define ( 'APP_PATH', './Application/' );
/**
 * 缓存目录设置
 * 此目录必须可写，建议移动到非WEB目录
 */
define ( 'RUNTIME_PATH', './Runtime/' );
/**
 * 引入核心入口
 * ThinkPHP亦可移动到WEB以外的目录
 */
/**
 *自动生成 Admin 只用一次
 */
//define('BIND_MODULE','Admin');
define('SITE','http://www.movie.com/');
define('A_CSS',SITE.'Public/css/');
define('A_JS',SITE.'Public/js/');
define('A_IMG',SITE.'Public/Admin/img/');
define('H_IMG',SITE.'Public/IMG/');
require './ThinkPHP/ThinkPHP.php';# Ansvod
