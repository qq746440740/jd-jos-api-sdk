<?php

namespace JdJos\jd\request;
class UeRecoveryOrderRecycleSyncDispatchRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ue.recovery.order.recycleSyncDispatch";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                                        		                                    	                   			private $code;
    	                        
	public function setCode($code){
		$this->code = $code;
         $this->apiParas["code"] = $code;
	}

	public function getCode(){
	  return $this->code;
	}

                        	                   			private $appid;
    	                        
	public function setAppid($appid){
		$this->appid = $appid;
         $this->apiParas["appid"] = $appid;
	}

	public function getAppid(){
	  return $this->appid;
	}

                                            		                                    	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                        	                   			private $engineerIdCard;
    	                        
	public function setEngineerIdCard($engineerIdCard){
		$this->engineerIdCard = $engineerIdCard;
         $this->apiParas["engineerIdCard"] = $engineerIdCard;
	}

	public function getEngineerIdCard(){
	  return $this->engineerIdCard;
	}

                        	                   			private $engineerName;
    	                        
	public function setEngineerName($engineerName){
		$this->engineerName = $engineerName;
         $this->apiParas["engineerName"] = $engineerName;
	}

	public function getEngineerName(){
	  return $this->engineerName;
	}

                        	                   			private $engineerMobile;
    	                        
	public function setEngineerMobile($engineerMobile){
		$this->engineerMobile = $engineerMobile;
         $this->apiParas["engineerMobile"] = $engineerMobile;
	}

	public function getEngineerMobile(){
	  return $this->engineerMobile;
	}

                                                        }





        
 

