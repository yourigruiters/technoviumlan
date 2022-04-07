<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Contact</title>
</head>
<body>
    <section>
        <header class="header-contact">
            <div class="logo overlay"><h3>TechnoviumLAN</h3></div>
            <nav>
                <ul>
                <a href="index.php"><li>Home</li></a>
                <a href="inschrijven.php"><li>Inschrijven</li></a>
                <a href="huisregels.php"><li>Huisregels</li></a>
                <a href="contact.php"><li>Contact</li></a>
                </ul>
            </nav>
            <div class="buttons">
                <ul>
                    >
                    <li>
                        <button id="aanmeldKnop">Aanmelden</button>
                    </li>
                    >
                    <li>
                        <button class="yellow" id="registratieKnop">Registreren</button>
                    </li>
                    >
                </ul>
            </div>
        </header>
    </section>

    <main>
        <div class="container-contact">
            <div class="inner-container-contact">
                     
            </div>
            <div class="inner-container-contact">
                <iframe 
                    class="google-maps"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.9612256215028!2d5.868587915855283!3d51.82752816291921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c708fa2ca25e35%3A0x8daddc0e2cfc98dc!2sHeyendaalseweg%2098%2C%206525%20EE%20Nijmegen!5e0!3m2!1snl!2snl!4v1648396354558!5m2!1snl!2snl" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>              
            </div>       
        </div>        
    </main>

    <!-- Aanmeld Modal -->
    <div class="modal-spacer" id="aanmeldModal">
        <div class="modal aanmelden">
            <div class="image">
                <img src="media/aanmelden.gif" alt="anime" />
            </div>
            <div class="content">
                <div class="intro">
                    <h3>Aanmelden</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Magni debitis delectus quam nobis illum
                        dolorum?
                    </p>
                </div>
                <form action="">
                    <input
                        type="text"
                        name=""
                        id=""
                        placeholder="Gebruikersnaam..."
                    />
                    <input
                        type="text"
                        name=""
                        id=""
                        placeholder="Wachtwoord..."
                    />
                    <button type="submit" name="" id="">Aanmelden</button>
                </form>
                <div class="option">
                    <p>Nog geen account? <span>Registreer</span></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal-spacer" id="registratieModal">
        <div class="modal">
            <div class="image">
                <img src="media/registreer.png" alt="anime" />
            </div>
            <div class="content">
                <div class="intro">
                    <h3>Registreren</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Magni debitis delectus quam nobis illum
                        dolorum?
                    </p>
                </div>
                <form action="">
                    <input
                        type="text"
                        name=""
                        id=""
                        placeholder="Gebruikersnaam..."
                    />
                    <input
                        type="text"
                        name=""
                        id=""
                        placeholder="Email..."
                    />
                    <input
                        type="text"
                        name=""
                        id=""
                        placeholder="Wachtwoord..."
                    />
                    <input
                        type="text"
                        name=""
                        id=""
                        placeholder="Wachtwoord herhalen..."
                    />
                    <button type="submit" name="" id="">Registreer</button>
                </form>
                <div class="option">
                    <p>Heb je al een account? <span>Meld je aan</span></p>
                </div>
            </div>
        </div>
    </div>    

    <script src="js/jQuery.js"></script>
    <script src="js/main.js"></script>
</body>
</html>