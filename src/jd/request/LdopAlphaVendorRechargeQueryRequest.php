<?php

namespace JdJos\jd\request;
class LdopAlphaVendorRechargeQueryRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.alpha.vendor.recharge.query";
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
                                                        		                                    	                   			private $vendorCode;
    	                        
	public function setVendorCode($vendorCode){
		$this->vendorCode = $vendorCode;
         $this->apiParas["vendorCode"] = $vendorCode;
	}

	public function getVendorCode(){
	  return $this->vendorCode;
	}

                        	                   			private $providerId;
    	                        
	public function setProviderId($providerId){
		$this->providerId = $providerId;
         $this->apiParas["providerId"] = $providerId;
	}

	public function getProviderId(){
	  return $this->providerId;
	}

                        	                   			private $branchCode;
    	                        
	public function setBranchCode($branchCode){
		$this->branchCode = $branchCode;
         $this->apiParas["branchCode"] = $branchCode;
	}

	public function getBranchCode(){
	  return $this->branchCode;
	}

                        	                   			private $startTime;
    	                        
	public function setStartTime($startTime){
		$this->startTime = $startTime;
         $this->apiParas["startTime"] = $startTime;
	}

	public function getStartTime(){
	  return $this->startTime;
	}

                        	                   			private $endTime;
    	                        
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                            }





        
 

