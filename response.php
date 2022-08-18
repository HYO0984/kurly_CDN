<?
//http://hoo0049.dothome.co.kr/myadmin/

include_once('./header.php');

//프론트단에 보내온 데이터를 PHP 변수에 대입하기(넣기)
$id       = $_POST['id'];
$pw       = $_POST['pw'];
$irum     = $_POST['irum'];
$email    = $_POST['email'];
$hp       = $_POST['hp'];
$address  = $_POST['address'];
$gender   = $_POST['gender'];
$birthday = $_POST['birthday'];
$addinput = $_POST['addinput'];
$service  = $_POST['service'];
$gaib     = $_POST['gaib'];


// 데이터베이스 저장
$sql = "INSERT INTO kurly_member_table (id, pw, irum, email, hp, address_, gender, birthday, addinput, service_, gaib) 
        VALUES ('$id',  '$pw', '$irum', '$email', '$hp', '$address', '$gender', '$birthday', '$addinput', '$service', '$gaib')";
$result = mysqli_query($conn, $sql);



include_once('./footer.php');

?>