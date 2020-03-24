# TP-MVC

## Objectifs

L'objectif de ce TP est de partir d'un site web où tout est écrit dans un seul
fichier, et de petit à petit transformer sa structure pour respecter
l'architecture MVC.

## Questions

Remarque préliminaire : Testez votre code souvent. Puis faites des commits
lorsqu'une fonctionnalité a été implémentée.

### Question 1

- Examinez le fichier `index.php` qui se trouve à la racine de ce projet.
- Ajoutez la base de données correspondante se trouvant dans le répertoire `sql`.
- Modifiez le fichier `index.php` pour que la connexion à la base de données soit valide.
- Exécutez le fichier `index.php` en vous assurant que votre projet se trouve bien dans le répertoire `www` ou `htdocs`.
- Que fait-il ?
- Que pensez-vous de ce code en terme de lisibilité et de facilité de modification ?

### Question 2

- Copiez le code d'accès à la base de données dans un fichier appelé `connexion.php` et incluez-le dans votre fichier `index.php` via un `require`. Ce fichier `connexion.php` devra être dans un répertoire `models`.
- Repérez dans le fichier `index.php` les bouts de code qui permettent d'écrire des requêtes SQL. Remplacez ces bouts de code par des fonctions et appels de fonctions.
- Déplacez ensuite ces fonctions dans un autre fichier intitulé `fonctions.php` que vous appellerez dans le fichier `index.php` via un `require`. Ce fichier devra être dans un répertoire `models`.
- Testez votre code.

### Question 3

- Repérez dans le fichier `index.php` les bouts de code qui permettent d'écrire du code HTML.
- Déplacez le code HTML dans deux fichiers `edit.php` pour l'ajout ou la modification d'un utilisateur et `list.php` pour l'affichage des utilisateurs. Ces deux fichiers devront être dans une repértoire appelé `views`.
- Modifiez le fichier `index.php` en incluant ces fichiers avec des `include`.
- Testez le code.

## Pour aller plus loin

Un autre TP est disponible sur Moodle avec un petit projet adoptant déjà
l'architecture MVC. Le travail consiste essentiellement à analyser le code et
en comprendre le fonctionnement.

Vous pourrez trouver ces documents en [cliquant
ici](https://moodle.isep.fr/moodle/mod/folder/view.php?id=3608).
