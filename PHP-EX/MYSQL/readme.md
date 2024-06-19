# Istruzioni MYSQL
Vai su maria DB o dove vuoi e scarica l'ultima ver. di MYSQL
puoi usare HeidiSQL per creare il tuo test database dove puoi inseire varie colonne con i  tuoi dati

Per creare la tabella usando HeidiSQL:

<ul>
<li>A sinistra dove vedi click destro e fai new table </li>
<li>Da quello che ti si apre dagli un nome e aggiungi le colonne con i loro nomi,tipo ecc</li>
<li>Clicca su salva</li>
<li>Poi per vedere i dati che inserito basta</li>
</ul>

``` SELECT * from nomeDB;```
<hr>

# Comandi CMD:

comando per accedere: ```mysql -uroot -p``` <br>
(se non hai configurato una pass premi invio altriemnti inserisci la pass)<br>
comando per vedere DB: ```show databases;``` <br>
comando per creare DB: ```create database nome;``` <br>
comando per scegliere DB: ```use nomeDB;``` <br>
comando per creare una tabella: ```create table nomeTab (nomecolonna tipo (grandezza max) altri valor ,altre colonne se vuoi);``` <br>
puoi creare quante colonne vuoi in un solo comando basta chiudere tutte le parentesi e poi mettere ';' <br>
per vedere le tablle/a: ```show tables;``` <br>
per vedere contenuto tablle/a: ```describe nometabella;``` <br>


