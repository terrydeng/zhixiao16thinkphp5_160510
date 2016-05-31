<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Index extends Controller //class Index
{
    public function index()
    {
		/*
		public function draw2cha1shu( $lev, $lwz ,$d2d, $dat2a)
		{
			if ($lev==$d2d['fatherid']) {
				if (1==$d2['isleftchild']) {$lwz1l=$lwz-10; draw2chashu( 1+lev, $lwz-10, $d2d, $dat2a); }//$ob[3][$lwz1l]= $d2['sysname'];}
					if (1==$d2['isrightchild']) {$lwz1r=$lwz+10; draw2chashu( 1+lev, $lwz+10, $d2d, $dat2a) }//$ob[3][$lwz+10]= $d2['sysname'];}
					
				//最后“画上“自己,如果自己是光杆-就只画自己
				$ob[$lev][$lwz]=$d2d['sysname'];
			}
		}//public function draw2chashu(
		*/
			echo "he1"; echo "<br />";
			$dat1a= Db::table('zx_users') -> select();
			$this->assign('resul1t', $dat1a);
			
//			$ob1j=array(99=>0);
			for($i=0;$i<100;$i++) {
				for($j=0;$j<200;$j++) {
					
					$str1="&nbsp;|";
					
					$ob[$i][$j]=$str1;//=$str1;
				}
			}//for($i=0;$i<100;$i++
//			print_r($ob1j);
			
			$cweizhi=100;
			$lwz=100;
			$twz=1;
			foreach( $dat1a as $d1) {
				echo $d1['sysname'];
				
				$uidd=$d1['uid'];
				
				if (1==$uidd) $ob[$uidd ][$lwz]=$d1['sysname'];
				
				
			}//foreach( $dat1a as $d1
			
			//
			foreach( $dat1a as $d2) {
				echo $d2['fatherid'];
				if (1==$d2['fatherid']){
					echo "helll";
					if (1==$d2['isleftchild']) {$lwz1l=$lwz-10; $ob[3][$lwz1l]= $d2['sysname'];}
					if (1==$d2['isrightchild']) { $ob[3][$lwz+10]= $d2['sysname'];}
					
				}//if (1==$d2['fatherid']
			}//foreach( $dat1a as $d2
			//
			//递归画2叉树, 二叉树
			foreach($dat1a as $d1d) {
				draw2chashu(1, $lwz, $d1d, $dat1a);
			}//foreach($dat1a as $d1d
			
			//
//
//
			foreach( $ob as $i1i) {
				foreach( $i1i as $j2j) { echo $j2j;}
				echo "<br />";
			}//foreach($i1 as $ob2j
			//print_r($ob2j);
			
			$ii=0;
	/*
			do { //do11
				
				
				$ii++;
			} while(1==1); //do11
			*/	
	//		print_r($dat1a);
		
//        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
		return 'hend!';
	}//public function index(
}//class Index
