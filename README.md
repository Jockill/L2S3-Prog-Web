# PW2_Back

Backend repo du projet de prog. web de Math-info L2.

#Utilisation de la BDD
##PDO
Vous avez à votre disposition deux manières d'utiliser le _PDO_.
 1. Intégrer la base de donnée jointe avec le nom `progweb`, sur un compte `localhost@cours` avec comme mot de passe `1810`
 2. Utiliser vos propres variables d'environement :
  * _BDDNAME_ pour le nom de la base,
  * _USERNAME_ pour le nom d'utilisateur,
  * _PASS_ pour son mot de passe.
 Il vous faudra cependant modifier les premières lignes du `try` des fichier :
 * forum.php
 * login.php
 * new_message.php
 * new_player.php


La base de données se compose de deux tables créées avec _mysql_:
 * comment
 * user_data

##Comment
Cette table stocke tous les commentaires postés sur le forum du site. Elle se compose de 3 champs, dans l'ordre:
 * id
 * text
 * author

_id_ est la clé primaire de la table. Ce champ est un __int__ ne pouvant être __NULL__ et s'incrémentant automatiquement.
Ce champ n'est pas activement utilisé mais pourrait permettre dans une _V2_ d'identifier un commentaire précis dans la liste du forum
et de l'afficher. Il peut également servir aux modérateurs pour une suppression plus aisée dans la table en cas de besoin.

_text_ n'a pas le nom le plus intelligent possible mais est de type __text__. Il correspond au message du commentaire.

_author_ est un __int__ liant la table _'comment'_ à la table _'user_data'_. Il correspond à l'_id_ de l'utilisateur ayant posté le commentaire.


##User_data
Cette table stocke tous les utilisateurs créés sur le site. Elle se compose de 4 champs, dans l'ordre:
 * id
 * username
 * pass
 * ppurl

_id_ est la clé primaire de la table. Ce champ est un __int__ ne pouvant être __NULL__ et s'incrémentant automatiquement.
Il correspond au numéro d'inscription unique de l'utilisateur.

_username_ est une __string__ de 50 caractères maximum. Elle représente le nom de l'utilisateur.

_pass_ est une __string__ de 50 caractères maximum. Elle représente le mot de passe de l'utilisateur. Aucune restriction n'a été posée sur la création du mot de passe par choix, le site n'utilisant pas d'informations sensibles pour justifier un mot de passe encombrant pour l'utilisateur.

_ppurl_ est un champ __text__. L'utilisateur peut y entrer une URL menant à une image qui deviendra sa photo de profil. Le changement est prévu pour la _V2_ et se fera sur la page d'accueil du site.
