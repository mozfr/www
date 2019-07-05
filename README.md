Ceci est le code source de notre portail Mozilla francophone <https://mozfr.org/>.

Le site utilise le générateur statique Sculpin en version 2.1 <https://sculpin.io/>.

Les templates utilisent Twig.


# Installer le site en local

Vous devez d'abord forker le dépôt.
```
git clone https://github.com/votreforkdudépot/www/
cd www
```

Installez sculpin avec Composer le gestionnaire de dépendances de PHP (https://getcomposer.org)/
```
composer install
```

Une fois les dépendances installées, vous pouvez lancer le serveur de développement local avec cette commande dans votre terminal :
```
./vendor/bin/sculpin generate --watch --server
```

Le site sera à l'adresse http://localhost:8000, laissez le serveur tourner en arrière plan, il générera automatiquement le site à chaque modification enregistrée d'un fichier source, pour voir les changements recharger la page dans le navigateur.

Tous les fichiers source statiques (HTML, JS, CSS, images, polices…) sont dans le dossier source.

Le dossier de sortie pour le développement local est output_dev.

Le dossier de sortie pour la mise en production est output_prod, c'est vers ce dossier que le serveur apache pointe le domaine www.mozfr.org

# Proposer un patch

1. Créez une branche pour votre patch (une "feature branch" en terminologie git), on ne prendra pas de patch venant de votre branche master
2. Ouvrez un ticket s'il n'y en a pas déjà un
3. Rebasez votre branche avant de faire une PR, après acceptation du patch (revue), si vous aviez fait plusieurs commits, fusionnez-les (squash). Voici un article en anglais qui explique ça : https://blog.carbonfive.com/2017/08/28/always-squash-and-rebase-your-git-commits/

