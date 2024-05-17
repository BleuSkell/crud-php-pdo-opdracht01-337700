<?php require APPROOT . '/views/includes/header.php'; ?>

<h3><?= $data['title']; ?></h3>

<form action="">
    <h5>Kies 4 basiskleuren voor uw nagels:</h5>
    <input type="color" name="color1" id="color1">
    <input type="color" name="color2" id="color2">
    <input type="color" name="color3" id="color3">
    <input type="color" name="color4" id="color4">

    <h5>Uw telefoonnummer:</h5>
    <input type="number" name="phone" id="phone">

    <h5>Uw e-mailadres:</h5>
    <input type="email" name="mail" id="mail">

    <h5>Afspraak datum:</h5>
    <input type="date" name="appointment" id="appointment">

    <h5>Soort behandeling:</h5>
    <input type="checkbox" name="treatment" id="treatment">
    <label for="treatment">
        Nagclbilt arrangement (tcrmilnbctaling mogclijk) C180
        Luxe manicure (massage en handoakkins)
        Nagelreparatie per nagel (in eerste week gratis) 5,00
    </label>
    <br>
    <input type="submit" value="Sla op">
    <input type="reset" value="Reset">
</form>

<a href="<?= URLROOT; ?>/Homepages/index">Homepage</a>

<?php require APPROOT . '/views/includes/footer.php'; ?>

