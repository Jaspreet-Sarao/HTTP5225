<?php
include 'connection.php';

$sql = "SELECT books.title, books.genre, books.publish_year, authors.name AS author_name, authors.country 
        FROM books 
        JOIN authors ON books.author_id = authors.id";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>BookHub</title>
</head>
<body>
    <h1>Book List</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Published</th>
            <th>Author</th>
            <th>Country</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['title']) ?></td>
            <td><?= htmlspecialchars($row['genre']) ?></td>
            <td><?= htmlspecialchars($row['publish_year']) ?></td>
            <td><?= htmlspecialchars($row['author_name']) ?></td>
            <td><?= htmlspecialchars($row['country']) ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php $conn->close(); ?>
