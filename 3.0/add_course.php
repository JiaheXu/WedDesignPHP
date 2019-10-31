<?php 
header("ALLOW-CONTROL-ALLOW-ORIGIN:*");
header('Access-Control-allow-credentials:true');
header("Content-Type:text/html;charset=utf-8");
header("Access-Control-allow-methonds:POST,GET");
$cid =$_GET["cid"];
$uid =$_GET["uid"];
$ctitle=$_GET["ctitle"];
$cover_url =$_GET["cover_url"];
$ctext =$_GET["ctext"];
$day =$_GET["day"];
include_once "mysql.php"; 
//home_url,syllabus_url,  modles_url, 

  
$sql = "insert into user (uid,pwd,user_type,tmp)values('xxx','bcc','ccc','1')";   

$sql = "insert into user (uid,tmp)values('yyy','12')";  
$sql = "insert into class (cid,ctitle, cover_url,uid,ctext,day) values('xxx','b','c','d','e','23')";  
$sql = "insert into class (cid,ctitle, cover_url,uid,ctext,day) values(".$cid.",'".$ctitle."','".$cover_url."',".$uid.",'".$ctext."',".$day.")";                                      
try{
$result = $con->query($sql);
 echo "yes";
}
catch(PDOException $e)
{
    echo "no";
}

?>
