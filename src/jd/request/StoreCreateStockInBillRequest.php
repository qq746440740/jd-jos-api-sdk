<?php

namespace JdJos\jd\request;
class StoreCreateStockInBillRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.store.createStockInBill";
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
                                                        		                                    	                        	                   			private $arrivalDay;
    	                        
	public function setArrivalDay($arrivalDay){
		$this->arrivalDay = $arrivalDay;
         $this->apiParas["arrivalDay"] = $arrivalDay;
	}

	public function getArrivalDay(){
	  return $this->arrivalDay;
	}

                        	                   			private $comId;
    	                                                            
	public function setComId($comId){
		$this->comId = $comId;
         $this->apiParas["com_id"] = $comId;
	}

	public function getComId(){
	  return $this->comId;
	}

                        	                   			private $orgId;
    	                                                            
	public function setOrgId($orgId){
		$this->orgId = $orgId;
         $this->apiParas["org_id"] = $orgId;
	}

	public function getOrgId(){
	  return $this->orgId;
	}

                        	                   			private $whId;
    	                                                            
	public function setWhId($whId){
		$this->whId = $whId;
         $this->apiParas["wh_id"] = $whId;
	}

	public function getWhId(){
	  return $this->whId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $skuCode;
                              public function setSkuCode($skuCode ){
                 $this->skuCode=$skuCode;
                 $this->apiParas["sku_code"] = $skuCode;
              }

              public function getSkuCode(){
              	return $this->skuCode;
              }
                                                                                                                                                                                                                                                                                                                                              private $num;
                              public function setNum($num ){
                 $this->num=$num;
                 $this->apiParas["num"] = $num;
              }

              public function getNum(){
              	return $this->num;
              }
                                                                                                                                                                                                                                                                                                                                              private $remark;
                              public function setRemark($remark ){
                 $this->remark=$remark;
                 $this->apiParas["remark"] = $remark;
              }

              public function getRemark(){
              	return $this->remark;
              }
                                                                                                                                                                    	}





        
 

