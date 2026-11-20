
<?php
require_once "db.php";

// 게시글 조회: 최신 글 먼저
$sql = "SELECT id, name, title, created_at
        FROM posts ORDER BY id DESC";

$stmt = $pdo->query($sql);
$posts = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>게시판</title>
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
    <h2>자유 게시판</h2>

    <table>
        <tr>
            <th>번호</th>
            <th>제목</th>
            <th>작성자</th>
            <th>작성일</th>
        </tr>

        <?php foreach ($posts as $post): ?>
        <tr>
            <td><?= (int)$post['id'] ?></td>
            <td>
                <a href="view.php?id=<?= (int)$post['id'] ?>">
                    <?= htmlspecialchars($post['title'],
                        ENT_QUOTES, 'UTF-8') ?>
                </a>
            </td>
            <td><?= htmlspecialchars($post['name'],
                ENT_QUOTES, 'UTF-8') ?></td>
            <td><?= htmlspecialchars($post['created_at'],
                ENT_QUOTES, 'UTF-8') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <?php if (empty($posts)): ?>
        <p>등록된 게시글이 없습니다.</p>
    <?php endif; ?>

    <a class="btn" href="write.php">글쓰기</a>
</main>
</body>
</html>
