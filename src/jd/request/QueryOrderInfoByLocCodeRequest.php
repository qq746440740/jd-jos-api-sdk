<?php

namespace JdJos\jd\request;
class QueryOrderInfoByLocCodeRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.queryOrderInfoByLocCode";
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
                                    	                        	                   			private $couponCode;
    	                        
	public function setCouponCode($couponCode){
		$this->couponCode = $couponCode;
         $this->apiParas["couponCode"] = $couponCode;
	}

	public function getCouponCode(){
	  return $this->couponCode;
	}

}





        
 

