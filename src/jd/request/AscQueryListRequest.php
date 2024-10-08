<?php

namespace JdJos\jd\request;
class AscQueryListRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.asc.query.list";
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
                                    	                        	                        	                                            		                                    	                   			private $buId;
    	                        
	public function setBuId($buId){
		$this->buId = $buId;
         $this->apiParas["buId"] = $buId;
	}

	public function getBuId(){
	  return $this->buId;
	}

                        	                   			private $operatePin;
    	                        
	public function setOperatePin($operatePin){
		$this->operatePin = $operatePin;
         $this->apiParas["operatePin"] = $operatePin;
	}

	public function getOperatePin(){
	  return $this->operatePin;
	}

                        	                   			private $operateNick;
    	                        
	public function setOperateNick($operateNick){
		$this->operateNick = $operateNick;
         $this->apiParas["operateNick"] = $operateNick;
	}

	public function getOperateNick(){
	  return $this->operateNick;
	}

                        	                   			private $serviceId;
    	                        
	public function setServiceId($serviceId){
		$this->serviceId = $serviceId;
         $this->apiParas["serviceId"] = $serviceId;
	}

	public function getServiceId(){
	  return $this->serviceId;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $applyTimeBegin;
    	                        
	public function setApplyTimeBegin($applyTimeBegin){
		$this->applyTimeBegin = $applyTimeBegin;
         $this->apiParas["applyTimeBegin"] = $applyTimeBegin;
	}

	public function getApplyTimeBegin(){
	  return $this->applyTimeBegin;
	}

                        	                   			private $applyTimeEnd;
    	                        
	public function setApplyTimeEnd($applyTimeEnd){
		$this->applyTimeEnd = $applyTimeEnd;
         $this->apiParas["applyTimeEnd"] = $applyTimeEnd;
	}

	public function getApplyTimeEnd(){
	  return $this->applyTimeEnd;
	}

                        	                   			private $finishTimeBegin;
    	                        
	public function setFinishTimeBegin($finishTimeBegin){
		$this->finishTimeBegin = $finishTimeBegin;
         $this->apiParas["finishTimeBegin"] = $finishTimeBegin;
	}

	public function getFinishTimeBegin(){
	  return $this->finishTimeBegin;
	}

                        	                   			private $finishTimeEnd;
    	                        
	public function setFinishTimeEnd($finishTimeEnd){
		$this->finishTimeEnd = $finishTimeEnd;
         $this->apiParas["finishTimeEnd"] = $finishTimeEnd;
	}

	public function getFinishTimeEnd(){
	  return $this->finishTimeEnd;
	}

                        	                   			private $verificationCode;
    	                        
	public function setVerificationCode($verificationCode){
		$this->verificationCode = $verificationCode;
         $this->apiParas["verificationCode"] = $verificationCode;
	}

	public function getVerificationCode(){
	  return $this->verificationCode;
	}

                        	                   			private $expressCode;
    	                        
	public function setExpressCode($expressCode){
		$this->expressCode = $expressCode;
         $this->apiParas["expressCode"] = $expressCode;
	}

	public function getExpressCode(){
	  return $this->expressCode;
	}

                        	                   			private $orderType;
    	                        
	public function setOrderType($orderType){
		$this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType(){
	  return $this->orderType;
	}

                        	                   			private $processResult;
    	                        
	public function setProcessResult($processResult){
		$this->processResult = $processResult;
         $this->apiParas["processResult"] = $processResult;
	}

	public function getProcessResult(){
	  return $this->processResult;
	}

                        	                   			private $customerPin;
    	                        
	public function setCustomerPin($customerPin){
		$this->customerPin = $customerPin;
         $this->apiParas["customerPin"] = $customerPin;
	}

	public function getCustomerPin(){
	  return $this->customerPin;
	}

                        	                   			private $customerName;
    	                        
	public function setCustomerName($customerName){
		$this->customerName = $customerName;
         $this->apiParas["customerName"] = $customerName;
	}

	public function getCustomerName(){
	  return $this->customerName;
	}

                        	                   			private $customerTel;
    	                        
	public function setCustomerTel($customerTel){
		$this->customerTel = $customerTel;
         $this->apiParas["customerTel"] = $customerTel;
	}

	public function getCustomerTel(){
	  return $this->customerTel;
	}

                        	                   			private $approveTimeBegin;
    	                        
	public function setApproveTimeBegin($approveTimeBegin){
		$this->approveTimeBegin = $approveTimeBegin;
         $this->apiParas["approveTimeBegin"] = $approveTimeBegin;
	}

	public function getApproveTimeBegin(){
	  return $this->approveTimeBegin;
	}

                        	                   			private $approveTimeEnd;
    	                        
	public function setApproveTimeEnd($approveTimeEnd){
		$this->approveTimeEnd = $approveTimeEnd;
         $this->apiParas["approveTimeEnd"] = $approveTimeEnd;
	}

	public function getApproveTimeEnd(){
	  return $this->approveTimeEnd;
	}

                                            		                                    	                   			private $pageNumber;
    	                        
	public function setPageNumber($pageNumber){
		$this->pageNumber = $pageNumber;
         $this->apiParas["pageNumber"] = $pageNumber;
	}

	public function getPageNumber(){
	  return $this->pageNumber;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                                                    	                   			private $extJsonStr;
    	                        
	public function setExtJsonStr($extJsonStr){
		$this->extJsonStr = $extJsonStr;
         $this->apiParas["extJsonStr"] = $extJsonStr;
	}

	public function getExtJsonStr(){
	  return $this->extJsonStr;
	}

                        	                   			private $serviceStep;
    	                        
	public function setServiceStep($serviceStep){
		$this->serviceStep = $serviceStep;
         $this->apiParas["serviceStep"] = $serviceStep;
	}

	public function getServiceStep(){
	  return $this->serviceStep;
	}

                        	                   			private $serviceState;
    	                        
	public function setServiceState($serviceState){
		$this->serviceState = $serviceState;
         $this->apiParas["serviceState"] = $serviceState;
	}

	public function getServiceState(){
	  return $this->serviceState;
	}

                        	                   			private $serviceStatus;
    	                        
	public function setServiceStatus($serviceStatus){
		$this->serviceStatus = $serviceStatus;
         $this->apiParas["serviceStatus"] = $serviceStatus;
	}

	public function getServiceStatus(){
	  return $this->serviceStatus;
	}

                        	                   			private $updateTimeBegin;
    	                        
	public function setUpdateTimeBegin($updateTimeBegin){
		$this->updateTimeBegin = $updateTimeBegin;
         $this->apiParas["updateTimeBegin"] = $updateTimeBegin;
	}

	public function getUpdateTimeBegin(){
	  return $this->updateTimeBegin;
	}

                        	                   			private $updateTimeEnd;
    	                        
	public function setUpdateTimeEnd($updateTimeEnd){
		$this->updateTimeEnd = $updateTimeEnd;
         $this->apiParas["updateTimeEnd"] = $updateTimeEnd;
	}

	public function getUpdateTimeEnd(){
	  return $this->updateTimeEnd;
	}

                        	                   			private $remindFlag;
    	                        
	public function setRemindFlag($remindFlag){
		$this->remindFlag = $remindFlag;
         $this->apiParas["remindFlag"] = $remindFlag;
	}

	public function getRemindFlag(){
	  return $this->remindFlag;
	}

                        	                   			private $openIdBuyer;
    	                                                                        
	public function setOpenIdBuyer($openIdBuyer){
		$this->openIdBuyer = $openIdBuyer;
         $this->apiParas["open_id_buyer"] = $openIdBuyer;
	}

	public function getOpenIdBuyer(){
	  return $this->openIdBuyer;
	}

                        	                   			private $xidBuyer;
    	                                                            
	public function setXidBuyer($xidBuyer){
		$this->xidBuyer = $xidBuyer;
         $this->apiParas["xid_buyer"] = $xidBuyer;
	}

	public function getXidBuyer(){
	  return $this->xidBuyer;
	}

                            }





        
 

