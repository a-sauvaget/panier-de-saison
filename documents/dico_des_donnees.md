# Dictionnaire de données

## Fruit et Legume

| Field                   | Type          | Spec.                                           | Description                                |
| ----------------------- | ------------- | ----------------------------------------------- | ------------------------------------------ |
| id                      | INT           | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | product id                                 |
| fruitName ou legumeName | VARCHAR(64)   | NOT NULL                                        | product name                               |
| genus                   | VARCHAR(64)   | NOT NULL                                        | product genus                              |
| family                  | VARCHAR(64)   | NOT NULL                                        | product family                             |
| imageFile               | VARCHAR(64)   | NOT NULL                                        | product file                               |
| carbohydrates           | DECIMAL(10,2) | NOT NULL, DEFAULT 0                             | product nutrition value for 100gr          |
| protein                 | DECIMAL(10,2) | NOT NULL, DEFAULT 0                             | product nutrition value for 100gr          |
| fat                     | DECIMAL(10,2) | NOT NULL, DEFAULT 0                             | product nutrition value for 100gr          |
| sugar                   | DECIMAL(10,2) | NOT NULL, DEFAULT 0                             | product nutrition value for 100gr          |
| fiber                   | DECIMAL(10,2) | NOT NULL, DEFAULT 0                             | product nutrition value for 100gr          |
| calories                | DECIMAL(10,2) | NOT NULL, DEFAULT 0                             | product nutrition value for 100gr          |
| harvestedInJanuary      | BOOLEAN       | NOT NULL                                        | When the product is available to be bought |
| harvestedInFebruary     | BOOLEAN       | NOT NULL                                        | When the product is available to be bought |
| harvestedInMarch        | BOOLEAN       | NOT NULL                                        | When the product is available to be bought |
| harvestedInApril        | BOOLEAN       | NOT NULL                                        | When the product is available to be bought |
| harvestedInMay          | BOOLEAN       | NOT NULL                                        | When the product is available to be bought |
| harvestedInJune         | BOOLEAN       | NOT NULL                                        | When the product is available to be bought |
| harvestedInJuly         | BOOLEAN       | NOT NULL                                        | When the product is available to be bought |
| harvestedInAugust       | BOOLEAN       | NOT NULL                                        | When the product is available to be bought |
| harvestedInSeptember    | BOOLEAN       | NOT NULL                                        | When the product is available to be bought |
| harvestedInOctober      | BOOLEAN       | NOT NULL                                        | When the product is available to be bought |
| harvestedInNovember     | BOOLEAN       | NOT NULL                                        | When the product is available to be bought |
| harvestedInDecember     | BOOLEAN       | NOT NULL                                        | When the product is available to be bought |
| created_at              | TIMESTAMP     | NOT NULL, DEFAULT CURRENT_TIMESTAMP             | Creation date of the product               |
| updated_at              | TIMESTAMP     | NOT NULL                                        | Update date of the product                 |

## User

| Field      | Type         | Spec.                                           | Description               |
| ---------- | ------------ | ----------------------------------------------- | ------------------------- |
| id         | INT          | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | User id                   |
| email      | VARCHAR(128) | NOT NULL UNIQUE                                 | User email                |
| password   | VARCHAR(60)  | NOT NULL                                        | User password             |
| firstname  | VARCHAR(64)  | NOT NULL                                        | User firstname            |
| lastname   | VARCHAR(64)  | NOT NULL                                        | User lastname             |
| role       | ENTITY       | NOT NULL                                        | User role                 |
| created_at | TIMESTAMP    | NOT NULL, DEFAULT CURRENT_TIMESTAMP             | Creation date of the user |
| updated_at | TIMESTAMP    | NOT NULL                                        | Update date of the user   |

## Contact - Stock les message reçu avant de les envoyer

| Field      | Type         | Spec.                                           | Description                   |
| ---------- | ------------ | ----------------------------------------------- | ----------------------------- |
| id         | INT          | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | Contact id                    |
| nom        | VARCHAR(64)  | NOT NULL                                        | Contact password              |
| email      | VARCHAR(128) | NOT NULL                                        | Contact email                 |
| message    | TEXT         | NOT NULL                                        | Contact password              |
| message    | TEXT         | NOT NULL                                        | Contact password              |
| isSend     | BOOLEAN      | NOT NULL                                        | Is the message stocked sent ? |
| created_at | TIMESTAMP    | NOT NULL, DEFAULT CURRENT_TIMESTAMP             | Creation date of the contact  |
| updated_at | TIMESTAMP    | NOT NULL                                        | Update date of the contact    |
