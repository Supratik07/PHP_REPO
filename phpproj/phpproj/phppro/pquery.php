<?php
class c{
	function __construct(){
	$con=mysql_connect("localhost","root","");
		mysql_select_db("project",$con);
	}
	function email_chk($a3){
		$r=mysql_query("select email from user where email='$a3'");
		return $r;
		
	}
	function insert($a1,$a2,$a3,$a4,$a5,$a6,$a7){
		$i=mysql_query("insert into user values('','$a1','$a2','$a3','$a4','$a5','$a6','$a7')") or die("hjshs");
		return $i;
	}
	function login($b1,$b2){
		$l=mysql_query("select  * from user where email='$b1' and password='$b2'")or die("sjdh");
		return $l;
	}
	function sell($d){
		$s=mysql_query("select name,email,phn_no  from user where ID='$d'") or die("dsjgdjdg");
		return $s;
	}
	function picinsert($a1,$a2,$a3,$path,$d){
		$k=mysql_query("insert into products values('','$a1','$a2','$a3','$path',$d)");
		return $k;
	}
	function productview($d){
		$f=mysql_query("select title,descript,price,path from products where s_id='$d' order by Id desc limit 5");
		return $f;
	}
	function buy($d)
	{
		$b=mysql_query("select name,email,phn_no  from user where ID='$d'") or die("dsjgdjdg");
		return $b;
	}
	function buyerview($x)
	{
		$b1=mysql_query("select * from products where title like '$x%'") or die("dsjgdjdg");
		return $b1;
	}
	function view()
	{
		$o=mysql_query("select * from popular");
		return $o;
	}
	function totalview($d1)
	{
		$t=mysql_query("select * from products where s_id='$d1'");
		return $t;
	}
	function orderinsert($b,$b1,$b3)
	{
		$y=mysql_query("insert into orders values('','$b','$b1','0','$b3')");
		return $y;
	}
	function orview($w)
	{
		$z=mysql_query("select a.o_id, a.p_id,c.ID,b.title,b.path,b.price from orders a inner join user c on a.b_id=c.ID inner join products b
            on b.Id=a.p_id where a.b_id='$w' and a.status='0'");
			return $z;
	}
	function sellview($d)
	{
		$z1=mysql_query("select a.o_id,a.p_id,a.b_id,c.name,b.title,b.price,b.path from orders a , products b,user c where a.se_id='$d' and a.status='0' and  a.p_id=b.Id and a.b_id=c.ID group by
		    a.o_id,a.b_id,b.title,b.price,b.path");
		    return $z1;
	}
	function pdelivery($f1)
	{
		$d4=mysql_query("update orders set status=(case when status='0' then '1' else '0' end)where o_id='$f1'");
		return $d4;
	}
	function deview($w1)
	{
		$z2=mysql_query("select a.o_id, a.p_id,c.ID,b.title,b.path,b.price from orders a inner join user c on a.b_id=c.ID inner join products b
            on b.Id=a.p_id where a.b_id='$w1' and a.status='1'");
			return $z2;
	}
	function prcount($w1)
	{
		$ki=mysql_query("select count(o_id) from orders where b_id='$w1' and status='1' group by b_id,status");
		    return $ki;
	}
	function payment($w1)
	{
		$po=mysql_query("select sum(b.price), a.b_id from orders a,products b where a.b_id='$w1' and status='1' and a.p_id=b.Id group by a.b_id");
		    return $po;
	}
	
}
?>