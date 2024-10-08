<?php

namespace JdJos\jd\request;
class EdiSdvSalesserialpayGetRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.sdv.salesserialpay.get";
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
                                                        		                                    	                   			private $recordDate;
    	                        
	public function setRecordDate($recordDate){
		$this->recordDate = $recordDate;
         $this->apiParas["recordDate"] = $recordDate;
	}

	public function getRecordDate(){
	  return $this->recordDate;
	}

                        	                   			private $pageNum;
    	                        
	public function setPageNum($pageNum){
		$this->pageNum = $pageNum;
         $this->apiParas["pageNum"] = $pageNum;
	}

	public function getPageNum(){
	  return $this->pageNum;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                        	                        	                            }





        
 

