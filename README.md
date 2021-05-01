
POO - Basics | Part 5 : Implémentation d'interfaces
Et la lumière fut !
Créer une interface LightableInterface possédant les méthodes switchOn() et switchOff().Ces méthodes seront implémentées par les véhicules possédant des éclairages comme Car et Bike, mais pas SkateBoard (cette dernière est à créer si ce n’est déjà fait).

Dans la classe Car, switchOn() retourne true et switchOff() retournera false.

Dans la classe Bike, où une dynamo est utilisée, switchOn() retourne true seulement si la currentSpeed() est >10km/h, tandis que switchOff() retourne toujours false.
