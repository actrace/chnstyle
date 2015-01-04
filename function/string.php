<?php

/**
 * (PHP 4, PHP 5)                 
 * 获取字符串长度                    
 * @param string $字符串            
 * @return int  返回目标字符串长度       
 */
function 字符串长度($字符串){
	return strlen($字符串);
}

/**
 * (PHP 4, PHP 5)                 
 * 使用一个字符串分隔符分割另一个字符串,得到一个数组.                    
 * @param string $分隔符       用于在 $字符串 中进行切割数组的字符串.
 * @param string $字符串       此变量将会被分隔符切割成数组
 * @param int    $最大数组单元  此项为可选项,当传入了此变量时,所返回的最大数组单元数将不超过设置值.如果值是0,则会当做1.如果值是负数，则返回除了倒数设置值个元素外的所有元素。          
 * @return array  返回一个数组      
 */
function 字符串切割为数组($分隔符,$字符串,$最大数组单元=null){
	if($最大数组单元===null){
		return explode($分隔符, $字符串);
	}else{
		return explode($分隔符, $字符串, $最大数组单元);
	}
}