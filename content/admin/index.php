<?php
if (isset($_POST["name"], $_POST["logo"], $_POST["qui"], $_POST["facebook"], $_POST["twitter"], $_POST["instagram"], $_POST["youtube"], $_POST["soundcloud"], $_POST["bandcamp"], $_POST["email"], $_POST["tel"])) {
    require_once '../sql/Sql.php';
    $sql = new Sql;
    //$_POST is an array with all datas from my form
    $sql->update_band(htmlspecialchars($_POST["name"]), htmlspecialchars($_POST["logo"]), htmlspecialchars($_POST["qui"]), htmlspecialchars($_POST["facebook"]), htmlspecialchars($_POST["twitter"]), htmlspecialchars($_POST["instagram"]), htmlspecialchars($_POST["youtube"]), htmlspecialchars($_POST["soundcloud"]), htmlspecialchars($_POST["bandcamp"]), htmlspecialchars($_POST["email"]), htmlspecialchars($_POST["tel"]));
}
?>
<?php
require_once '../sql/Sql.php';
$sql = new Sql;
$band = $sql->band();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Panel admin <?php echo $band['name']; ?></title>
</head>

<body>


    <h2>Bienvenue sur le Panel Admin <?php echo $band['name']; ?> !</h2>    
    <button class="btn">
        <a href="../index.php" target="_blank">PREVIEW</a>
    </button>
    <button class="btn">
        <a href="newUserForm.php" >AJOUT NOUVEL UTILISATEUR</a>
    </button>
    <button class="btn">
        <a href="" >DECONNEXION</a>
    </button>
    <form action="" method="post" id="panel-admin" class="form-group col">
        <fieldset>
            <p>
                <label>Name</label>
                <br>
                <input type="text" placeholder='Votre nom de groupe' name="name" class="form-control col-6" value="<?php echo $band['name']; ?>" />
            </p>

            <p>
                <label>Logo</label>
                <br>
                <input type="text" placeholder='Votre Logo de groupe' name="logo" class="form-control col-6" value="<?php echo $band['logo']; ?>" />
            </p>

            <p>
                <label>Qui</label>
                <br>
                <input type="text" placeholder='Vos infos du groupe' name="qui" class="form-control col-6" value="<?php echo $band['qui']; ?>" />
            </p>

            <p>
                <label>Facebook</label>
                <br>
                <input type="text" placeholder='Votre identifiant Facebook' name="facebook" class="form-control col-6" value="<?php echo $band['facebook']; ?>" />
            </p>

            <p>
                <label>Twitter</label>
                <br>
                <input type="text" placeholder='Votre identifiant Twitter' name="twitter" class="form-control col-6" value="<?php echo $band['twitter']; ?>" />
            </p>

            <p>
                <label>Instagram</label>
                <br>
                <input type="text" placeholder='Votre identifiant Instagram' name="instagram" class="form-control col-6" value="<?php echo $band['instagram']; ?>" />
            </p>

            <p>
                <label>Youtube</label>
                <br>
                <input type="text" placeholder='Votre identifiant Youtube' name="youtube" class="form-control col-6" value="<?php echo $band['youtube']; ?>" />
            </p>

            <p>
                <label>Soundcloud</label>
                <br>
                <input type="text" placeholder='Votre identifiant Soundcloud' name="soundcloud" class="form-control col-6" value="<?php echo $band['soundcloud']; ?>" />
            </p>

            <p>
                <label>Bandcamp</label>
                <br>
                <input type="text" placeholder='Votre identifiant Bandcamp' name="bandcamp" class="form-control col-6" value="<?php echo $band['bandcamp']; ?>" />
            </p>

            <p>
                <label>Email</label>
                <br>
                <input type="email" placeholder='Votre Email' name="email" class="form-control col-6" value="<?php echo $band['email']; ?>" />
            </p>

            <p>
                <label>Téléphone</label>
                <br>
                <input type="tel" placeholder='Votre téléphone' name="tel" class="form-control col-6" value="<?php echo $band['tel']; ?>" />
            </p>

            <input type="submit" id="submit-login" value="Changer" />

        </fieldset>
    </form>


</body>

</html>