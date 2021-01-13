# 06-SQL

## INITIALISATION

Pour initialiser Git (dossier local) :
```
git init
```

Pour lier le dossier local au dépôt distant :
```
git remote add origin lien_de_votre_github
```

### ENVOYER LES FICHIERS

Ajouter les fichiers :
```
git add *
```

Commit :
```
git commit -m "un_message_au_choix"
```

Récupérer :
```
git pull origin master
```

Envoyer :
```
git push origin master
```

## BRANCHES

Créer une branche :
```
git branch nom_de_la_branche
```

Changer de branche :
```
git checkout nom_de_la_branche
```