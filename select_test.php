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
array_push($arr,arry(

  '번호' =>'1',
  '아이디' =>'helloid123',
  '비밀번호'=>'byebye12345',
  '이름'=>'김나연',
  '이메알'=>'helloid123@naver.com',
  '휴대폰'=>'01085208542',
  '주소'=>'경기도 수원시',
  '성별'=>'여자',
  '생년월일'=>'1992-10-14',
  '추가항목'=>'신규가입',
  '이용약관동의'=>'이용약관동의(필수),개인정보수집·이용(필수),개인정보수집·이용(선택),무료배송, 할인쿠폰 등 혜택/정보 수신 동의,SNS,이메일,본인은 만 14세 이상입니다.(필수)',
  '가입일자'=>'2022-08-08'

));






//2. JSON 데이터로 변환하여 내보내기 한다. echo.jsonData
//이스케이프 문자 출력 \16진수 코드
// $$jsonData = json_encode($arr);

//이스케이프 문자 사용 안함 (JSON_UNESCAPED_UNICODE)
$$jsonData = json_encode($arr, JSON_UNESCAPED_UNICOD);

echo $jsonData;

include_once('./footer.php');
?>