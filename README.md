Formulaire de connexion. Evann Forest - Liam Faucitano

## Projet

Notre projet été initialement destiné à être une application web permettent au personnes atteinte de dermatillomanie (Elle se définit par le fait de se triturer la peau de manière répétitive, ce qui entraîne des lésions, et d’essayer d’arrêter sans y parvenir.

Cela correspond à une décharge impulsive des tensions psychologiques. Le triturage a généralement lieu le soir ou avant le coucher, moment de la journée où les tensions sont les plus importantes.) de suivre leur évolution et avoir un suivi de leurs comportement. La dermatillomanie n'as pas de traitement à proprement parlé, comme pour la cigarette, le meilleur moyen d'y venir à bout et de se canalisé, de travailler sur son mental. Ici l'application aurait donc servi de tableau de bord et à l'aide d'activité ou de phrases, conseils d'aider les personnes a s'en defaire ou a réduire petit a petit leurs envie. Cependant, ayant été a court de temps et en vu de la difficulté du projet, nous avons décidé de nous concentrer sur la partie connexion de l'outil et ainsi pouvoir avoir une base solide pour notre outil.

## Avancement

Nous avons donc mis en place une base de donnée avec une table utilisateur, une table de connexion et une table de suivi. Nous avons ensuite mis en place un formulaire de connexion. Nous avons également mis en place un système de session pour pouvoir garder les informations de l'utilisateur en mémoire.

## Difficultés

Nous avons rencontrer des difficultés pour la mise en place du formulaire, notamment pour la vérification des informations de l'utilisateur. Nous desirions utiliser PDO étant plus familier avec celui§ci pour faire notre application et plus particulièrement notre formulaire de connexion à l'application. Le formulaire ne fonctionne pas a cause de la redirection qui n'es pas effectué. Le problème était de mettre un redirect a la fin de notre traitement de la requete du formluaire pour que si l'utilisateur est bien log il soit redirect justement sur la page d'accueil. Ayant commencé le projet avant le module de redirect fait en cours, le module de redirect de Symfony a été importé avec packagist et en essayant de mettre la fonction redirectToRoute celle la n'était pas reconnu. Je l'ai alors ajouté a mon abstract controller ainsi que tout les éléments associé que je pensais nécessaires mais cela n'a pas solutionner le problème. De plus le système de reponse symfony ne fonctionne pas étant donné que notre fonction ne renvoie rien suite a l'erreur de redirection. J'ai tenté de comprendre le problème et durant notre challenge stack nous avons rencontré une erreur similaire qui a été corrigé en partie par la version plus récente du MVC que nous n'avions pas et aussi une meilleure utilisation du système de reponse symfony. En nous basant sur ce modèle la nous pourrions y arriver ainsi notre formulaire de connexion serait disponible.

