<?php
/**
 * 이 파일은 iModule 관리자모듈의 일부입니다. (https://www.imodules.io)
 * 
 * 컨텍스트를 지원하는 모듈목록을 가져온다.
 *
 * @file /modules/admin/process/@getContextModules.php
 * @author Arzz (arzz@arzz.com)
 * @license MIT License
 * @version 3.0.0
 * @modified 2018. 3. 18.
 */
if (defined('__IM__') == false) exit;

$modules = $this->Module->getContextModules();

$results->success = true;
$results->lists = $modules;
$results->count = count($modules);
?>