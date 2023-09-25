# Exercice : Créer un thème dans Kirby

Le but de cet exercice est de vous familiariser avec la documentation et la structure générale du gestionnaire de contenu Kirby. Pour ce faire, il vous est demandé de réaliser les tâches suivantes. Il est normal que vous ne savez pas tout faire ; consultez la [documentation](https://getkirby.com) ! 

## Installation

Installez le « plainkit » de Kirby, et ajoutez le contenu ci-joint (voir `/materiel`) dans les dossiers appropriés afin d'obtenir un site Web dont l'arborescence est la suivante :

```
.
└── /articles
    ├── /literate-programming-propaganda-and-tools
    ├── /why-i-must-write-readable-programs
    ├── /racket-literate-programming
    └── /babel-org
```

Modifier ensuite les configurations de Kirby afin d’activer le mode « *debug* », lequel permet d'afficher les erreurs.

## Page d'accueil

Ajoutez un *template* pour la page d'accueil qui permet d'afficher tous les champs (*fields*) de celle-ci.

Ajoutez ensuite une section qui liste tous les articles du site, et permet de naviguer vers ceux-ci. Attention à la séparation des responsabilités ; les templates devraient contenir peu ou pas de logique. Celle-ci devrait se trouver dans le contrôleur.

## Squelette

Certaines parties de votre site Web, telles l'entête et le pied de page, se répéteront de page en page. Afin de garder le code source DRY, créer un squelette ou une base de laquelle pourront hériter les *templates*.

Ensuite, dans l'entête du site Web, ajoutez dynamiquement son nom, « *About Literate Programming* », de sorte à ce que, éventuellement, il puisse être changé.

## Articles

Créer un *template* pour les articles qui permet d'afficher tous le contenu de ceux-ci, incluant les images et leurs métadonnées. Assurez-vous d'utiliser les méthodes appropriées selon le type du champs, et de tenir compte des champs vides.

## Feuilles de styles

Ajoutez les feuilles de style suivantes à votre site Web : une feuille de style de type « *reset* » (voir https://meyerweb.com/eric/tools/css/reset/), une feuille de style globale, et une feuille de style par *template*. Assurez-vous qu'elles fonctionnent avant de passer à la prochaine étape.

## Typographie

Ajustez vos feuilles de style afin que le site Web utilise les fontes romane et italique de la police de caractères ci-jointe « Computer Modern ». 

À l'aide de l'API fournie par Kirby, modifier le *template* des articles afin de corrigez les erreurs typographiques suivantes : remplacez les guillemets et les apostrophes droits (`'`, `"`) par des guillemets et des apostrophes courbés (`‘’`, `“”`) ; convertissez les tirets doubles (`--`) en tirets em (`—`) ; convertissez les trois points (`...`) en points de suspension (`…`). On appelle parfois le programme qui permet ces corrections « *smartypants* ».

Toujours à l'aide de l'API, assurez-vous que le titre et le texte courant des articles ne comportent jamais de lignes veuves (*widows*, en anglais), c'est-à-dire de lignes où apparaît un seul mot.

## Extraits

Pour finir, sur la page d'accueil, où sont listés les articles, incluez un extrait de 100 caractères pour chacun d'eux. L'extrait doit contenir le balisage original, et respecter les corrections typographiques faites ci-haut. Attention de garder le code DRY ; il ne devrait pas être nécessaire d'apporter les corrections dans chacun des *templates*, ni dans chacun des contrôleurs.