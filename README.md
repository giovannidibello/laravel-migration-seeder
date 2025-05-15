# 🚆 Laravel Train Board

Un progetto Laravel che mostra una tabella dei treni in partenza dalla data odierna in avanti, utilizzando Migrations, Eloquent Model, Blade, Seeder e Bootstrap.

---

## 📝 Descrizione dell'esercizio

Impariamo a modellare la struttura dei nostri database grazie alle **Migrations**!

### Obiettivo

Creare una tabella `trains` e la relativa Migration, con i seguenti campi per ogni treno:

- Azienda
- Stazione di partenza
- Stazione di arrivo
- Orario di partenza
- Orario di arrivo
- Codice Treno
- Totale Carrozze
- Se in orario o meno
- Se cancellato o meno

---

## 🌱 Seeder

Sono stati utilizzati i **Seeder** per popolare la tabella `trains` con dati fittizi realistici.

### Dettagli del seeder:

- Uso di **Faker** per generare dati casuali ma coerenti
- Compagnie simulate: `Trenitalia`, `Italo`
- Città reali come stazioni (es. Napoli Centrale, Milano Centrale, Roma Termini, ecc.)
- Il treno non può partire e arrivare nella stessa città
- Orari generati dinamicamente rispetto alla data corrente
- Campi booleani per ritardo o cancellazione gestiti randomicamente

## 🖥️ Output

Ogni treno viene visualizzato in una riga della tabella con:

- **Azienda**
- **Codice treno**
- **Stazione di partenza**
- **Stazione di arrivo**
- **Orario di partenza**
- **Orario di arrivo**
- **Numero carrozze**
- **Ritardo o cancellazione**

---

## ✨ Bonus

- **Tabellone stile ferroviario** con classi dinamiche
- Suggerimento grafico: font _Share Tech Mono_
- Design responsivo con **Bootstrap**

---

## 📌 Rotte

- `/` → Visualizza l'elenco dei treni dalla data odierna in poi

---

## ✅ Requisiti

- PHP 8.1+
- Composer
- MySQL
- Laravel 12

