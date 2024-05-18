<?php require APPROOT . '/views/includes/header.php'; ?>

<h3><?= $data['title']; ?></h3>

<table class="table table-hover">
    <thead>
        <th>color</th>
        <th>phone</th>
        <th>mail</th>
        <th>date</th>
        <th>treatment</th>
    </thead>
    <tbody>
        <?= $data['dataRows']; ?>
    </tbody>
</table>

<a href="<?= URLROOT; ?>/Homepages/index">Homepage</a>
<a href="<?= URLROOT; ?>/chantal/index">Maak een nieuwe afspraak</a>

<?php require APPROOT . '/views/includes/footer.php'; ?>