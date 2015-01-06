<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
	$this->display();
	//$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    public function show(){
        //echo "你成功访问了 INdex控制器的 Show方法".$_GET['name'];
        $arr= array(
            array(
                "name"=>"aa",
                "age"=>18,
                "sex"=>1
            ),
            array(
                "name"=>"b",
                "age"=>18,
                "sex"=>1
            )
        );
        unset($arr);
        $m = M("adma");
       $arr =  $m->select();
        $this->assign("arr",$arr);
        $this->display();
    }
    public function test(){
        $this->test="test";
        $this->display("User:index");
    }
    public function se(){
        $this->display("Hh:User:hello.html");
    }
}