<?php

namespace JdJos\jd\request;
class AscAuditReasonListRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.asc.audit.reason.list";
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
                                    	                        	                        	                                            		                                    	                   			private $buId;
    	                        
	public function setBuId($buId){
		$this->buId = $buId;
         $this->apiParas["buId"] = $buId;
	}

	public function getBuId(){
	  return $this->buId;
	}

                        	                   			private $operatePin;
    	                        
	public function setOperatePin($operatePin){
		$this->operatePin = $operatePin;
         $this->apiParas["operatePin"] = $operatePin;
	}

	public function getOperatePin(){
	  return $this->operatePin;
	}

                        	                   			private $operateNick;
    	                        
	public function setOperateNick($operateNick){
		$this->operateNick = $operateNick;
         $this->apiParas["operateNick"] = $operateNick;
	}

	public function getOperateNick(){
	  return $this->operateNick;
	}

                        	                   			private $serviceId;
    	                        
	public function setServiceId($serviceId){
		$this->serviceId = $serviceId;
         $this->apiParas["serviceId"] = $serviceId;
	}

	public function getServiceId(){
	  return $this->serviceId;
	}

                        	                   			private $parentCode;
    	                        
	public function setParentCode($parentCode){
		$this->parentCode = $parentCode;
         $this->apiParas["parentCode"] = $parentCode;
	}

	public function getParentCode(){
	  return $this->parentCode;
	}

                        	                   			private $bizType;
    	                        
	public function setBizType($bizType){
		$this->bizType = $bizType;
         $this->apiParas["bizType"] = $bizType;
	}

	public function getBizType(){
	  return $this->bizType;
	}

                            }





        
 

