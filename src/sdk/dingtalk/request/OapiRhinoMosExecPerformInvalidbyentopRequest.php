<?php
/**
 * dingtalk API: dingtalk.oapi.rhino.mos.exec.perform.invalidbyentop request
 * 
 * @author auto create
 * @since 1.0, 2020.04.20
 */
class OapiRhinoMosExecPerformInvalidbyentopRequest
{
	/** 
	 * 入参
	 **/
	private $req;
	
	private $apiParas = array();
	
	public function setReq($req)
	{
		$this->req = $req;
		$this->apiParas["req"] = $req;
	}

	public function getReq()
	{
		return $this->req;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.rhino.mos.exec.perform.invalidbyentop";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
