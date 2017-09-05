# nl.schreeuwomleven.solui

Specifieke aanpassingen voor de interface van CiviCRM voor Schreeuw om Leven. 

## Velden verbergen op de contact kaart

- werkgever
- functie
- geslacht
- geboortedatum
- overlijdingsdatum
- kenmerken (tags)
- vinkje bij adres voor factuuradres
- toevoegen van een foto
- mogelijkheid om direct een meerkeuze optie uit te breiden (steeksleuteltje)

Omdat deze extensie vrij direct ingrijpt op de user interface is het raadzaam hem even uit te schakelen
als er na een upgrade onverwachte zzaken voorkomen.

## Formattering postcode

Als een adres in Nederland ligt dan wordt geprobeerd de code een standaard formaat te geven n.l.:
* 4 cijfers
* een spatie
* twee hoofdletters.

Als dit geen geldige postcode opleverd blijft de postcode ongemoeit.

## Formattering voorletters en achternaam

Voorbeeld:
ab van klaassen-jansen wordt A.B. van Klaassen-jansen
