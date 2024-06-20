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
comando per creare DB: ```create database nome;``` <br>
comando per scegliere DB: ```use nomeDB;``` <br>
comando per creare una tabella: ```create table nomeTab (nomecolonna tipo (grandezza max) altri valor ,altre colonne se vuoi);``` <br>
puoi creare quante colonne vuoi in un solo comando basta chiudere tutte le parentesi e poi mettere ';' <br>
per vedere le tablle/a: ```show tables;``` <br>
per vedere contenuto tablle/a: ```describe nometabella;``` <br>
Primary key: la chiave univoca di ogni elemento per riconoscerli in una tabella.<br>
per aggiungere valori: ```ALTER TABLE nomeTab ADD campo valori;``` <br>
per creare un id ad incremento automatico: ```ALTER TABLE nomeTab ADD campo INT (val) UNSIGNED NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (id);``` <br>
come indicizzare un valore(non univoco):```CREATE INDEX IDX_NOME on nometab (campo(numeroCampi));```<br>
per rimuovere un indice:```ALTER TABLE NOMETab DROP index IDX_NOMEINDEX;```<br>
come indicizzare in modo univoco: ```CREATE UNIQUE INDEX IDX_NOME on nometab (campo(quanto vuoi indicizzare));```<br>
come inserire dati: ``` INSERT into nomeTab (nomeCampo1,...) values(valCampo1,...);```<br>
per vedere i dati: ```SELECT * FROM table_name;```<br>
per modificare i dati: ```UPDATE table_name SET nomeColonnaDaModificare = val WHERE condizione ;```<br>
per selezionare certi dati: ```SELECT *FROM table_name WHERE cond;```<br>
per selezionare certi dati che iniziano o assomigliano a qualcosa: ```SELECT *FROM table_name WHERE nome dato LIKE %cond%; ```<br>
il % vuol dire che basti che inizi/finisca/sia in mezzo con un certo valore es: 'A%' selezionerà tutti i dati che iniziano per senza tener conto del resto<br>
'%to' seleziona tutti i dati che finisco con to senza tener conto di quello che c'è prima e %er% basta che in mezzo abbia er<br>
per cancellare dati: ```DELETE FROM table_name WHERE condizione; ```<br>
ATTENZIONE: se dimenticate la cond MYSQL prende tutto il contenuto, nel caso della selezione di dati non è un problema ma nel caso di delete si perchè se non avete un backup it's gojover<br>
per cancellare dati: ```DELETE FROM table_name WHERE nomeDato LIKE %cond%; ```<br>
<hr>



