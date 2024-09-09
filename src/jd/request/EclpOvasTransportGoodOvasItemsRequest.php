<?php

namespace JdJos\jd\request;
class EclpOvasTransportGoodOvasItemsRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.ovas.transportGoodOvasItems";
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
    private  $request;

    public function setRequest($request){
        $this->apiParas['request'] = $request;
    }
    public function getRequest(){
        return $this->apiParas['request'];
    }
}

?>