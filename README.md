Ceci est le code source de notre portail Mozilla Francophone <https://mozfr.org/>.

Le site utilise le générateur statique Sculpin <https://sculpin.io/>.

# Installer Sculpin

```
curl -O https://download.sculpin.io/sculpin.phar
chmod +x sculpin.phar
```

# Compiler notre site
```
./sculpin.phar generate --env=prod
```

Le dossier de sortie est output_prod.
