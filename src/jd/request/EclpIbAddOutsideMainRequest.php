<?php

namespace JdJos\jd\request;
class EclpIbAddOutsideMainRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.ib.addOutsideMain";
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
                                                        		                                    	                   			private $outsideSource;
    	                        
	public function setOutsideSource($outsideSource){
		$this->outsideSource = $outsideSource;
         $this->apiParas["outsideSource"] = $outsideSource;
	}

	public function getOutsideSource(){
	  return $this->outsideSource;
	}

                        	                   			private $selfLiftCode;
    	                        
	public function setSelfLiftCode($selfLiftCode){
		$this->selfLiftCode = $selfLiftCode;
         $this->apiParas["selfLiftCode"] = $selfLiftCode;
	}

	public function getSelfLiftCode(){
	  return $this->selfLiftCode;
	}

                        	                   			private $warehouseNoIn;
    	                        
	public function setWarehouseNoIn($warehouseNoIn){
		$this->warehouseNoIn = $warehouseNoIn;
         $this->apiParas["warehouseNoIn"] = $warehouseNoIn;
	}

	public function getWarehouseNoIn(){
	  return $this->warehouseNoIn;
	}

                        	                   			private $isvOutsideNo;
    	                        
	public function setIsvOutsideNo($isvOutsideNo){
		$this->isvOutsideNo = $isvOutsideNo;
         $this->apiParas["isvOutsideNo"] = $isvOutsideNo;
	}

	public function getIsvOutsideNo(){
	  return $this->isvOutsideNo;
	}

                        	                   			private $shipperNo;
    	                        
	public function setShipperNo($shipperNo){
		$this->shipperNo = $shipperNo;
         $this->apiParas["shipperNo"] = $shipperNo;
	}

	public function getShipperNo(){
	  return $this->shipperNo;
	}

                        	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $warehouseNoOut;
    	                        
	public function setWarehouseNoOut($warehouseNoOut){
		$this->warehouseNoOut = $warehouseNoOut;
         $this->apiParas["warehouseNoOut"] = $warehouseNoOut;
	}

	public function getWarehouseNoOut(){
	  return $this->warehouseNoOut;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $goodsNo;
                              public function setGoodsNo($goodsNo ){
                 $this->goodsNo=$goodsNo;
                 $this->apiParas["goodsNo"] = $goodsNo;
              }

              public function getGoodsNo(){
              	return $this->goodsNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $planNum;
                              public function setPlanNum($planNum ){
                 $this->planNum=$planNum;
                 $this->apiParas["planNum"] = $planNum;
              }

              public function getPlanNum(){
              	return $this->planNum;
              }
                                                                                                                                                                                                                                                                                                                                              private $batAttrListJson;
                              public function setBatAttrListJson($batAttrListJson ){
                 $this->batAttrListJson=$batAttrListJson;
                 $this->apiParas["batAttrListJson"] = $batAttrListJson;
              }

              public function getBatAttrListJson(){
              	return $this->batAttrListJson;
              }
                                                                                                                                        	}





        
 

