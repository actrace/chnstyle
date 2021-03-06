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

/**
 * (PHP 4, PHP 5)                 
 * 将输入字符串里面的所有小写字符都转换成大写字符                
 * @param string  $字符串         
 * @return string  返回字符串结果   
 */
function 转换为大写($字符串){
	return strtoupper($字符串);
}

/**
 * (PHP 4, PHP 5)                 
 * 将输入字符串里面的所有大写字符都转换成小写字符                
 * @param string  $字符串         
 * @return string  返回字符串结果   
 */
function 转换为小写($字符串){
	return strtolower($字符串);
}

/**
 * (PHP 4, PHP 5)                 
 * 获得字符串中指定位置的字符
 * 关于$开始位置:
 * # 如果 值 是非负数，返回的字符串将从 $字符串 的 $开始位置 开始，从 0 开始计算。例如，在字符串 “abcdef” 中，在位置 0 的字符是 “a”，位置 2 的字符串是 “c” 等等。
 * # 如果 值 是负数，返回的字符串将从 $字符串 结尾处向前数第 $开始位置 个字符开始。
 * # 如果 $字符串 的长度小于或等于 $开始位置，将返回 FALSE。
 * 关于$截止位置:
 * # 如果提供了正数的 值，返回的字符串将从 $开始位置 处开始最多包括 $截止为止 个字符（取决于 $字符串 的长度）。 
 * # 如果提供了负数的 值，那么 $字符串 末尾处的许多字符将会被漏掉（若 $开始位置 是负数值则从字符串尾部算起）。如果 $开始位置 不在这段文本中，那么将返回一个空字符串。 
 * # 如果提供的值是0,或者没有提供，返回的子字符串将从 $开始位置 开始直到字符串结尾。       
 * @param string  $字符串
 * @param string  $开始位置
 * @param string  $截止位置(可选)           
 * @return string  返回字符串结果   
 */
function 字符串截取($字符串,$开始位置,$截止位置=0){
	if($截止位置===0){
		return substr($字符串, $开始位置);
	}else{
		return substr($字符串, $开始位置, $截止位置);
	}
}