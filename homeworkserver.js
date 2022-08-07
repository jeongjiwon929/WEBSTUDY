const http = require('http'); // http 모듈을 사용하기 위해 require() 메소드를 호출.
const fs = require('fs').promises; // fs는 파일 시스템을 조작하는 다양한 메서드를 제공하여 파일을 가져오기 위해 사용.
                                   //  promises를 사용하여 비동기 방식의 fs 메서드를 동기처리함.
// 요청 객체 req와 응답 객체인 res를 사용.
http.createServer(async (req, res) => {
    // 예외를 처리할 때 쓰이는 try-catch를 이용하여
    // try에서 에러가 생기면 catch블록으로 이동한다.
    try {
        const data = await fs.readFile('./server.html')
        res.writeHead(200, { 'Content-Type': 'text/html; charset=utf-8'}); // 첫 번째 인수는 성공적인 요청임을 의미하는 200,
        res.end(data)                                                      // 두 번째 인수로는 응답에 대한 정보를 보내는 콘텐츠 형식이 HTML임을 알림. 한글 표시를 위해 utf-8로 지정.
    } catch(data) {
        console.error(err);
        res.writeHead(500, {'Content-Type': 'text/plain; charset=utf-8'});
        res.end(err.message);               // 에러 메시지는 일반 문자열이므로 text/plain을 사용
    }
})
// listen 메서드에 클라이언트에 공개할 포트번호와 포트 연결 완료 후 실행될 콜백 함수를 넣는다. (8080포트에서 요청이 오기를 기다릴 것이다.)
.listen(8080, () => {
    console.log('8080번 포트에서 서버 대기 중입니다')
});
