// 2313 정지원
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js"></script>
<script>
       $(document).ready(function() {
      //모든 요소가 다 로드된 다음 뭐할래?
      setInterval(function() {
         //1000ms 간격으로 이 부분을 반복해서 실행하겠다
         $.ajax({
            url: "gas_data.php",
            method: "GET",
            dataType: "text",
            success: function(data) {
               var mydata = JSON.parse(data);
               mydata.num
               mydata.gas
               mydata.cds
               mydata.date
               console.log(mydata); // server가 보낸 response 출력하기!
               $('#mytable > tbody').prepend('<tr><td>'+mydata.num+'</td><td>'+mydata.gas+'</td><td>'+mydata.cds+'</td><td>'+mydata.date+'</td></tr>');
        // 개수가 10개를 유지하시오!
        if($('#mytable > tbody tr').length > 10) {
            $('mytable > tbody tr:last').remove();  
        }
        function test2_2() {
        // table에 마지막에 하나의 레코드를 삽입
        $('#mytable > tbody').prepend('<tr><td>11</td><td>22</td><td>33</td><td>44</td></tr>');
            }
        }
         })
      },1000);
   });
    function test1() {
        // table에 마지막에 하나의 레코드를 삽입
        $('#mytable').append('<tr><td>#</td><td>#</td><td>#</td><td>#</td></tr>');
    }
    function test2() {
        // 버튼이 눌려진 지점
        $('#mytable > tbody').prepend('<tr><td>#</td><td>#</td><td>#</td><td>#</td></tr>');
        // 개수가 10개를 유지하시오!
        if($('#mytable > tbody tr').length > 10) {
            $('mytable > tbody tr:last').remove();  
        }
        function test2_2() {
        // table에 마지막에 하나의 레코드를 삽입
        $('#mytable > tbody').prepend('<tr><td>11</td><td>22</td><td>33</td><td>44</td></tr>');
    }
    }
    function test3() {
        // 현재 레코드의 개수를 console에 출력해보기!
        console.log($('#mytable > tbody tr').length);
    }
    function test4() {
        // 모든 레코드 삭제하기
        $('#mytable > tbody').empty();
    }
    function test5() {
        // 제일 마지막 1개 삭제하기
        $('mytable > tbody tr:last').remove(); 
       
    }
</script>
<button onclick = test1()>테스트1</button>
<button onclick = test2()>테스트2</button>
<button onclick = test2_2()>테스트2_2</button>
<button onclick = test3()>테스트3</button>
<button onclick = test4()>삭제</button>
<button onclick = test5()>제일마지막1개삭제</button>
<table id = mytable border = "1" width = 500>
<thead>
<tr>
    <th>번호</th>
    <th>가스 농도</th>
    <th>조도 센서</th>
    <th>시간</th>
</tr>
</thead>
<tbody>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
</tbody>
<table>
