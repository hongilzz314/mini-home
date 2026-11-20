
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>글쓰기</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>나의 미니 홈페이지</h1>
</header>

<nav>
    <a href="index.php">홈</a>
    <a href="board.php">게시판</a>
    <a href="write.php">글쓰기</a>
</nav>

<main>
    <h2>게시글 작성</h2>

    <form action="save.php" method="post">
        <label>작성자</label>
        <input type="text" name="name"
               maxlength="50" required>

        <label>제목</label>
        <input type="text" name="title"
               maxlength="200" required>

        <label>내용</label>
        <textarea name="content" rows="8"
                  required></textarea>

        <button type="submit">등록하기</button>
        <a class="btn" href="board.php">목록</a>
    </form>
</main>
</body>
</html>
