# TP2 – Étape 1 : Champs personnalisés

## Auteur
**Samaneh Maboudi**  

## Description
Cette première étape du TP2 consiste à intégrer des **champs personnalisés** au site WordPress du club de voyage.

Le site permet maintenant d'afficher, pour chaque destination :
- **La température minimale et maximale** (grâce au plugin ACF)
- Une **galerie d'images personnalisée** (si disponible)
- Une **page de détail individuelle** (single.php)
- Une **carte résumée** sur les pages de catégorie
- Une page **404 personnalisée**

## Fonctionnalités ajoutées
- Champs ACF : `temperature_maximum`, `temperature_minimum`, `galerie`
- Template `single.php` modifié avec affichage dynamique des champs
- Gabarit `carte.php` intégrant les champs personnalisés
- Fichier `404.php` avec message et recherche

## Fichiers créés ou modifiés
- `single.php`
- `gabarits/carte.php`
- `category.php`
- `404.php`
- `functions.php` (vérification support ACF)



## Lien vers le site WHC :


## Dépôt GitHub:  
 https://github.com/samanehmaboudi/33w-voyage/tree/tp2-1

