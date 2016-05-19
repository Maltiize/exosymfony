# exosymfony


Bienvenue sur mon exo fait en rush 

Pour lancer le projet php bin/console server:run 

le serveur sera lancé sur localhost:8000

J'ai codé ce projet avec Mamp comme service Web 

Il faut donc que vous adaptiez les parametres pour que l'appli puisse se connecter à votre base de donnée locale

de même un php bin/console doctrine:schema:update --dump-sql sera necessaire 

afin de synchroniser mes objets avec votre base 

De plus git ne semble pas vouloir mettre l'intégraité de /vendor dans mon repo 

Pour faire marcher l'application il faudra donc 

		- rm rf /vendor 

		- composer install ou composer.phar install si composer n'est pas installé globalement dans votre système


Ce qu'il manque :

		- verification sur chaque page que l'utilisateur ne modifie pas des données auxquel il n'aurait pas le droit 


		- Probleme sur la suppression des addresses "d'utilisateurs"

		