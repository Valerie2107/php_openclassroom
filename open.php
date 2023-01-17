<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>
        <h1>Ma page web</h1>
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>


        <p> tests sur les variables et la concaténation 
        <br>
            <?php $ageUser=17;

            echo $ageUser;
            ?>
        <br>
        <?php
            $fullname = "Mathieu Nebra";
            echo "Bonjour $fullname et bienvenue sur le site !";
            ?>
        <br>
        <?php
            $fullname = 'Mathieu Nebra';
            echo 'Bonjour ' . $fullname . ' et bienvenue sur le site !'; // OK
        ?>
        </p>
    <h2>calculs simples en php</h2>
        <p>
            
</p>
    </body>
</html>