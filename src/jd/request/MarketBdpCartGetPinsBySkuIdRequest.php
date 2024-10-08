<?php

namespace JdJos\jd\request;
class MarketBdpCartGetPinsBySkuIdRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.market.bdp.cart.getPinsBySkuId";
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
                                    	                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $days;
    	                        
	public function setDays($days){
		$this->days = $days;
         $this->apiParas["days"] = $days;
	}

	public function getDays(){
	  return $this->days;
	}

}





        
 

