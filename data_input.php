<html>
<head><title>Document</title></head>
<body><br><center> <h2> 도 서 입 력 </h2><hr>
    <form name=f2 method=post action="insert_db.php">
        <table border=0 width=500 height=180 bgcolor=#FFFFCC >
            <tr>
                <td height=20></td>
            </tr>
            <tr>
                <br>
                <td width=20% height=30 align=right><b> 도서 종류 : </b></td>
                <td> &nbsp;<input type="text" size=12 maxlength=10 name='bno'></td>
            </tr>
            <tr>
                <td width=20% height=30 align=right><b> 도서 이름 : </b></td>
                <td> &nbsp;<input type="text" size=12 maxlength=10 name='name'></td>
            </tr>
            <tr>
                <td height=30 align=right><b> 도서 위치 : </b></td>
                <td> &nbsp;<input type="text" size=40 name='addr'></td>
            </tr>
            <tr>
                <td width=40% align=center colspan=2>
                    <input type=submit value=" 입력하기 ">&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type=reset value=" 다시작성 ">
                </td>
            </tr>
        </table>
    </form>
    ◀◀ [ <a href="main.php"> 메인 화면</a> ] &nbsp; | &nbsp;
        [ <a href="data_output.php"> 결과 화면</a> ] ▶▶</center>

    <img src="십진분류표.jpg">
</body>
</html>