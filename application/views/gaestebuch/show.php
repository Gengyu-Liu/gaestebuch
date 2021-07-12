<table>
    <tr>
        <th>ID<a href="index.php/orderBy/id/ASC">&#8593;</a><a href="index.php/orderBy/id/DESC">&#8595;</a></th>
        <th>Name<a href="index.php/orderBy/name/ASC">&#8593;</a><a href="index.php/orderBy/name/DESC">&#8595;</a></th>
        <th>Email<a href="index.php/orderBy/email/ASC">&#8593;</a><a href="index.php/orderBy/email/DESC">&#8595;</a></th>
        <th>Kommentar<a href="index.php/orderBy/kommentar/ASC">&#8593;</a><a href="index.php/orderBy/kommentar/DESC">&#8595;</a></th>
    </tr>
    <?php foreach ($gaestebuch as $row): ?>
    <tr>
        <th><?= $row['id'] ?></th>
        <th><?= $row['name'] ?></th>
        <th><?= $row['email'] ?></th>
        <th><?= $row['kommentar'] ?></th>
        <th><a href="<?= 'index.php/view/'.strip_tags($row['id']); ?>">&#128465;</a></th>
        <th><a href="<?= 'index.php/update/'.strip_tags($row['id']); ?>">&#9998;</a></th>
    </tr>

    <?php endforeach; ?>    
</table>

