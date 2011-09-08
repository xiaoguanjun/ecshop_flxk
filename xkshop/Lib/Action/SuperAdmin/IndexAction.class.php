<?php
import("@.Model.VirtualModel");
class IndexAction extends Action {

    public function index() {
       $this->assign('__SuperAdmin__', __SuperAdmin__);
        $this->display();
    }
    
    public function top() {
       $this->assign('__CommonAdmin__', __CommonAdmin__);
        $this->display();
    }
    
    public function body() {
        $this->display();
    }
    
    public function menu() {
    	$this->assign('__SuperAdmin__', __SuperAdmin__);
        $this->display();
    }
    public function bottom() {
        $this->display();
    }
    
    public function pd_lst() {
    	$type = $_GET["type"];
    	if($type == "index"){
    		$this->assign('type', $type);
          	$this->display();  		
    	}else if($type == "virtual"){
    		$this->assign('type', $type);
    		$virtualModel = M('Virtual');
    		$map = $virtualModel->select(); 
        	$this->assign('virtuals',$map);
          	$this->display();      		
    	}

    }
    
    public function pd_tpe() {
        $this->display();
    }
    
    public function pd_r() {
        $this->display();
    }
    
    public function pd_save() {
    	$virtualModel = new VirtualModel();
    	$id ="";
    	$id = $_POST["id"];
    	//判断是修改还是新增加
    	if($id == ""){
                 // 根据表单提交的POST数据创建数据对象
                $virtualModel->create();
                $virtualModel->add();   	  
    	}else{
                // 根据表单提交的POST数据创建数据对象
                $virtualModel->create();
                $virtualModel->save(); 
    	}	
    	redirect("pd_edt?id=1",2,"保存成功,将在2秒钟后自动跳转");
    }
    
    public function pd_edt() {
    	$id = $_GET["id"];
    	if($id != ""){
    		$condition['id'] = $id;
    		$virtualModel = new VirtualModel();
    		$record = $virtualModel->select($condition);
    	}
        $this->assign('id',$id);
        $this->assign('virtual',$record);
        $this->display();   
    }
}

?>