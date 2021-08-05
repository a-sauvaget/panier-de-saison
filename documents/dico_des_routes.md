# Routes

| URL                          | Méthode HTTP                 | Contenu                                                       | Titre                          | Commentaire                    |
| ---------------------------- | ---------------------------- | ------------------------------------------------------------- | ------------------------------ | ------------------------------ |
| /                            | GET                          | Page d'accueil                                                | Accueil                        | -                              |
| /a-propos                    | GET                          | Explication sur la raison de ce site                          | A propos                       | -                              |
| /contact                     | GET                          | Retourne le formulaire de contact                             | Me contacter                   | -                              |
| /legal-mentions              | GET                          | Retourne les mentions légales                                 | Mentions légales               | -                              |
| /login                       | POST                         | Retourne le formulaire de connexion                           | Login                          | -                              |
| /logout                      | POST                         | Déconnecte l'utilisateur                                      | Logout                         | -                              |
| ---------------------------- | ---------------------------- | ------------------------------------------------------------- | - ---------------------------- | -----------------------------  |
| /user/list                   | GET                          | Liste des utilisateurs                                        | Liste des utilisateurs         | -                              |
| /user/add                    | GET                          | Ajouter des utilisateurs                                      | Ajouter des utilisateurs       | -                              |
| /user/[i:userId]/update      | GET                          | Éditer des utilisateurs                                       | Éditer des utilisateurs        | [i:userId] id de l'utilisateur |
| /user/[i:userId]/delete      | GET                          | Supprimer des utilisateurs                                    | Supprimer des utilisateurs     | [i:userId] id de l'utilisateur |
| ---------------------------- | ---------------------------- | ------------------------------------------------------------- | - ---------------------------- | -----------------------------  |
| /fruit/list                  | GET                          | Retourne la liste de tous les fruits                          | Liste des fruits               | -                              |
| /fruit/all/[month]           | GET                          | Retourne la liste de tous les fruits selon le mois en cours   | Liste des fruits du mois       | [month] mois en cours          |
| /fruit/[i:productId]         | GET                          | Retourne les informations d'un fruit choisi                   | Information sur un fruit       | [i:productId] id du fruit      |
| /fruit/add                   | GET                          | Formulaire pour ajouter un fruit                              | Ajouter un fruit               | -                              |
| /fruit/[i:productId]/update  | GET                          | Formulaire pour modifier un fruit                             | Éditer un fruit                | [i:productId] id du fruit      |
| /fruit/[i:productId]/delete  | GET                          | Supprimer un fruit                                            | Supprimer un fruit             | [i:productId] id du fruit      |
| ---------------------------- | ---------------------------- | ------------------------------------------------------------- | - ---------------------------- | -----------------------------  |
| /legume/list                 | GET                          | Retourne la liste de tous les légumes                         | Liste des légumes              | -                              |
| /legume/all/[month]          | GET                          | Retourne la liste de tous les légumes selon le mois en cours  | Liste des légumes du mois      | [month] mois en cours          |
| /legume/[i:productId]        | GET                          | Retourne les informations d'un légume choisi                  | Information sur un fruit       | [i:productId] id du légume     |
| /legume/add                  | GET                          | Formulaire pour ajouter un légume                             | Ajouter un légume              | -                              |
| /legume/[i:productId]/update | GET                          | Formulaire pour supprimer un légume                           | Éditer un légume               | [i:productId] id du légume     |
| /legume/[i:productId]/delete | GET                          | SUpprimer un légume                                           | Supprimer un légume            | [i:productId] id du légume     |
