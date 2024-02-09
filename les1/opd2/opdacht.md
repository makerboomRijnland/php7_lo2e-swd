# Opdracht 2 - Databases

In deze opdracht ga je een simpele database maken en een PHP-script schrijven dat gegevens uit die database haalt en toont.

## Database

Voer het bestand `news.sql` uit in je database-server. 

### Sqlite

Om met SQLite te werken, kun je het volgende commando gebruiken om de database aan te maken:

`sqlite3 -init news.sql news.db`

Sluit de database met `.exit`.

## PHP Script

Maak een PHP-script dat van alle nieuwsartikelen uit de database de titel en de introductie toont.

## Eisen

- Zorg ervoor dat de output van je script geldige HTML is.
- Gebruik semantisch correcte HTML-elementen.

## Extra uitdaging
- Gebruik geen associatieve arrays, maar objecten bij het ophalen van de gegevens uit de database.