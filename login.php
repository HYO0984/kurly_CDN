<?
include_once('./header.php');

//폼 데이터
$userId = $_POST['userId'];
$userPw = $_POST['userPw'];

//데이터베이스 데이터 가져오기
$sql = "SELECT * FROM kurly_member_table";
$result = mysqli_query($conn , $sql);

//조회된 SQL의 결과 데이터가 1개 이상의 데이터가 있으면 비교
if(mysqli_num_rows($result) > 0){
  //1행씩 반복처리
  $json_data=''; 
  while($row = mysqli_fetch_array($result)){
    if($userId==$row['id'] && $userPw==$row['pw']){
      //아이디와 비밀번호가 같다면 로그인 가능하다. 세션
      session_start(); // 세션 시작(로그인 시작) 서버에 접근 권한
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['user_name'] = $row['irum'];
      $session_id = session_id();
      //AXIOS 응답내용은 아이디와 이름을 직점 JSON 형태로 전송한다.
      $json_data = '{"세션":"'.$session_id.'","아이디": "'.$row['id'].'" , "이름":"'.$row['irum'].'"}';
    }
  }
}

echo $json_data;

include_once('./footer.php');
?>