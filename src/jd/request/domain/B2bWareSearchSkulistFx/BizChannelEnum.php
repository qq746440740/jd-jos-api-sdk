<?php

namespace JdJos\jd\request\domain\B2bWareSearchSkulistFx;
class BizChannelEnum{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.b2b.ware.biz.sdk.enums.BizChannelEnum";
    }
        
    private $nouse;
    
    public function setNouse($nouse){
        $this->params['nouse'] = $nouse;
    }

    public function getNouse(){
        return $this->nouse;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>