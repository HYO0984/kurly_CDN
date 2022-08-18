<?
include_once('./header.php');

//테스트 점검
//http://hoo0049.dothome.co.kr/kurly
//http://hoo0049.dothome.co.kr/kurly/select.php

//데이터베이스에서 데이터 가져오기 SELECT 조회하기
$sql= "SELECT * from kurly_member_table";
$result=mysqli_query($conn,$sql);

//확인 테스트 : 갯수
// echo '레토드(행==줄) == 튜플 갯수:' .mysqli_num_rows($result);
//1. 데이터베이스 데이터를 리액트 사용 가능하도록 객체(배열객체) 로 저장하고
$arr = array(); //배열조건

//idx,id, pw, irum, email, hp, address_, gender, birthday, addinput, service_, gaib
// 배열객체에 데이터 속성 넣기(배열객체,array);


//데이터가 1개 이상 있다면
if(mysqli_num_rows($result)>0){
  // 1행씩 변수 $row 에 가져와서 반복처리
  while($row = mysqli_fetch_array($result)){
    array_push($arr,array(
      '번호' =>$row['idx'],
      '아이디' =>$row['id'],
      '비밀번호'=>$row['pw'],
      '이름'=>$row['irum'],
      '이메알'=>$row['email'],
      '휴대폰'=>$row['hp'],
      '주소'=>$row['address_'],
      '성별'=>$row['gender'],
      '생년월일'=>$row['birthday'],
      '추가항목'=>$row['addinput'],
      '이용약관동의'=>$row['service_'],
      '가입일자'=>$row['gaib']
    
    ));
  }
} 




//2. JSON 데이터로 변환하여 내보내기 한다. echo.jsonData
//이스케이프 문자 출력 \16진수 코드
// $jsonData = json_encode($arr);

//이스케이프 문자 사용 안함 (JSON_UNESCAPED_UNICODE)
$jsonData = json_encode($arr, JSON_UNESCAPED_UNICODE);

echo $jsonData;

include_once('./footer.php');
?>