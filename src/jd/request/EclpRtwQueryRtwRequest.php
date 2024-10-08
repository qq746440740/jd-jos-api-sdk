<?php

namespace JdJos\jd\request;
class EclpRtwQueryRtwRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.rtw.queryRtw";
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
                                                        		                                    	                   			private $eclpSoNo;
    	                        
	public function setEclpSoNo($eclpSoNo){
		$this->eclpSoNo = $eclpSoNo;
         $this->apiParas["eclpSoNo"] = $eclpSoNo;
	}

	public function getEclpSoNo(){
	  return $this->eclpSoNo;
	}

                        	                   			private $eclpRtwNo;
    	                        
	public function setEclpRtwNo($eclpRtwNo){
		$this->eclpRtwNo = $eclpRtwNo;
         $this->apiParas["eclpRtwNo"] = $eclpRtwNo;
	}

	public function getEclpRtwNo(){
	  return $this->eclpRtwNo;
	}

                        	                   			private $isvRtwNum;
    	                        
	public function setIsvRtwNum($isvRtwNum){
		$this->isvRtwNum = $isvRtwNum;
         $this->apiParas["isvRtwNum"] = $isvRtwNum;
	}

	public function getIsvRtwNum(){
	  return $this->isvRtwNum;
	}

                        	                   			private $warehouseNo;
    	                        
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouseNo"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                        	                   			private $reson;
    	                        
	public function setReson($reson){
		$this->reson = $reson;
         $this->apiParas["reson"] = $reson;
	}

	public function getReson(){
	  return $this->reson;
	}

                        	                   			private $orderInType;
    	                        
	public function setOrderInType($orderInType){
		$this->orderInType = $orderInType;
         $this->apiParas["orderInType"] = $orderInType;
	}

	public function getOrderInType(){
	  return $this->orderInType;
	}

                        	                   			private $queryBatAttrFlag;
    	                        
	public function setQueryBatAttrFlag($queryBatAttrFlag){
		$this->queryBatAttrFlag = $queryBatAttrFlag;
         $this->apiParas["queryBatAttrFlag"] = $queryBatAttrFlag;
	}

	public function getQueryBatAttrFlag(){
	  return $this->queryBatAttrFlag;
	}

                        	                   			private $startCreateTime;
    	                        
	public function setStartCreateTime($startCreateTime){
		$this->startCreateTime = $startCreateTime;
         $this->apiParas["startCreateTime"] = $startCreateTime;
	}

	public function getStartCreateTime(){
	  return $this->startCreateTime;
	}

                        	                   			private $endCreateTime;
    	                        
	public function setEndCreateTime($endCreateTime){
		$this->endCreateTime = $endCreateTime;
         $this->apiParas["endCreateTime"] = $endCreateTime;
	}

	public function getEndCreateTime(){
	  return $this->endCreateTime;
	}

                        	                   			private $outStoreNo;
    	                        
	public function setOutStoreNo($outStoreNo){
		$this->outStoreNo = $outStoreNo;
         $this->apiParas["outStoreNo"] = $outStoreNo;
	}

	public function getOutStoreNo(){
	  return $this->outStoreNo;
	}

                        	                   			private $startFinishTime;
    	                        
	public function setStartFinishTime($startFinishTime){
		$this->startFinishTime = $startFinishTime;
         $this->apiParas["startFinishTime"] = $startFinishTime;
	}

	public function getStartFinishTime(){
	  return $this->startFinishTime;
	}

                        	                   			private $endFinishTime;
    	                        
	public function setEndFinishTime($endFinishTime){
		$this->endFinishTime = $endFinishTime;
         $this->apiParas["endFinishTime"] = $endFinishTime;
	}

	public function getEndFinishTime(){
	  return $this->endFinishTime;
	}

                                                    	}





        
 

