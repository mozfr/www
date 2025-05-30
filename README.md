Ceci est le code source de notre portail Mozilla francophone <https://mozfr.org/>.

Le site utilise le générateur statique Cecil <https://cecil.app/>. Les templates
utilisent Twig.

## Installer le site en local

Vous devez d'abord forker le dépôt:
```
git clone https://github.com/votreforkdudépot/www/
cd www
```

**Note: Cecil requière l'extension PHP `ext-gd`.**

Installez Cecil avec [Composer](https://getcomposer.org) le gestionnaire de
dépendances de PHP:

```
composer install
```

Une fois les dépendances installées, vous pouvez lancer le serveur de
développement local avec cette commande dans votre terminal:

```
composer serve:dev
```

Le site sera à l'adresse http://localhost:8000. Lorsqu'un changement est effectué
dans un fichier source, Cecil regénérera le dossier de sortie et rafraîchira le
navigateur sautomatiquement.

Vous pouvez aussi exécuter toutes les autres commandes de Cecil avec:

```
composer cecil [nom de la commande]
```

Tous les fichiers source (HTML, JS, CSS, images, polices…) sont dans le
dossier `src`.

Le dossier de sortie pour le développement local est `output_dev`. Le dossier de
sortie pour la mise en production est `output_prod`, c'est vers ce dossier que le
serveur apache pointe le domaine www.mozfr.org.

## Proposer un patch

1. Créez une branche pour votre patch (une "feature branch" en terminologie git),
   on ne prendra pas de patch venant de votre branche master.
2. Ouvrez un ticket s'il n'y en a pas déjà un
3. Rebasez votre branche avant de faire une PR, après acceptation du patch
   (revue), si vous aviez fait plusieurs commits, fusionnez-les (squash). Voici
   un article en anglais qui explique ça :
   https://blog.carbonfive.com/2017/08/28/always-squash-and-rebase-your-git-commits/

## Licence

This Source Code Form is subject to the terms of the Mozilla Public
License, v. 2.0. If a copy of the MPL was not distributed with this
file, You can obtain one at https://mozilla.org/MPL/2.0/.
