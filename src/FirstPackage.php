<?php
/**  
 * This is a test class
 * 
 * @detail null
 * @author Name <email@email.com>
 * @date 2018-06-17
 * @version v1.0
 */

namespace Test;

class FirstPackage
{
    /**  
    * This is a test function
    * 
    * @access public 
    * @param string $arg1 参数一的说明 
    * @param int    $arg2 参数二的说明 
    * @param mixed  $mixed 这是一个混合类型 
    * @return array 返回类型
    * @author Name <email@email.com>
    * @date 2018-06-17
    */  
    public function testFunc()
    {
        echo 'This is a test function';
    }

    /**  
    * This is a test function
    * 
    * @access public 
    * @param string $arg1 参数一的说明 
    * @param int    $arg2 参数二的说明 
    * @param mixed  $mixed 这是一个混合类型 
    * @return array 返回类型
    * @author Name <email@email.com>
    * @date 2018-06-17
    */  
    public function func2()
    {
        echo 'func2';
    }
}