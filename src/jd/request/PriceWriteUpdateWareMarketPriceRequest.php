<?php

namespace JdJos\jd\request;
class PriceWriteUpdateWareMarketPriceRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.price.write.updateWareMarketPrice";
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
                                                        		                                    	                        	                        	                                                    	                        	                   			private $wareId;
    	                        
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["wareId"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                        	                   			private $marketPrice;
    	                        
	public function setMarketPrice($marketPrice){
		$this->marketPrice = $marketPrice;
         $this->apiParas["marketPrice"] = $marketPrice;
	}

	public function getMarketPrice(){
	  return $this->marketPrice;
	}

}





        
 

