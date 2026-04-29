<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>포에시아</title>
    <style>
        body {
            background-color: #8FCC6F; /* 세련된 연두색으로 설정 */
            color: white; /* 글자색을 흰색으로 설정 */
            text-align: center; /* 텍스트를 가운데 정렬 */
            padding: 50px; /* 내용과 화면 경계 사이의 간격 설정 */
            margin: 0; /* body의 margin 제거 */
            padding: 0; /* body의 padding 제거 */
            height: 100vh; /* 높이를 100%로 설정하여 화면 전체를 차지하도록 함 */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .logo-container {
            position: relative;
            text-align: center;
            margin-top: 20px; /* 로고와 상단 간격 조절 */
        }

        .logo {
            max-width: 100%; /* 로고의 최대 너비를 부모 요소에 맞게 설정 */
            max-height: 100px; /* 로고의 최대 높이를 제한 */
            margin-top: 10px; /* 로고 상단에 약간의 여백 추가 */
        }

        .content {
            flex: 1; /* 나머지 공간을 채우기 위해 flex 속성 추가 */
            display: flex;
            flex-direction: column;
            justify-content: center; /* 수직 방향으로 가운데 정렬 */
        }

        .footer {
            text-align: center;
            padding: 10px;
            background-color: #8FCC6F; /* 세련된 연두색으로 설정 */
            color: white; /* 글자색을 흰색으로 설정 */
        }

        @media (max-width: 768px) {
            .logo {
                max-width: 80%; /* 화면이 768px 이하일 때 로고 크기를 줄임 */
            }
        }
    </style>
</head>
<body>
    <div class="logo-container">
        <img src="./img/poesia_logo_231214.png" alt="Poesia Logo" class="logo">
    </div>
    <div class="content">
        <h1>준비중</h1>
    </div>
    <div class="footer">
        <p>(05854)서울특별시 송파구 법원로128 B동 420호(문정역SKV1)<br>
           tel. 02-3012-0302 fax. 0303-3443-0302<br>
           © 포에시아 Corp. All Rights Reserved.</p>
    </div>
</body>
</html>
