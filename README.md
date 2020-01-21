ekyna-learn/php-web-portfolio
===

Développement PHP d'un site internet : portfolio de photographe.

Dans un premier temps, la base de données est &laquo; simulée &raquo; 
par le fichier data/gallery.php, vous pourrez recupérer les données de 
ce fichier comme ceci :

 ```php
$data = require('data/gallery.php');
```

Les photos y sont représentées par des tableaux de ce type :
  
```php
[
    'id'          => 1,
    'slug'        => '...',
    'title'       => '...',
    'date'        => '...',
    'location'    => '...',
    'description' => '...',
];
```

Le champ __slug__ représente le nom des fichiers de l'image (auquel il faut ajouter l'extension __.jpg__).
Les images sont stockées dans différents dossiers selon leur format :
* __images/small__ : miniatures pour la page __Home__.
* __images/medium__ : miniatures pour la page __Gallery__.
* __images/large__ : originaux pour la page __Detail__.

## Développement

* Renommer les fichiers __.html__ en fichiers __.php__.
* Déplacer le code HTML commun à toutes les pages dans des fichiers PHP (_head.php_, _header.php_, _footer.php_) placés dans un dossier nommé _includes_.
* Créer un fichier __includes/functions.php__ et y développer les fonctions suivantes :

    * findOneById(int $id): array
    
        _Renvoi la photo ayant l'id [id], ou FALSE si cet identifiant est introuvable_

    * getCount(): int
    
        _Renvoi le nombre de photos présente dans la base de données._

    * findPaged(int $limit, int $offset = 0): array
    
        _Renvoi les [limit] photos, à partir de la photo [offset]._

    * findLatest(int $limit): array
        
        _Renvoi les [limit] dernières photos (triées par date)._

#### Page Home

* Remplacer les images _(placeholders)_ par les 4 dernières photos.
* Les liens des photos devront mener vers la page Detail.

#### Page Gallery

* Afficher 6 photos par page avec leur titre.
* Les liens des photos devront mener vers la page Detail.
* Gérer la pagination.

#### Page Detail

* Afficher l'image et ses données (_title_, _date_, _location_ et _description_).
* Gérer la pagination.

#### Page Contact

* Développer le formulaire et afficher les erreurs le cas échéant.
* On pourra enregistrer les messages dans des fichiers placés dans un dossier _contact_ pour simuler l'envoi de mails.


## Base de données

Créer une base de données __MySql__ et y importer le fichier __data/gallery.sql__.
Modifier les fonctions du fichier __includes/functions.php__ pour exploiter la base de données MySql.
(Gardez une copie du fichier fonctionnant avec la &laquo; base de données &raquo; PHP du fichier __data/gallery.php__).
