<?
include_once('./header.php');

// 1. 화면에서 입력하고 보낸 아이디,비번
$userId = $_POST['userId'];
$userPw = $_POST['userPw'];

// 2. 데이트베이스 데이터 모두 가져오기
  $sql = "SELECT * FROM kurly_member_table";
  $result = mysqli_query($conn,$sql);

//3. 반드시 1개이상인 데이터를 
//   반복처리(while) 행단위($row) 데이터 뽑아서(fetch) 변수 $row 저장
//   화면입력된 아이디 $userId, 비번 $userPw 을 
//    데이터베이스 모든 데이터($row['id'], $row['pw'],) 와 반복 비교처리
//   찾았다 그러면 쿠키설정(로그인 가능한상태)
  if(mysqli_num_rows($result) > 0){
    while($row= mysqli_fetch_array($result)){
      if($userId==$row['id'] && $userPw==$row['pw']){
        //로그인 : 쿠키설정 시간단위 초단위 3600초 1시간
        //분(1시간) * 초(1분) = 3600초
        //1시간 60 * 60 = 3600초
        //           분 * 초 * 1일(24시간)
        //1일(24시간) 60 * 60 * 24 = 86400초
        //1일(24시간) 60 * 60 * 24 * 30 = 86400초
        // setCookie('userId', $row['id'],time()+(60*60*24*3),'/'); //3일
        setCookie('userId', $row['id'],time()+(60*60*1),'/'); //1일
        // setCookie('userIrum', $row['irum'],time()+(60*60*24*3),'/');
      
        $json_data ='{"아이디":"'.$row['id'].'", "이름":"'.$row['irum'].'" }';
      }
    }
  }

// 4. 응답 AXIOS에
echo $json_data; // 아이디, 이름

include_once('./footer.php');
?>