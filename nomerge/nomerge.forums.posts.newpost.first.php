<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=forums.posts.newpost.first
[END_COT_EXT]
==================== */

/**
* Nomerge Plugin / forums.posts.newpost.first hook
*
* @package nomerge
* @author Dmitri Beliavski
* @copyright (c) 2023 sed.by
*/

defined('COT_CODE') or die('Wrong URL');

$nomergeArray = explode(',', str_replace(' ', '', Cot::$cfg['plugin']['nomerge']['topics']));
(!empty($nomergeArray) && in_array($q, $nomergeArray)) && $merge = false;
