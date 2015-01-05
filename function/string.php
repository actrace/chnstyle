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

/**
 * (PHP 4, PHP 5)                 
 * 此函数会将一维数组的所有单元内的变量进行字符串连接合并.                    
 * @param array  $数组       一维数组.
 * @param string $分隔符     当设置此变量,会在每个数组单元连接时加入此字符串.     
 * @return string  返回字符串     
 */
function 数组合并为字符串($数组,$分隔符=null){
	if($分隔符===null){
		return implode($数组);
	}else{
		return implode($数组, $分隔符);
	}
}

/**
 * (PHP 4, PHP 5)                 
 * 在一个字符串变量里查找特定字符串首次出现的位置
 * 函数可能返回布尔值 FALSE，但也可能返回等同于 FALSE 的非布尔值。应使用 === 运算符来测试此函数的返回值(是否找到特定字符串)。                    
 * @param string $字符串      用于查找的字符串.    
 * @param string $特定字符    需要找到的字符串
 * @param bool   $严格模式    严格模式默认为开启状态,当开启严格模式时,完整区分大小写,关闭时则不区分.  
 * @param int    $起始位置    如果提供了此参数，搜索会从字符串该字符数的起始位置开始工作.  
 * @return mixed  当找到特定字符时,返回int类型的位置值,找不到则返回bool类型的false.
 */
function 查找字符串位置($字符串,$特定字符,$严格模式=true,$起始位置=0){
	if($严格模式===true){
		return strpos($字符串,$特定字符,$起始位置);
	}else{
		return stripos($字符串,$特定字符,$起始位置);
	}
}

/**
 * (PHP 4, PHP 5)                 
 * 使用反斜线引用字符串.
 * 返回字符串，该字符串为了数据库查询语句等的需要在某些字符前加上了反斜线。这些字符是单引号（'）、双引号（"）、反斜线（\）与 NUL（NULL 字符）。                    
 * @param string  $字符串         
 * @return string  返回字符串结果   
 */

function 反斜线引用字符串($字符串){
	return addslashes($字符串);
}

