<?php
require_once "includes/require.php";
include_once 'header.php';
 ?>
    <div class="main" style="width: 500px;">
        <h1>SocialTrack Support:</h1>
    </div>
    <style>
        .main p {
            font-size: 10pt;
            max-width: 60%;
            margin: 0 auto;
            line-height: 30px;
        }
    </style>

    <div class="main">
        <h2>GitHub</h2>
        <p>Auf dem <a target="_blank" style="color: var(--green)" href="https://github.com/StormarnSozial/SocialTrack">>>SocialTrack GitHub<<</a>
            ist der komplette Source-Code öffentlich und wird auch ständig bearbeitet.<br>
            Ich würde mich sehr freuen, wenn ihr gefundene Fehler dort meldet!</p>
    </div>

    <div class="main">
        <h2>Login:</h2><br>
        <h3>-> Account</h3>
        <p>Solltest du bis jetzt noch über keinen account verfügen,<br>schreibe eine E-Mail über ISurf an: 
        <a href="mailto:<?php echo(getSupportEmail()); ?>?subject=Account"><?php echo(getSupportEmail()); ?></a></p><br>
        <p>Ein Admin wird dir einen Account erstellen und dir mit deinen Benutzernamen und deinem temporären Passwort 
            antworten.</p><br>
        <h3>-> Account Anmeldeinformationen</h3>
        <p>Mit diesen kannst du dich rechts im Reiter 'Log-in' anmelden.</p><br>
        <h3>-> Passwort ändern</h3>
        <p>
            Wenn du angemeldet bist änderst du bitte dein Passwort! Dies geht in dem Tab 'Settings' dort musst du dann in
            dem zweiten Abschnitt dein neues Passwort einmal eingeben und nochmal bestätigen.
        </p>
    </div>
    <div class="main">
        <h2>Aktivitäten:</h2><br>
        <h3>-> Eintragen/Hinzufügen von Aktivitäten</h3>
        <p>
            Du kannst deine für die Schule erledigten 'Dienste', wie z.B. Hausaufgaben Hilfe in 
            Form von Aktivitäten in deinen Kalender eintragen.
            Dies geht folgendermaßen:<br>
            <span style="font-size: 12pt;">
            1. Melde dich mit deinem Account an<br>
            2. Gehe im Menu auf 'Aktivitäten'<br>
            3. Trage die Informationen des Aktivitäten/der einzigen Tätigkeit<br> im zweiten Abschnitt der Seite ein <br>(du kannst das Feld mit 'ID' leer lassen)<br>
            4. Klicke auf 'Hinzufügen'<br></span>
        </p><br>
        <h3>-> Bearbeiten von Aktivitäten</h3>
        <p>
            Diese kannst du auch wieder bearbeiten, indem du auf der gleichen Seite bei dem Feld 'ID' die ID der Aktivitäten
            eingibst, diese bekommst du aus der oben stehenden Tabelle, und die Informationen, die du verändern willst,
            in die restlichen Felder eingibst.
        </p>
    </div>
    <div class="main">
        <h2>Accountinformationen:</h2><br>
        <h3>-> Nickname/Spitzname bearbeiten</h3>
        <p>Dies kannst du auch in den Einstellungen bzw. 'Settings' hier musst du nur oben deinen neuen Spitznamen eintragen und Abschicken.</p><br>
        <p style="color: red;">Dein 'Nickname' wird nur für cosmetische Zwecke der Website verwendet und kann nicht von anderen Benutzern eingesehen werden!</p>
    </div>
<?php
if (isset($_SESSION["username"]) && getUserPower(con(), $_SESSION["username"]) >= 100)
?>
    <div class="main">
        <h2>Administrator Support:</h2><br>
        <h3>-> Power-Stufen</h3>
        <p>40+ 'Datacenter'&'Teams' zugriff</p>
        <p>50+ 'Datacenter' alle Teams bearbeiten</p>
        <p>80+ 'Teams' alle Teams bearbeiten</p>
        <p>100+ Management zugriff</p>
        <p>110+ User Rolle bearbeiten</p>
        <p>127+ Unbegrenzte Rechte</p>
    </div>