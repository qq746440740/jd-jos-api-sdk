<?php

namespace JdJos\jd\request;
class ErsFangHouseResourceBatchSynHouseResourceImgRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ers.fang.houseResource.batchSynHouseResourceImg";
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
                                    	                   			private $paramStrin;
    	                        
	public function setParamStrin($paramStrin){
		$this->paramStrin = $paramStrin;
         $this->apiParas["paramStrin"] = $paramStrin;
	}

	public function getParamStrin(){
	  return $this->paramStrin;
	}

}





        
 

