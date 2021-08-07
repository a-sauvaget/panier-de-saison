<h1 align="center">Welcome to fruits-legumes-saison 👋</h1>
<p>
  <img alt="Version" src="https://img.shields.io/badge/version-1.0.0-blue.svg?cacheSeconds=2592000" />
</p>

> &#34;Fruit et légumes de saison&#34; est une application Web destinée à tous. Elle a pour but de proposer la liste des fruits et légumes disponible (de saison) à la vente mois par mois.&#34;

## Pré-requis

- PHP 8.0
- Composer
- Symfony CLI
- Docker
- Docker-composer
- Node.js et NPM

Vous pouvez vérifier les pré-requis (sauf Docker et Docker-compose) avec la commande suivante (Symfony CLI) :

```bash
symfony check:requirements
```

## Lancer l'environnement de développement

```bash
composer install
npm install
npm run build
docker-compose up -d
symfony serve -d
```

## Lancer les tests unitaires

```bash
php bin/phpunit --testdox
```

### Ajouter des données

Une fois les entités créées, effectuer les migrations plus ajout de données.

```bash
symfony console make:migration
symfony console d:m:m
symfony console doctrine:fixtures:load
```

Pour visualiser les données:

- installer l'extension VSCode: Docker (https://marketplace.visualstudio.com/items?itemName=ms-azuretools.vscode-docker)
- Dans l'extension, clic droit sur le container contenant la BDD -> `Attach shell`
- Se connecter à la bdd: `mysql -p`
- `use main`

## Auteur

👤 **Alexandre Sauvaget**

- Website: https://a-sauvaget.github.io/a.sauvaget-portfolio/
- Github: [@a-sauvaget](https://github.com/a-sauvaget)
- LinkedIn: [@https:\/\/www.linkedin.com\/in\/alexandresauvaget\/](https://linkedin.com/in/https://www.linkedin.com/in/alexandresauvaget/)
