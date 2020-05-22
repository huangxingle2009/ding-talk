<?php

/**
 * 请求对象
 * @author auto create
 */
class InviteDataQuery
{
	
	/** 
	 * 修改时间，输入上次查询时间，初始传1970-01-01对应的毫秒值
	 **/
	public $cursor;
	
	/** 
	 * 每次查询数据量，最大100
	 **/
	public $size;
	
	/** 
	 * 状态0:无效（包括过程数据），1:有效(默认)
	 **/
	public $status;	
}
?>