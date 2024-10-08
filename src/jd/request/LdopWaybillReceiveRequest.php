<?php

namespace JdJos\jd\request;
class LdopWaybillReceiveRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.waybill.receive";
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
                                                        		                                    	                        	                   			private $salePlat;
    	                        
	public function setSalePlat($salePlat){
		$this->salePlat = $salePlat;
         $this->apiParas["salePlat"] = $salePlat;
	}

	public function getSalePlat(){
	  return $this->salePlat;
	}

                        	                   			private $customerCode;
    	                        
	public function setCustomerCode($customerCode){
		$this->customerCode = $customerCode;
         $this->apiParas["customerCode"] = $customerCode;
	}

	public function getCustomerCode(){
	  return $this->customerCode;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $thrOrderId;
    	                        
	public function setThrOrderId($thrOrderId){
		$this->thrOrderId = $thrOrderId;
         $this->apiParas["thrOrderId"] = $thrOrderId;
	}

	public function getThrOrderId(){
	  return $this->thrOrderId;
	}

                        	                   			private $senderName;
    	                        
	public function setSenderName($senderName){
		$this->senderName = $senderName;
         $this->apiParas["senderName"] = $senderName;
	}

	public function getSenderName(){
	  return $this->senderName;
	}

                        	                   			private $senderAddress;
    	                        
	public function setSenderAddress($senderAddress){
		$this->senderAddress = $senderAddress;
         $this->apiParas["senderAddress"] = $senderAddress;
	}

	public function getSenderAddress(){
	  return $this->senderAddress;
	}

                        	                   			private $senderTel;
    	                        
	public function setSenderTel($senderTel){
		$this->senderTel = $senderTel;
         $this->apiParas["senderTel"] = $senderTel;
	}

	public function getSenderTel(){
	  return $this->senderTel;
	}

                        	                   			private $senderMobile;
    	                        
	public function setSenderMobile($senderMobile){
		$this->senderMobile = $senderMobile;
         $this->apiParas["senderMobile"] = $senderMobile;
	}

	public function getSenderMobile(){
	  return $this->senderMobile;
	}

                        	                   			private $senderPostcode;
    	                        
	public function setSenderPostcode($senderPostcode){
		$this->senderPostcode = $senderPostcode;
         $this->apiParas["senderPostcode"] = $senderPostcode;
	}

	public function getSenderPostcode(){
	  return $this->senderPostcode;
	}

                        	                   			private $receiveName;
    	                        
	public function setReceiveName($receiveName){
		$this->receiveName = $receiveName;
         $this->apiParas["receiveName"] = $receiveName;
	}

	public function getReceiveName(){
	  return $this->receiveName;
	}

                        	                   			private $receiveAddress;
    	                        
	public function setReceiveAddress($receiveAddress){
		$this->receiveAddress = $receiveAddress;
         $this->apiParas["receiveAddress"] = $receiveAddress;
	}

	public function getReceiveAddress(){
	  return $this->receiveAddress;
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

                        	                   			private $provinceId;
    	                        
	public function setProvinceId($provinceId){
		$this->provinceId = $provinceId;
         $this->apiParas["provinceId"] = $provinceId;
	}

	public function getProvinceId(){
	  return $this->provinceId;
	}

                        	                   			private $cityId;
    	                        
	public function setCityId($cityId){
		$this->cityId = $cityId;
         $this->apiParas["cityId"] = $cityId;
	}

	public function getCityId(){
	  return $this->cityId;
	}

                        	                   			private $countyId;
    	                        
	public function setCountyId($countyId){
		$this->countyId = $countyId;
         $this->apiParas["countyId"] = $countyId;
	}

	public function getCountyId(){
	  return $this->countyId;
	}

                        	                   			private $townId;
    	                        
	public function setTownId($townId){
		$this->townId = $townId;
         $this->apiParas["townId"] = $townId;
	}

	public function getTownId(){
	  return $this->townId;
	}

                        	                   			private $siteType;
    	                        
	public function setSiteType($siteType){
		$this->siteType = $siteType;
         $this->apiParas["siteType"] = $siteType;
	}

	public function getSiteType(){
	  return $this->siteType;
	}

                        	                   			private $siteId;
    	                        
	public function setSiteId($siteId){
		$this->siteId = $siteId;
         $this->apiParas["siteId"] = $siteId;
	}

	public function getSiteId(){
	  return $this->siteId;
	}

                        	                   			private $siteName;
    	                        
	public function setSiteName($siteName){
		$this->siteName = $siteName;
         $this->apiParas["siteName"] = $siteName;
	}

	public function getSiteName(){
	  return $this->siteName;
	}

                        	                   			private $receiveTel;
    	                        
	public function setReceiveTel($receiveTel){
		$this->receiveTel = $receiveTel;
         $this->apiParas["receiveTel"] = $receiveTel;
	}

	public function getReceiveTel(){
	  return $this->receiveTel;
	}

                        	                   			private $receiveMobile;
    	                        
	public function setReceiveMobile($receiveMobile){
		$this->receiveMobile = $receiveMobile;
         $this->apiParas["receiveMobile"] = $receiveMobile;
	}

	public function getReceiveMobile(){
	  return $this->receiveMobile;
	}

                        	                   			private $postcode;
    	                        
	public function setPostcode($postcode){
		$this->postcode = $postcode;
         $this->apiParas["postcode"] = $postcode;
	}

	public function getPostcode(){
	  return $this->postcode;
	}

                        	                   			private $packageCount;
    	                        
	public function setPackageCount($packageCount){
		$this->packageCount = $packageCount;
         $this->apiParas["packageCount"] = $packageCount;
	}

	public function getPackageCount(){
	  return $this->packageCount;
	}

                        	                   			private $weight;
    	                        
	public function setWeight($weight){
		$this->weight = $weight;
         $this->apiParas["weight"] = $weight;
	}

	public function getWeight(){
	  return $this->weight;
	}

                        	                   			private $vloumLong;
    	                        
	public function setVloumLong($vloumLong){
		$this->vloumLong = $vloumLong;
         $this->apiParas["vloumLong"] = $vloumLong;
	}

	public function getVloumLong(){
	  return $this->vloumLong;
	}

                        	                   			private $vloumWidth;
    	                        
	public function setVloumWidth($vloumWidth){
		$this->vloumWidth = $vloumWidth;
         $this->apiParas["vloumWidth"] = $vloumWidth;
	}

	public function getVloumWidth(){
	  return $this->vloumWidth;
	}

                        	                   			private $vloumHeight;
    	                        
	public function setVloumHeight($vloumHeight){
		$this->vloumHeight = $vloumHeight;
         $this->apiParas["vloumHeight"] = $vloumHeight;
	}

	public function getVloumHeight(){
	  return $this->vloumHeight;
	}

                        	                   			private $vloumn;
    	                        
	public function setVloumn($vloumn){
		$this->vloumn = $vloumn;
         $this->apiParas["vloumn"] = $vloumn;
	}

	public function getVloumn(){
	  return $this->vloumn;
	}

                        	                   			private $description;
    	                        
	public function setDescription($description){
		$this->description = $description;
         $this->apiParas["description"] = $description;
	}

	public function getDescription(){
	  return $this->description;
	}

                        	                   			private $collectionValue;
    	                        
	public function setCollectionValue($collectionValue){
		$this->collectionValue = $collectionValue;
         $this->apiParas["collectionValue"] = $collectionValue;
	}

	public function getCollectionValue(){
	  return $this->collectionValue;
	}

                        	                   			private $collectionMoney;
    	                        
	public function setCollectionMoney($collectionMoney){
		$this->collectionMoney = $collectionMoney;
         $this->apiParas["collectionMoney"] = $collectionMoney;
	}

	public function getCollectionMoney(){
	  return $this->collectionMoney;
	}

                        	                   			private $guaranteeValue;
    	                        
	public function setGuaranteeValue($guaranteeValue){
		$this->guaranteeValue = $guaranteeValue;
         $this->apiParas["guaranteeValue"] = $guaranteeValue;
	}

	public function getGuaranteeValue(){
	  return $this->guaranteeValue;
	}

                        	                   			private $guaranteeValueAmount;
    	                        
	public function setGuaranteeValueAmount($guaranteeValueAmount){
		$this->guaranteeValueAmount = $guaranteeValueAmount;
         $this->apiParas["guaranteeValueAmount"] = $guaranteeValueAmount;
	}

	public function getGuaranteeValueAmount(){
	  return $this->guaranteeValueAmount;
	}

                        	                   			private $signReturn;
    	                        
	public function setSignReturn($signReturn){
		$this->signReturn = $signReturn;
         $this->apiParas["signReturn"] = $signReturn;
	}

	public function getSignReturn(){
	  return $this->signReturn;
	}

                        	                   			private $aging;
    	                        
	public function setAging($aging){
		$this->aging = $aging;
         $this->apiParas["aging"] = $aging;
	}

	public function getAging(){
	  return $this->aging;
	}

                        	                   			private $transType;
    	                        
	public function setTransType($transType){
		$this->transType = $transType;
         $this->apiParas["transType"] = $transType;
	}

	public function getTransType(){
	  return $this->transType;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                        	                   			private $goodsType;
    	                        
	public function setGoodsType($goodsType){
		$this->goodsType = $goodsType;
         $this->apiParas["goodsType"] = $goodsType;
	}

	public function getGoodsType(){
	  return $this->goodsType;
	}

                        	                   			private $orderType;
    	                        
	public function setOrderType($orderType){
		$this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType(){
	  return $this->orderType;
	}

                        	                   			private $shopCode;
    	                        
	public function setShopCode($shopCode){
		$this->shopCode = $shopCode;
         $this->apiParas["shopCode"] = $shopCode;
	}

	public function getShopCode(){
	  return $this->shopCode;
	}

                        	                   			private $orderSendTime;
    	                        
	public function setOrderSendTime($orderSendTime){
		$this->orderSendTime = $orderSendTime;
         $this->apiParas["orderSendTime"] = $orderSendTime;
	}

	public function getOrderSendTime(){
	  return $this->orderSendTime;
	}

                        	                   			private $warehouseCode;
    	                        
	public function setWarehouseCode($warehouseCode){
		$this->warehouseCode = $warehouseCode;
         $this->apiParas["warehouseCode"] = $warehouseCode;
	}

	public function getWarehouseCode(){
	  return $this->warehouseCode;
	}

                        	                   			private $areaProvId;
    	                        
	public function setAreaProvId($areaProvId){
		$this->areaProvId = $areaProvId;
         $this->apiParas["areaProvId"] = $areaProvId;
	}

	public function getAreaProvId(){
	  return $this->areaProvId;
	}

                        	                   			private $areaCityId;
    	                        
	public function setAreaCityId($areaCityId){
		$this->areaCityId = $areaCityId;
         $this->apiParas["areaCityId"] = $areaCityId;
	}

	public function getAreaCityId(){
	  return $this->areaCityId;
	}

                        	                   			private $shipmentStartTime;
    	                        
	public function setShipmentStartTime($shipmentStartTime){
		$this->shipmentStartTime = $shipmentStartTime;
         $this->apiParas["shipmentStartTime"] = $shipmentStartTime;
	}

	public function getShipmentStartTime(){
	  return $this->shipmentStartTime;
	}

                        	                   			private $shipmentEndTime;
    	                        
	public function setShipmentEndTime($shipmentEndTime){
		$this->shipmentEndTime = $shipmentEndTime;
         $this->apiParas["shipmentEndTime"] = $shipmentEndTime;
	}

	public function getShipmentEndTime(){
	  return $this->shipmentEndTime;
	}

                        	                   			private $idNumber;
    	                        
	public function setIdNumber($idNumber){
		$this->idNumber = $idNumber;
         $this->apiParas["idNumber"] = $idNumber;
	}

	public function getIdNumber(){
	  return $this->idNumber;
	}

                        	                   			private $addedService;
    	                        
	public function setAddedService($addedService){
		$this->addedService = $addedService;
         $this->apiParas["addedService"] = $addedService;
	}

	public function getAddedService(){
	  return $this->addedService;
	}

                        	                   			private $extendField1;
    	                        
	public function setExtendField1($extendField1){
		$this->extendField1 = $extendField1;
         $this->apiParas["extendField1"] = $extendField1;
	}

	public function getExtendField1(){
	  return $this->extendField1;
	}

                        	                   			private $extendField2;
    	                        
	public function setExtendField2($extendField2){
		$this->extendField2 = $extendField2;
         $this->apiParas["extendField2"] = $extendField2;
	}

	public function getExtendField2(){
	  return $this->extendField2;
	}

                        	                   			private $extendField3;
    	                        
	public function setExtendField3($extendField3){
		$this->extendField3 = $extendField3;
         $this->apiParas["extendField3"] = $extendField3;
	}

	public function getExtendField3(){
	  return $this->extendField3;
	}

                        	                   			private $extendField4;
    	                        
	public function setExtendField4($extendField4){
		$this->extendField4 = $extendField4;
         $this->apiParas["extendField4"] = $extendField4;
	}

	public function getExtendField4(){
	  return $this->extendField4;
	}

                        	                   			private $extendField5;
    	                        
	public function setExtendField5($extendField5){
		$this->extendField5 = $extendField5;
         $this->apiParas["extendField5"] = $extendField5;
	}

	public function getExtendField5(){
	  return $this->extendField5;
	}

                        	                   			private $senderCompany;
    	                        
	public function setSenderCompany($senderCompany){
		$this->senderCompany = $senderCompany;
         $this->apiParas["senderCompany"] = $senderCompany;
	}

	public function getSenderCompany(){
	  return $this->senderCompany;
	}

                        	                   			private $receiveCompany;
    	                        
	public function setReceiveCompany($receiveCompany){
		$this->receiveCompany = $receiveCompany;
         $this->apiParas["receiveCompany"] = $receiveCompany;
	}

	public function getReceiveCompany(){
	  return $this->receiveCompany;
	}

                        	                   			private $goods;
    	                        
	public function setGoods($goods){
		$this->goods = $goods;
         $this->apiParas["goods"] = $goods;
	}

	public function getGoods(){
	  return $this->goods;
	}

                        	                   			private $goodsCount;
    	                        
	public function setGoodsCount($goodsCount){
		$this->goodsCount = $goodsCount;
         $this->apiParas["goodsCount"] = $goodsCount;
	}

	public function getGoodsCount(){
	  return $this->goodsCount;
	}

                        	                   			private $promiseTimeType;
    	                        
	public function setPromiseTimeType($promiseTimeType){
		$this->promiseTimeType = $promiseTimeType;
         $this->apiParas["promiseTimeType"] = $promiseTimeType;
	}

	public function getPromiseTimeType(){
	  return $this->promiseTimeType;
	}

                        	                   			private $freight;
    	                        
	public function setFreight($freight){
		$this->freight = $freight;
         $this->apiParas["freight"] = $freight;
	}

	public function getFreight(){
	  return $this->freight;
	}

                        	                   			private $pickUpStartTime;
    	                        
	public function setPickUpStartTime($pickUpStartTime){
		$this->pickUpStartTime = $pickUpStartTime;
         $this->apiParas["pickUpStartTime"] = $pickUpStartTime;
	}

	public function getPickUpStartTime(){
	  return $this->pickUpStartTime;
	}

                        	                   			private $pickUpEndTime;
    	                        
	public function setPickUpEndTime($pickUpEndTime){
		$this->pickUpEndTime = $pickUpEndTime;
         $this->apiParas["pickUpEndTime"] = $pickUpEndTime;
	}

	public function getPickUpEndTime(){
	  return $this->pickUpEndTime;
	}

                        	                   			private $unpackingInspection;
    	                        
	public function setUnpackingInspection($unpackingInspection){
		$this->unpackingInspection = $unpackingInspection;
         $this->apiParas["unpackingInspection"] = $unpackingInspection;
	}

	public function getUnpackingInspection(){
	  return $this->unpackingInspection;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $boxCode;
                              public function setBoxCode($boxCode ){
                 $this->boxCode=$boxCode;
                 $this->apiParas["boxCode"] = $boxCode;
              }

              public function getBoxCode(){
              	return $this->boxCode;
              }
                                                                                                                                        	                   			private $fileUrl;
    	                        
	public function setFileUrl($fileUrl){
		$this->fileUrl = $fileUrl;
         $this->apiParas["fileUrl"] = $fileUrl;
	}

	public function getFileUrl(){
	  return $this->fileUrl;
	}

                        	                   			private $pickMethod;
    	                        
	public function setPickMethod($pickMethod){
		$this->pickMethod = $pickMethod;
         $this->apiParas["pickMethod"] = $pickMethod;
	}

	public function getPickMethod(){
	  return $this->pickMethod;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $customerBoxCode;
                              public function setCustomerBoxCode($customerBoxCode ){
                 $this->customerBoxCode=$customerBoxCode;
                 $this->apiParas["customerBoxCode"] = $customerBoxCode;
              }

              public function getCustomerBoxCode(){
              	return $this->customerBoxCode;
              }
                                                                                                                                                                                                                                                                                                                                              private $customerBoxNumber;
                              public function setCustomerBoxNumber($customerBoxNumber ){
                 $this->customerBoxNumber=$customerBoxNumber;
                 $this->apiParas["customerBoxNumber"] = $customerBoxNumber;
              }

              public function getCustomerBoxNumber(){
              	return $this->customerBoxNumber;
              }
                                                                                                                                        	                   			private $salesChannel;
    	                        
	public function setSalesChannel($salesChannel){
		$this->salesChannel = $salesChannel;
         $this->apiParas["salesChannel"] = $salesChannel;
	}

	public function getSalesChannel(){
	  return $this->salesChannel;
	}

                        	                   			private $backName;
    	                        
	public function setBackName($backName){
		$this->backName = $backName;
         $this->apiParas["backName"] = $backName;
	}

	public function getBackName(){
	  return $this->backName;
	}

                        	                   			private $backMobileNo;
    	                        
	public function setBackMobileNo($backMobileNo){
		$this->backMobileNo = $backMobileNo;
         $this->apiParas["backMobileNo"] = $backMobileNo;
	}

	public function getBackMobileNo(){
	  return $this->backMobileNo;
	}

                        	                   			private $backTelNo;
    	                        
	public function setBackTelNo($backTelNo){
		$this->backTelNo = $backTelNo;
         $this->apiParas["backTelNo"] = $backTelNo;
	}

	public function getBackTelNo(){
	  return $this->backTelNo;
	}

                        	                   			private $backProvinceName;
    	                        
	public function setBackProvinceName($backProvinceName){
		$this->backProvinceName = $backProvinceName;
         $this->apiParas["backProvinceName"] = $backProvinceName;
	}

	public function getBackProvinceName(){
	  return $this->backProvinceName;
	}

                        	                   			private $backCityName;
    	                        
	public function setBackCityName($backCityName){
		$this->backCityName = $backCityName;
         $this->apiParas["backCityName"] = $backCityName;
	}

	public function getBackCityName(){
	  return $this->backCityName;
	}

                        	                   			private $backCountry;
    	                        
	public function setBackCountry($backCountry){
		$this->backCountry = $backCountry;
         $this->apiParas["backCountry"] = $backCountry;
	}

	public function getBackCountry(){
	  return $this->backCountry;
	}

                        	                   			private $backTown;
    	                        
	public function setBackTown($backTown){
		$this->backTown = $backTown;
         $this->apiParas["backTown"] = $backTown;
	}

	public function getBackTown(){
	  return $this->backTown;
	}

                        	                   			private $backDetailAddress;
    	                        
	public function setBackDetailAddress($backDetailAddress){
		$this->backDetailAddress = $backDetailAddress;
         $this->apiParas["backDetailAddress"] = $backDetailAddress;
	}

	public function getBackDetailAddress(){
	  return $this->backDetailAddress;
	}

                        	                        	                   			private $shopCodeAddedService;
    	                        
	public function setShopCodeAddedService($shopCodeAddedService){
		$this->shopCodeAddedService = $shopCodeAddedService;
         $this->apiParas["shopCodeAddedService"] = $shopCodeAddedService;
	}

	public function getShopCodeAddedService(){
	  return $this->shopCodeAddedService;
	}

                        	                   			private $receiveOAID;
    	                        
	public function setReceiveOAID($receiveOAID){
		$this->receiveOAID = $receiveOAID;
         $this->apiParas["receiveOAID"] = $receiveOAID;
	}

	public function getReceiveOAID(){
	  return $this->receiveOAID;
	}

                        	                   			private $receiveOAIDType;
    	                        
	public function setReceiveOAIDType($receiveOAIDType){
		$this->receiveOAIDType = $receiveOAIDType;
         $this->apiParas["receiveOAIDType"] = $receiveOAIDType;
	}

	public function getReceiveOAIDType(){
	  return $this->receiveOAIDType;
	}

                        	                        	                            }





        
 

