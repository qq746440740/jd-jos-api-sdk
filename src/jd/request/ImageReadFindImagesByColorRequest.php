<?php

namespace JdJos\jd\request;
class ImageReadFindImagesByColorRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.image.read.findImagesByColor";
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

                        	                   			private $colorId;
    	                        
	public function setColorId($colorId){
		$this->colorId = $colorId;
         $this->apiParas["colorId"] = $colorId;
	}

	public function getColorId(){
	  return $this->colorId;
	}

}





        
 

