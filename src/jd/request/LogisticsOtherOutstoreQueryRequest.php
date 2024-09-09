<?php

namespace JdJos\jd\request;
class LogisticsOtherOutstoreQueryRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.otherOutstore.query";
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
                                    	                   			private $joslOutboundNo;
    	                                                                        
	public function setJoslOutboundNo($joslOutboundNo){
		$this->joslOutboundNo = $joslOutboundNo;
         $this->apiParas["josl_outbound_no"] = $joslOutboundNo;
	}

	public function getJoslOutboundNo(){
	  return $this->joslOutboundNo;
	}

                        	}





        
 

