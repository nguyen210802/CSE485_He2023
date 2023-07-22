<?php

    require_once 'controller\BookController.php';
    require_once 'model\IBook.php';
    require_once 'model\Book.php';
    $bookController = new \controller\BookController();

    $books = [new \model\Book("Sách 1", "Tác giả A", "NXB X", 2020, "1234567890", array("Chương 1", "Chương 2", "Chương 3")),
        new \model\Book("Sách 3", "Tác giả E", "NXB Z", 2021, "2345678901", array("Chương 1", "Chương 2", "Chương 3")),
        new \model\Book("Sách 2", "Tác giả C", "NXB Y", 2019, "3456789012", array("Chương 1", "Chương 2", "Chương 3")),
        new \model\Book("Sách 5", "Tác giả D", "NXB V", 2010, "3256789012", array("Chương 1", "Chương 2", "Chương 3"))];

    foreach ($books as $book){
        $bookController->addBook($book);
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['sort-author'])) {
            $bookController->sortByAuthor();
        } elseif (isset($_POST['sort-title'])) {
            $bookController->sortByTitle();
        } elseif (isset($_POST['sort-year'])) {
            $bookController->sortByYear();
        }
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Tên sách</th>
                <th>Tên tác giả</th>
                <th>Nhà xuất bản</th>
                <th>Năm xuất bản</th>
                <th>Số sách tiêu đề quốc tế</th>
                <th>Chương</th>
            </tr>
            <?php foreach ($bookController->getBooks() as $book) { ?>
            <tr>
                <td><?= $book->getTitle() ?></td>
                <td><?= $book->getAuthor() ?></td>
                <td><?= $book->getPublisher() ?></td>
                <td><?= $book->getYear() ?></td>
                <td><?= $book->getISBN() ?></td>
                <?php foreach ($book->getChapters() as $chapter){ ?>
                    <td><?= $chapter ?></td>
                <?php }?>
            </tr>
            <?php } ?>
        </table>
        <form action="" method="post" id="sort-form">
            <button type="submit" name="sort-author">Sắp xếp theo tên tác giả</button>
            <button type="submit" name="sort-title">Sắp xếp theo tên sách</button>
            <button type="submit" name="sort-year">Sắp xếp theo năm xuất bản</button>
        </form>
    </body>
</html>
