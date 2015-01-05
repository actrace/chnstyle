<?php

namespace 串;

/**
 * (PHP 4, PHP 5)                 
 * 获取字符串长度                    
 * @param string $字符串            
 * @return int  返回目标字符串长度       
 */
function 度($字符串){
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
function 分($分隔符,$字符串,$最大数组单元=null){
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
function 合($数组,$分隔符=null){
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
function 查($字符串,$特定字符,$严格模式=true,$起始位置=0){
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
function 反引($字符串){
	return addslashes($字符串);
}

/**
 * (PHP 4, PHP 5)                 
 * 以 C 语言风格使用反斜线转义字符串中的字符
 * @param string  $字符串          要转义的字符。
 * @param string  $转义表串        设置范围
 * @return string  返回转义后的字符
 */
function 反引c($字符串, $转义表串){
	return addcslashes($字符串);
}
/**
 * (PHP 4, PHP 5)                 
 * 将二进制数据转换成十六进制表示
 * @param string  $字符串          要转义的字符。
 * @return string  返回 ASCII 字符串，为参数 str 的十六进制表示。转换使用字节方式，高四位字节优先。
 */
function 二转十六($字符串){
	return bin2hex($字符串);
}

/**
 * (PHP 4, PHP 5)                 
 * 返回指定的字符
 * @param int  $码          Ascii 码。
 * @return string  返回相对应于 ascii 所指定的单个字符。
 */
function 字($码){
	return chr($码);
}
/**
 * (PHP 4, PHP 5)                 
 * 返回字符的 ASCII 码值
 * @param string  $字          一个字符。
 * @return int  返回整型的 ASCII 码值。
 */
function 码($字){
	return ord($字);
}

/**
 * (PHP 4, PHP 5)                 
 * 将字符串分割成小块
 * @param int  $体          要分割的字符。
 * @param int  $长          分割的尺寸。
 * @param int  $尾          行尾序列符号。
 * @return string  返回分割后的字符。
 */
function 割块($体, $长 = 76, $尾 = "\r\n") {
	return chunk_split($码, $长, $尾);
}

/**
 * (PHP 4, PHP 5)                 
 * 转换 HTML 特殊字符成为HTML实体
 * @param int  $串          要转化的 HTML 字符串。
 * @param int  $志          二进制 标志
 * @param int  $编码        编码
 * @param int  $双编码否    如关闭此选项，则不会编码那些已经编码的部分
 * @return string  返回转换后的字符串。
 */
function 网页转义($串, $志 = null, $编码 = null, $双编码否 = true) {
	if ($志 === null) {
		$志 = ENT_COMPAT | ENT_HTML401;
	}
	if ($编码 === null) {
		$编码 = ini_get("default_charset");
	}
	return htmlspecialchars($串, $志, $编码, $双编码否);
}

/**
 * (PHP 4, PHP 5)                 
 * 将特殊的 HTML 实体转换回普通字符
 * @param int  $串          要转化的HTML字符串。
 * @param int  $志          二进制 标志
 * @return string  返回解码后的字符串。
 */
function 网页解义($串, $志 = null) {
	if ($志 === null) {
		$志 = ENT_COMPAT | ENT_HTML401;
	}
	return htmlspecialchars_decode($串, $志);
}

/**
 * (PHP 4, PHP 5)                 
 * 在字符串所有新行之前插入 HTML 换行标记
 * @param int  $串          输入字符串。
 * @param int  $志          是否使用 XHTML 兼容换行符。
 * @return string  返回调整后的字符串。
 */
function 换行转br($串, $是xhtml否？ = true) {
	if ($志 === null) {
		$志 = ENT_COMPAT | ENT_HTML401;
	}
	return nl2br($串);
}

