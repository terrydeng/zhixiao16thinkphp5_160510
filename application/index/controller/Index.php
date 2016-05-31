<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Index extends Controller //class Index
{
	public function set1weizhi()
	{
		$BuChang=60;//100;
		$LWZ=100;
		$da11=Db::table('zx_users')->select();
		$ii=0;
		
		$max1num=7;
		for($ii=1;$ii<$max1num;$ii++) {
			foreach($da11 as $da1a11) {
				if($ii==$da1a11['y1y']) {
					$tempi=Db::table('zx_users')->where('uid',$da1a11['uid']) -> find('x0x1');
					if(0<$da1a11['leftchildid']) {
								$tempi=Db::table('zx_users')->where('uid',$da1a11['uid']) -> find('x0x1');
							//	//$tempi=(int)$da1a11['x0x1'];
							//	print_r($tempi);
								echo $tempi['x0x1'];
								$temp2i=$tempi['x0x1'] - ($BuChang/$ii);
								echo $temp2i;
								Db::table('zx_users')
								-> where('uid',$da1a11['leftchildid'])
								-> update([ 'x0x1'=> $temp2i ] ); 
							}
							
					if(0<$da1a11['rightchildid']) {
							//	$tempi=$da1a11['x0x1'];
								echo $tempi['x0x1'];
								$temp2i=$tempi['x0x1'] + ($BuChang/$ii);
								echo $temp2i;
								Db::table('zx_users')
								-> where('uid',$da1a11['rightchildid'])
								-> update([ 'x0x1'=> $temp2i ] ); 
							}
	//				if(0<$da1a11['rightchildid']) { Db::table('zx_users') -> where('uid',$da1a11['rightchildid']) -> update([ 'x0x1'=>( (int)$da1a11['x0x1']+($BuChang/$ii)) ] ); }
																										
				}//if($ii==$da1a11['y1y']
			}
			//必须写进数据库; 不然下一层 会出错！
			
		}//for($ii=0;$ii<
	}
	
	public function index()
	{
		echo "h23";
			global $ob;
			for($i=0;$i<=100;$i++) { //100;$i++) {
				for($j=0;$j<100;$j++) { //200;$j++) {					
					$str1="&nbsp;|";					
					$ob[$i][$j]=$str1;//=$str1;
				}
			}//for($i=0;$i<100;$i++
			
		$dat1t=Db::table('zx_users')->select();
		
		for($ii=0;$ii<7;++$ii) {
			foreach( $dat1t as $da11) {
				if($ii=$da11['y1y']) {
					$ob[2*$ii][$da11['x0x1']]=$da11['sysname'];
				}
			}//foreach($dat1t as $da11)
		}//for($ii=0;$ii<7;++$ii
			
			
			foreach($ob as $o1) {
				foreach($o1 as $o11) {
					echo $o11;
				}
				echo "<br />";
			}
			
	}//public function index(
	
	public function inde1bak2x()
	{
		global $LWZ;
		$LWZ=50;//100;
		global $ob;
			for($i=0;$i<=100;$i++) { //100;$i++) {
				for($j=0;$j<100;$j++) { //200;$j++) {					
					$str1="&nbsp;|";					
					$ob[$i][$j]=$str1;//=$str1;
				}
			}//for($i=0;$i<100;$i++
		
		$dat1=Db::table('zx_users') ->select();
		
		$ii=0;
		do { //11
			foreach( $dat1 as $dat1a1) {
			//	echo $dat1a1['sysname'];
				echo $dat1a1['fatherid'];
				if(-1==$dat1a1['fatherid']) {
					$ob[1][$LWZ]=$dat1a1['sysname'];
					$ob[2][$LWZ]=$dat1a1['fatherid'];
					}
				
			}//foreach( $dat1 as $dat1a1
		

			
			//
			
			$ii++;
		}while ($ii<6);//do { //11
		
//		global $i1i;
		$i1i=0;
//		global arr1;
	//	public 
		function show2cha1weizhi( $ii,$lwz1,$dat11 , $dat1)
		{
			
			global $ob;
			$ob[ (2*$ii)][$lwz1] =$dat11['sysname'];
			Db::table('zx_users')->where('uid',$dat11['uid']) -> update( [ 'x0x1'=>$lwz1 ] );
			
			if( 1==$dat11['isleftchild'] ) {
					foreach( $dat1 as $dat1t1) { if($dat11['uid'] == $dat1t1['fatherid']) show2cha1weizhi ( 1+$ii, ($lwz1-10), $dat1t1 , $dat1 ); }
					
				}
			if (1==$dat11['isrightchild'] ) {
				
				foreach( $dat1 as $dat1t1) { if($dat11['uid'] == $dat1t1['fatherid']) show2cha1weizhi ( 1+$ii, ($lwz1+10), $dat1t1 , $dat1 ); }
			}
			
		}//public function show2cha1weizhi(
		
		foreach ($dat1 as $dat1t01) {if (-1== $dat1t01['fatherid']) show2cha1weizhi( (1+$i1i), 100, $dat1t01 , $dat1);  }
		
		
		
		
		echo "<br />";
			foreach( $ob as $i1i) {
				foreach( $i1i as $j2j) { echo $j2j;}
				echo "<br />";
			}//foreach($i1 as $ob2j
			
	}//public function index(
	public function inde1childid() {
		echo "inde2childid";
		$dat2=Db::table('zx_users')->select();
		foreach( $dat2 as $dat2e2) { //update 时候，遍历儿子们，当爸爸id对上了，就把爸爸的 leftchildid,rightchildid给标注好 ,
		//if (1==$dat2e2['isleftchild'])	{
								foreach( $dat2 as $dat2e3) { //本来是想知道本记录的childid,但要去问一遍儿子们，儿子们标注着 fatherid号码
															if( $dat2e3['uid']==$dat2e2['fatherid'] ) $child1id=$dat2e3['uid'];  //} // 儿子（们）的fatherid标签对上了,记录他（儿子）号码uid~~先用本记录的爸爸ID~找到本记录的爸爸，而这个爸爸的（左\右儿子）到底是谁呢？ $dat2e3[uid]
															}//foreach( $dat2 as $dat2e3
															
										if((1==$dat2e2['isleftchild'])) {
											Db::table('zx_users') 
											-> where('uid',$dat2e2['fatherid']) -> 
													update([ 'leftchildid'=>$dat2e2['uid'] ]) ;
										}
										
										if((1==$dat2e2['isrightchild'])) {	Db::table('zx_users') -> where('uid',$dat2e2['fatherid']) -> update([ 'rightchildid'=>$dat2e2['uid'] ]) ;
										}
		//							}//foreach( $dat2 as $dat2e3
										
		//								}
		//if (1==$dat2e2['isrightchild']) {Db::table('zx_users')-> where('uid',$dat2e2['fatherid']) -> update(['rightchildid'=>$dat2e2['uid'] ]);}
		}//foreach( $dat2 as $dat2e2
	}
	
    public function inde0bakx()
    {
		/*

		*/
			echo "he1"; echo "<br />";
			//public 
			//global $dat1a1;
			$dat1a= Db::table('zx_users') -> select();
			//$dat1a1=$dat1a;
//			$this->assign('resul1t', $dat1a);
			
//			$ob1j=array(99=>0);
			for($i=0;$i<50;$i++) { //100;$i++) {
				for($j=0;$j<100;$j++) { //200;$j++) {
					
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
			
			//----------------------------
			
			//----------------------------
			//递归画2叉树, 二叉树
			//public 
			//print_r($dat1a);
			function draw2chashu($lev, $lwz, $d1d ,$dat2a) { //, $dat2a){
				global $dat1a;
				print_r( $GLOBALS['dat1a'] );
				//print_r($dat2a);
				
				$buChang=$lwz/$lev ; //步长
//				foreach( $dat2a as $d22d2) {
				//	print_r($d22d2);
					if($lev==$d22d2['fatherid']) { 
						if(1==$d22d2['isleftchild']) {$lwz1l=$lwz-$buChang; draw2chashu( (1+$lev), ($lwz1l), $d22d2, $dat2a ) ;} //, $dat2a) ; }
						if(1==$d22d2['isrightchild']) {$lwz2r=$lwz+$buChang; draw2chashu( (1+$lev), $lwz2r, $d22d2, $dat2a ) ;} //, $dat2a) ; }
				//		if(1==$d22d2['isrightchild']) {$lwz1r=$lwz+10; draw2chashu(1+$lev, $lwz+10, $d22d2 , $dat2a  ) ;} //, $dat2a) ; }
					
					}//if($lev==$d2d['fatherid']
//				}//foreach( $d2d as $d22d2
				
				//找自己的”子“，孙，都找了（1遍）后，最后“画上“自己,如果自己是光杆-就只画自己
				$ob[$lev][$lwz]=$d1d['sysname'];
				echo $d1d['sysname'];
				
//				Db::table('zx_users')->where('uid',$d1d['uid'])->update(['x1x1'=>$lwz]);
				
			}//public function draw2chashu($lev, $lwz, $d2d) { //, $dat2a){
			
			foreach($dat1a as $dd1d) {
				draw2chashu(1, $lwz, $dd1d, $dat1a ); //, $dat1a);
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
