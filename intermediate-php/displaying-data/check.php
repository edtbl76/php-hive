<?php require 'data.php' ?>

<table>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Year</th>
    </tr>
    <?php foreach ($books as $book) : ?>
        <tr>
            <td><?= $book['title'] ?></td>
<!--            Null Coalesce operator is only available since PHP 7.0. -->
<!--            <td>--><?php //= $book['author'] ?? 'Unknown' ?><!--</td>-->
<!--            <td>--><?php //= $book['year']  ?? 'Unknown'?><!--</td>-->
<!--            For backwards compatibility a ternary operator can be used. -->
            <td><?= isset($book['author']) ? $book['author'] : 'Unknown' ?></td>
            <td><?= isset($book['year']) ? $book['year'] : 'Unknown' ?></td>
        </tr>
    <?php endforeach; ?>
</table>