<?php

namespace JdJos\jd\request;
class NewWareVenderSkusQueryRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.new.ware.vender.skus.query";
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
                                    	                        	                   			private $index;
    	                        
	public function setIndex($index){
		$this->index = $index;
         $this->apiParas["index"] = $index;
	}

	public function getIndex(){
	  return $this->index;
	}

}





        
 

