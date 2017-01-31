# test-symfony3

==============================
Manuel D'utilisation
=============================

1.Démarrer le serveur ( php bin/console server:start)
2. saisir http://localhost:8000/home dans un onglet
	Deux menus apparaissent (s'enregistrer et se connecter)
3. après s'être enregistré , vous recevez une notification
4. après s'être connecté, vous avez la possibilité de vous déconnecter

5. afficher le contenu de la base de donnée http::/localhost/display
   (exigence non traitée en entier{tableau affiché mais pas editable})

6. ajouter les amis et modifications des champs
   (non traité : bugs sur les collections array ou list{code commenté dans le controlleur ControllerUser.php})

[ou encore]


inscription
-----------
http://localhost:8000/register

connexion/deconnexion
---------------------

=================
Pour se connecter
=================

http://localhost:8000/login
ou
http://localhost:8000/profile

[une fois qu'on est connecté , un lien de déconnexion apparaît]
