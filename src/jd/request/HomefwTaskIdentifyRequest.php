<?php

namespace JdJos\jd\request;
class HomefwTaskIdentifyRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.homefw.task.identify";
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
                                    	                        	                   			private $venderCode;
    	                        
	public function setVenderCode($venderCode){
		$this->venderCode = $venderCode;
         $this->apiParas["venderCode"] = $venderCode;
	}

	public function getVenderCode(){
	  return $this->venderCode;
	}

                        	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                        	                   			private $indentifyCode;
    	                        
	public function setIndentifyCode($indentifyCode){
		$this->indentifyCode = $indentifyCode;
         $this->apiParas["indentifyCode"] = $indentifyCode;
	}

	public function getIndentifyCode(){
	  return $this->indentifyCode;
	}

}





        
 

