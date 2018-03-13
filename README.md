# nl.schreeuwomleven.solui

Specifieke aanpassingen voor de interface van CiviCRM voor Schreeuw om Leven. 

Omdat deze extensie vrij direct ingrijpt op de user interface is het raadzaam hem even uit te schakelen
als er na een upgrade onverwachte zaken voorkomen.

## Velden verbergen op de contact kaart en bij bewerken contact

- werkgever
- functie
- voorkeur communicatiemiddel
- e-mailformaat
- e-mail handtekening
- e-mail bulkmail vinkje 
- communicatiestijl
- geslacht
- geboortedatum
- overlijdingsdatum
- kenmerken (tags)
- vinkje bij adres voor factuuradres
- toevoegen van een foto
- mogelijkheid om direct een meerkeuze optie uit te breiden (steeksleuteltje)

- alle tabbladen worden uitgeklapt bij het aanmaken of bewerken van een contact

## Volgorde snelzoeker
- Postcode op tweede plek

## Formattering postcode

Als een adres in Nederland ligt dan wordt geprobeerd de code een standaard formaat te geven n.l.:
* 4 cijfers
* een spatie
* twee hoofdletters.

Als dit geen geldige postcode opleverd blijft de postcode ongemoeit.

## Formattering voorletters, roepnaam en achternaam

Voorbeeld:
ab en cd van klaassen-jansen, roepnaam: albert en cornelia wordt A.B. & C.D. van Klaassen-jansen, roepnaam: Albert en cornelia
