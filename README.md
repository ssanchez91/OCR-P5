<h1>P5 - OpenClassRooms</h1>
<hr>
<h2>Informations</h2><br>

![img1](https://github.com/MirkoV1987/OCR-P5/blob/master/Public/img/readme/frontend.png?raw=true "Frontend Screenshot")

![img2](https://user-images.githubusercontent.com/52068274/70866765-e6112100-1f6d-11ea-995a-7ccc82edf81a.png?raw=true "Backend Screenshot")

Les diagrammes UML représentent les fonctionnalités de type view, add, update et delete.
Celles-ci sont les mêmes pour les articles, les commentaires et les utilisateurs.

La manipulation des données stockés (Hydratation : Entité/Manager) a été effectué en suivant le cours de Victor Thuillier.

Le thème Bootstrap utilisé a été crée par Start Bootstrap. <a href="https://startbootstrap.com/themes/agency/" target="_blank">Plus d'informations</a>

<h2>Installation</h2><br>
<ul>
  <li><b>Etape 1 :</b> Transférer les fichiers dans le dossier racine de votre serveur web (en général "www/").</li>
  <li><b>Etape 2 :</b> Créer une base données sur votre SGDB (MySQL) et importer le fichier DB/dbblog.sql pour charger les tables du blog.</li>
  <li><b>Etape 3 :</b> Dans le fichier Framework/Model.php, modifiez les paramètres suivants :</li>
</ul>
<ul>
  <li>host : 'mysql:host=AdresseDB;</li>
  <li>dbname: dbname=NomDB; (mom par défaut = dbblog);</li>
  <li>login : 'utilisateurDB';</li>
  <li>password : passwordDB';</li>
</ul>
<b>Important</b>
 Veillez à bien remplir tout les champs avec vos informations de la même façon que celle fournit dans l'exemple !

<h2>Paramétrage du formulaire de contact</h2><br>
<ul>
  <li>email = 'votreEmailDeReception@gmail.com'</li><br>
  <li>noreply = 'noreply@votredomaine.com'</li><br>
  <li>domain = 'http://votredomaine.com/NomDuDossierRacine/'</li><br>
</ul>
Ne pas indiquer de NomDeDossierRacine/ si les fichiers se trouvent à la base de votre dossier web

Votre blog est désormais fonctionnel !<br>
<ul>
  <li>Vous pouvez créer un compte dans l'onglet "Connexion".</li><br>
  <li>Ensuite, cliquez sur <em>créer un compte !</em> en bas du formulaire de login.</li>
</ul>

<h2>Obtenir un compte Admin</h2><br>
<ul>
  <li>Dans votre base de données et dans la table "user", modifier la colonne "role" de l'utilisateur que vous venez de créer et insérez la valeur 2.</li><br> 
  <li>Enregistrez la modification.</li><br>
<li>Vous disposez désormais d'un compte administrateur qui vous permet de gérer votre blog via le tableau de bord.</li>
</ul>
Attention ! La protection de répertoires doit être réalisée sous Apache soit via httpd.conf ou soit via des fichiers .htaccess et .htpasswd<br>
Veuillez à bien protéger le dossier Config/ ainsi que tout les autres dossiers contenant du code qui ne doit pas être accessible par l'utilisateur !