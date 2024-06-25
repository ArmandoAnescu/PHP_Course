# Magic Methods

In php non c'è l'overload dei metodi,ma abbiamo dei metodi comuni a tutte le classi

<ul>
<li> __construct()<br><p>crea la classe</p></li>
<li> __destruct()<br><p>distrugge la classe e ogni riferimento ad essa</p></li>
<li> __call()<br><p>per chiamare un metodo inacessibili o statico se aggiugni 'Static' alla fine</p></li>
<li> __get()<br><p>per leggere un proprietà che non esiste</p></li>
<li> __set()<br><p>perimpostare un proprietà che non esiste</p></li>
<li> __isset()<br><p>per verificare se una proprietà esiste</p></li>
<li> __unset()<br><p>per distruggere una proprietà che non esiste</p></li>
<li> __sleep()<br><p>per serializzare una classe</p></li>
<li> __wakeup()<br><p>per deserializzare una classe che non esiste</p></li>
<li> __toString()<br><p>per usarla come stringa in echo</p></li>
<li> __invoke()<br><p>per usare l'oggetto come funzione</p></li>
</ul>
