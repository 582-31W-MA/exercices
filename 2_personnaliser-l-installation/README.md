# Exercice : Personnaliser son installation

Avant tout, assurez-vous que votre dépôt local soit à jour avec votre dépôt distant GitHub. Si du contenu a été ajouté sur la version serveur de votre site Web, assurez-vous de :

1. Indexer les changements (`git add .`) 
2. Enregistrer les changements (`git commit -m "..."`), 
3. Pousser les changements vers votre dépôt distant (`git push`)
4. Rapatrier et intégrer les changement sur votre dépôt local

Maintenant que vos dépôts sont synchronisés, et que vous êtes plus familier·ère avec la structure de votre CMS, il est temps de personnaliser l'installation de celui-ci en vu des besoins de votre site Web — lequel, je vous le rappelle, est le journal de bord de l'un·e de vos collègues.

Il se peut que vous brisiez certaines pages en cours de route. Profitez-en pour vous familiariser avec la page d'erreur de Kirby. Et n'hésitez pas à enregistrer vos changements avec Git entre chaque étape.

## Étape 1 : Ménage

Installer un nouveau CMS n'est pas si différent que d'emménager dans un nouvel appartement. La première étape : faire du ménage. Le *starterkit* de Kirby contient plusieurs fichiers dont nous n'avons pas besoin. Nous commencerons donc par supprimer ceux-ci. 

Une fois le ménage fait, il devrait rester dans votre dépôt que les fichiers liés aux pages `home`, `erreur`, `notes` et `note`. Concentrez votre purge aux dossiers suivants :

- `content`
- `site/controllers`
- `site/models`
- `site/snippets`
- `site/templates`

Passez également en revue les fichiers conservés, et supprimez les éléments inutiles (il n'y aura pas d'image ni de vidéo dans nos notes, nous n'utiliserons pas Javascript, etc.). Assurez-vous de comprendre ce que vous supprimez.

## Étape 2 : Réorganisation et adaptation

Maintenant le ménage terminé, il est temps d'adapter l'installation de Kirby à nos besoins.

### Snippets

Commençons par séparer le *snippet* `header.php` en deux *snippets* différents : un pour notre `<header>` et un pour notre `<head>`. N'oubliez pas de faire les changements nécessaires à vos *templates*.

Renommez ensuite le *snippet* `note.php` à `note-preview.php`, et faites les changements nécessaires dans vos *templates* ainsi que dans vos feuilles de style.

### CSS

Réorganisons également nos fichiers CSS de sorte que chaque *snippet* ait sa propre feuille de style. Pour ce faire, vous pouvez utiliser soit la règle CSS `@import`, soit le *helper* `css()` de Kirby (voir la documentation).

### Page d'accueil

Comme notre site Web contiendra seulement un assortiment de notes, il n'est pas nécessaire d'avoir une page « notes » séparée. Nous afficherons donc une liste des notes sur la page d'accueil de notre site Web.

Dans les dossiers `site/controllers` et `site/templates`, faites les modifications nécessaires pour que toutes les entrées « note » apparaissent sur la page d'accueil (`home.php`).

### SmartyPants

Vous aurez peut-être remarqué que notre site Web n'utilise pas les bons apostrophes (`'` plutôt que `’`). Heureusement, il est possible d'effectuer automatiquement ce changement avec Kirby.

À l'aide de la méthode `smartypants()` de l'objet `$field` (et non du *helper* du même nom), assurez-vous que tous les *blocks* de type `text` affichent les bons apostrophes.

Personnalisez également les remplacements effectués par `smartypants()` de sorte que tous les guillemets anglais `"` soient automatiquement remplacés par des guillemets en chevrons `«»`, incluant l'espace insécable nécessaire. 

#### Indices

- [SmartyPants](https://getkirby.com/docs/reference/system/options/smartypants)
- [Non-Breaking Space in HTML](http://www.htmlbasictutor.ca/non-breaking-space.htm)
- [Apply SmartyPants to Blocks](https://forum.getkirby.com/t/apply-smartypants-to-blocks/26567)
- [Text block](https://getkirby.com/docs/reference/panel/blocks/text)

### Langage de programmation

Chacune des entrées de notre journal de bord concernera un ou plusieurs langages de programmation. Il serait donc pertinent que chaque entrée soit identifiée selon son sujet.

Ajoutez manuellement (dans le dossier `content`) un *field* `Language` aux pages `note.txt` contenant le langage de programmation de la page en question. Ne vous souciez pas du *panel* pour l'instant.

Affichez ensuite le langage de programmation dans le *template* des pages `note` ainsi que dans le *snippet* `note-preview.php`, mais seulement si le *field* n'est pas vide.
