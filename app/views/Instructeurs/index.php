<?php require APPROOT . '/views/includes/header.php'; ?>

<?php
echo "Hallo " . $data['firstname'] . " " . $data['infix'] . " " . $data['lastname'];

?>

<br>
<a href="<?= URLROOT; ?>/Homepages/index">Homepage</a>

<?php require APPROOT . '/views/includes/footer.php'; ?>

