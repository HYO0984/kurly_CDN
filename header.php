<?
//데이터베이스 연동(인증)
$dbservername = 'localhost';
$dbusername = 'hoo0049';
$dbuserpassword = 'bana09840049!';
$dbname  = 'hoo0049';

//1-1. 데이터베이스 접속
$conn = mysqli_connect($dbservername,$dbusername,$dbuserpassword,$dbname);
mysqli_set_charset($conn, 'utf8');

//1-2. 데이터베이스 연결 확인
if(!$conn){ //true가 아니면
  die('데이터베이스 접속 실패');
}
?>