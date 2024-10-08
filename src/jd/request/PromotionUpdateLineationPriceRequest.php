<?php

namespace JdJos\jd\request;
class PromotionUpdateLineationPriceRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.promotion.updateLineationPrice";
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

                        	                   			private $lineationPrice;
    	                        
	public function setLineationPrice($lineationPrice){
		$this->lineationPrice = $lineationPrice;
         $this->apiParas["lineationPrice"] = $lineationPrice;
	}

	public function getLineationPrice(){
	  return $this->lineationPrice;
	}

                        	                        	                   			private $applicant;
    	                        
	public function setApplicant($applicant){
		$this->applicant = $applicant;
         $this->apiParas["applicant"] = $applicant;
	}

	public function getApplicant(){
	  return $this->applicant;
	}

}





        
 

