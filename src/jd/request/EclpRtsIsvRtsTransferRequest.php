<?php

namespace JdJos\jd\request;
class EclpRtsIsvRtsTransferRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.rts.isvRtsTransfer";
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
                                                        		                                    	                   			private $eclpRtsNo;
    	                        
	public function setEclpRtsNo($eclpRtsNo){
		$this->eclpRtsNo = $eclpRtsNo;
         $this->apiParas["eclpRtsNo"] = $eclpRtsNo;
	}

	public function getEclpRtsNo(){
	  return $this->eclpRtsNo;
	}

                        	                   			private $isvRtsNum;
    	                        
	public function setIsvRtsNum($isvRtsNum){
		$this->isvRtsNum = $isvRtsNum;
         $this->apiParas["isvRtsNum"] = $isvRtsNum;
	}

	public function getIsvRtsNum(){
	  return $this->isvRtsNum;
	}

                        	                   			private $rtsType;
    	                        
	public function setRtsType($rtsType){
		$this->rtsType = $rtsType;
         $this->apiParas["rtsType"] = $rtsType;
	}

	public function getRtsType(){
	  return $this->rtsType;
	}

                        	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $deliveryMode;
    	                        
	public function setDeliveryMode($deliveryMode){
		$this->deliveryMode = $deliveryMode;
         $this->apiParas["deliveryMode"] = $deliveryMode;
	}

	public function getDeliveryMode(){
	  return $this->deliveryMode;
	}

                        	                   			private $warehouseNo;
    	                        
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouseNo"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                        	                   			private $supplierNo;
    	                        
	public function setSupplierNo($supplierNo){
		$this->supplierNo = $supplierNo;
         $this->apiParas["supplierNo"] = $supplierNo;
	}

	public function getSupplierNo(){
	  return $this->supplierNo;
	}

                        	                   			private $receiver;
    	                        
	public function setReceiver($receiver){
		$this->receiver = $receiver;
         $this->apiParas["receiver"] = $receiver;
	}

	public function getReceiver(){
	  return $this->receiver;
	}

                        	                   			private $receiverPhone;
    	                        
	public function setReceiverPhone($receiverPhone){
		$this->receiverPhone = $receiverPhone;
         $this->apiParas["receiverPhone"] = $receiverPhone;
	}

	public function getReceiverPhone(){
	  return $this->receiverPhone;
	}

                        	                   			private $email;
    	                        
	public function setEmail($email){
		$this->email = $email;
         $this->apiParas["email"] = $email;
	}

	public function getEmail(){
	  return $this->email;
	}

                        	                   			private $province;
    	                        
	public function setProvince($province){
		$this->province = $province;
         $this->apiParas["province"] = $province;
	}

	public function getProvince(){
	  return $this->province;
	}

                        	                   			private $city;
    	                        
	public function setCity($city){
		$this->city = $city;
         $this->apiParas["city"] = $city;
	}

	public function getCity(){
	  return $this->city;
	}

                        	                   			private $county;
    	                        
	public function setCounty($county){
		$this->county = $county;
         $this->apiParas["county"] = $county;
	}

	public function getCounty(){
	  return $this->county;
	}

                        	                   			private $town;
    	                        
	public function setTown($town){
		$this->town = $town;
         $this->apiParas["town"] = $town;
	}

	public function getTown(){
	  return $this->town;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                        	                   			private $createUser;
    	                        
	public function setCreateUser($createUser){
		$this->createUser = $createUser;
         $this->apiParas["createUser"] = $createUser;
	}

	public function getCreateUser(){
	  return $this->createUser;
	}

                        	                   			private $packFlag;
    	                        
	public function setPackFlag($packFlag){
		$this->packFlag = $packFlag;
         $this->apiParas["packFlag"] = $packFlag;
	}

	public function getPackFlag(){
	  return $this->packFlag;
	}

                        	                   			private $allowLack;
    	                        
	public function setAllowLack($allowLack){
		$this->allowLack = $allowLack;
         $this->apiParas["allowLack"] = $allowLack;
	}

	public function getAllowLack(){
	  return $this->allowLack;
	}

                        	                   			private $logicParam;
    	                        
	public function setLogicParam($logicParam){
		$this->logicParam = $logicParam;
         $this->apiParas["logicParam"] = $logicParam;
	}

	public function getLogicParam(){
	  return $this->logicParam;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                        	                   			private $purchaser;
    	                        
	public function setPurchaser($purchaser){
		$this->purchaser = $purchaser;
         $this->apiParas["purchaser"] = $purchaser;
	}

	public function getPurchaser(){
	  return $this->purchaser;
	}

                        	                   			private $customField;
    	                        
	public function setCustomField($customField){
		$this->customField = $customField;
         $this->apiParas["customField"] = $customField;
	}

	public function getCustomField(){
	  return $this->customField;
	}

                        	                   			private $sellerBizType;
    	                        
	public function setSellerBizType($sellerBizType){
		$this->sellerBizType = $sellerBizType;
         $this->apiParas["sellerBizType"] = $sellerBizType;
	}

	public function getSellerBizType(){
	  return $this->sellerBizType;
	}

                        	                   			private $insuredPrice;
    	                        
	public function setInsuredPrice($insuredPrice){
		$this->insuredPrice = $insuredPrice;
         $this->apiParas["insuredPrice"] = $insuredPrice;
	}

	public function getInsuredPrice(){
	  return $this->insuredPrice;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $deptGoodsNo;
                              public function setDeptGoodsNo($deptGoodsNo ){
                 $this->deptGoodsNo=$deptGoodsNo;
                 $this->apiParas["deptGoodsNo"] = $deptGoodsNo;
              }

              public function getDeptGoodsNo(){
              	return $this->deptGoodsNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $goodsName;
                              public function setGoodsName($goodsName ){
                 $this->goodsName=$goodsName;
                 $this->apiParas["goodsName"] = $goodsName;
              }

              public function getGoodsName(){
              	return $this->goodsName;
              }
                                                                                                                                                                                                                                                                                                                                              private $quantity;
                              public function setQuantity($quantity ){
                 $this->quantity=$quantity;
                 $this->apiParas["quantity"] = $quantity;
              }

              public function getQuantity(){
              	return $this->quantity;
              }
                                                                                                                                                                                                                                                                                                                                              private $realQuantity;
                              public function setRealQuantity($realQuantity ){
                 $this->realQuantity=$realQuantity;
                 $this->apiParas["realQuantity"] = $realQuantity;
              }

              public function getRealQuantity(){
              	return $this->realQuantity;
              }
                                                                                                                                                                                                                                                                                                                                              private $goodsStatus;
                              public function setGoodsStatus($goodsStatus ){
                 $this->goodsStatus=$goodsStatus;
                 $this->apiParas["goodsStatus"] = $goodsStatus;
              }

              public function getGoodsStatus(){
              	return $this->goodsStatus;
              }
                                                                                                                                                                                                                                                                                                                                              private $goodsLevel;
                              public function setGoodsLevel($goodsLevel ){
                 $this->goodsLevel=$goodsLevel;
                 $this->apiParas["goodsLevel"] = $goodsLevel;
              }

              public function getGoodsLevel(){
              	return $this->goodsLevel;
              }
                                                                                                                                                                                                                                                                                                                                              private $lotProductionBatchNo;
                              public function setLotProductionBatchNo($lotProductionBatchNo ){
                 $this->lotProductionBatchNo=$lotProductionBatchNo;
                 $this->apiParas["lotProductionBatchNo"] = $lotProductionBatchNo;
              }

              public function getLotProductionBatchNo(){
              	return $this->lotProductionBatchNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $lotProductionDate;
                              public function setLotProductionDate($lotProductionDate ){
                 $this->lotProductionDate=$lotProductionDate;
                 $this->apiParas["lotProductionDate"] = $lotProductionDate;
              }

              public function getLotProductionDate(){
              	return $this->lotProductionDate;
              }
                                                                                                                                                                                                                                                                                                                                              private $lotSupplier;
                              public function setLotSupplier($lotSupplier ){
                 $this->lotSupplier=$lotSupplier;
                 $this->apiParas["lotSupplier"] = $lotSupplier;
              }

              public function getLotSupplier(){
              	return $this->lotSupplier;
              }
                                                                                                                                                                                                                                                                                                                                              private $batAttrListJson;
                              public function setBatAttrListJson($batAttrListJson ){
                 $this->batAttrListJson=$batAttrListJson;
                 $this->apiParas["batAttrListJson"] = $batAttrListJson;
              }

              public function getBatAttrListJson(){
              	return $this->batAttrListJson;
              }
                                                                                                                                                                                                                                                                                                                                              private $goodsPrice;
                              public function setGoodsPrice($goodsPrice ){
                 $this->goodsPrice=$goodsPrice;
                 $this->apiParas["goodsPrice"] = $goodsPrice;
              }

              public function getGoodsPrice(){
              	return $this->goodsPrice;
              }
                                                                                                                                                                                                                                                                                                                                              private $totalAmount;
                              public function setTotalAmount($totalAmount ){
                 $this->totalAmount=$totalAmount;
                 $this->apiParas["totalAmount"] = $totalAmount;
              }

              public function getTotalAmount(){
              	return $this->totalAmount;
              }
                                                                                                                                                                                                                                                                                                                                              private $isvGoodsNo;
                              public function setIsvGoodsNo($isvGoodsNo ){
                 $this->isvGoodsNo=$isvGoodsNo;
                 $this->apiParas["isvGoodsNo"] = $isvGoodsNo;
              }

              public function getIsvGoodsNo(){
              	return $this->isvGoodsNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $orderLine;
                              public function setOrderLine($orderLine ){
                 $this->orderLine=$orderLine;
                 $this->apiParas["orderLine"] = $orderLine;
              }

              public function getOrderLine(){
              	return $this->orderLine;
              }
                                                                                                                                        	}





        
 

