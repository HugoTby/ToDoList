# ToDoList

Cette application web sert à gérer une liste de tâches (To Do List). Elle n'est pas destiné à être hébergé sur un serveur web et à être accessible publiquement, mais plutôt à être exécuté localement sur un ordinateur ou un serveur pour une utilisation personnelle ou limitée à un groupe restreint d'utilisateurs.

Le fonctionnement de ce code est le suivant :
* L'utilisateur saisit une tâche à faire dans le champ de saisie et soumet le formulaire.
* Si le champ de saisie n'est pas vide, la tâche est ajoutée à la base de données MySQL, sinon un message d'erreur est affiché.
* Les tâches stockées dans la base de données sont affichées sur la page web dans une liste.
* Les tâches peuvent être marquées comme terminées ou non terminées en cochant/décochant une case à cocher à côté de chaque tâche.
* Lorsqu'une case à cocher est cochée/décochée, une requête AJAX est envoyée au serveur pour mettre à jour l'état de la tâche correspondante dans la base de données.
* La page se recharge automatiquement après chaque mise à jour de l'état pour afficher les modifications.

![todolist](https://github.com/HugoTby/ToDoList/blob/main/todolist_view.png)
