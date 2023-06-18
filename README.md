# Esercizio "laravel-dc-comics"

Creo un progetto Laravel 9 per gestire un archivio di fumetti.

Tramite gli appositi comandi artisan creo un model con relativa migration e un resource controller.
Creo il seeder per la tabella comics utilizzando in file php.

Inizio a definire le prime operazioni CRUD con le relative view:
- index()
- show()
- create()
- store()

---

Definisco anche le operazioni CRUD:
- update()
- destroy()

---

Aggiungo validazioni ai form di "creazione" e "update", in modo da rendere più stabile il gestionale di fumetti.
Valido gli input ricevuti rispondendo con errori chiari e in italiano.
Aggiungo un messaggio in caso di successo della funzione "create" nel *redirect*.