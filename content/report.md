# Uppdrag 1 & 2 - Analys aktuell webbplatsdesign & valfrihet (valfri)
Dessa kraven var nog några av de jobbigaste (om man kan säga så). Jag gjorde aldrig projektet på riktigt så efter en och ett halvt års mellanrum hinner man glömma lite saker.
Första analysen handlar om hur olika artisters, framförallt sångare och sångerskors webbplatser är designade. Den beskriver också hur aktuella trender inom webbdesign används och om det finns några liknelser mellan urvalen.

Den andra analyser fortsätter lite på vår föregående rapport, den analyserar användbarheten, laddningstider samt hur de kan förbättras.

Urvalen är tagna från två svenska artister tillsammans med två amerikanska. Detta var medvetet för att vi ville kolla på hur olika kulturer och målgrupper eventuellt kan påverka designval och annat.
Mer om detta finner ni på min me-sida i anax-flat och följer rapportmallen från version två.

Uppdrag 1: Webbplatsdesign: [här](http://www.student.bth.se/~mabn17/dbwebb-kurser/design/me/anax-flat/htdocs/analysis/webbplatsdesign)
Uppdrag 2: Design och webbplatser: [här](http://www.student.bth.se/~mabn17/dbwebb-kurser/design/me/anax-flat/htdocs/analysis/design-och-webbplatser)

**OBS**: Projektspécen säger att de skall ligga i `content/rapport/X_Y.md` vilket jag inte har på min version av min me-sida, så jag la de i `content/analysis/X_Y.md` tillsammans med mina gamla analyser och är skrivna tillsammans med Sam Pettersson.


# Uppdrag 3: Webbplats
Till skillnad från rapporterna så valde jag Egenföretagaren Bew Gorp. Detta kändes som det alternativ man kunde relatera till mest, vilket underlättade en hel del när det kom till idéer på layout och innehåll. Sidan handlar om att Sven Svensson *aka* Bew Gorp skapade sin egna portfolio för att kunna marknadsföra sig själv så att han kan hitta nya möjligheter.

Eftersom jag redan gjorde alla kursmoment och fått de godkända från version ett så tänkte jag först att fortsätta med samma projekt version, men av någon anledning så ville inte varken min me-sida eller en ny installation fungera. Så då valde jag att göra version två projektet istället för att slippa eventuella problem som kunde uppkomma.

Jag hittade två stycken posts på dbwebb som jag tycker var intressanta som handlade om “Får man använda Sass i design kursen” och “Får man använda Flexbox, CSS Grid etc i design kursen”. Eftersom jag personligen föredrar Sass (då jag föredrar att jobba med bootstrap) och har lekt med det i några andra av mina projekt så ville jag anta utmaningen att göra om det till mitt eget. Och eftersom det inte fanns några moduler för det valde jag även att jobba lite mer med CSS Grid. Personligen tycker jag också att design kursen borde mer gå ut på att jobba med liknande tekniker då man egentligen inte kan vara en frontendutvecklare utan att känna till dem.

**Foruminlägg:**
["Får man" använda Flexbox, CSS grid, etc i design-kursen Inlägg](https://dbwebb.se/forum/viewtopic.php?f=53&t=7929)
["Får man" använda SASS i design-kursen](https://dbwebb.se/forum/viewtopic.php?f=53&t=7928) 


Som jag nämnde tidigare gjorde jag en fräsch installation av ramverket och efter det började jag städa upp lite layout filen då jag inte ville ha lika många divar runt varje element och sedan började jag leka runt och bygga projektet.

Alla sidor har en flash-region, däremot så är den lite annorlunda i jämförelse med alla andra. Det var den sista delen som jag la in på sidan då jag inte riktigt gillar hur de varken ser ut eller funktionen de fyller (i alla fall på denna webbsidan). Jag råkade av misstag göra ett litet fel i webbläsaren när jag lekte runt med ideér och gillade verkligen dess slutresultat då det smälte in i designen riktigt bra. Flash-regionen tillsammans med dess bild ligger under navbaren och kändes som pricket över i:et till ‘introduktions rubriker’ på alla sidor.

Headern logga ligger inuti i navbaren och är en bild av Sven som sidan handlar om. Faviconen är en datorskärm lite för att passa vad webbplatsen är byggd för.

Förstasidan är ganska simpel, helst skulle jag vilja slippa kravet på “minst två kolumner” för att jag tycker att det blir snyggare med bara ikonerna men för att uppfylla kravet la jag in en extra liten text.

Inuti i *about* finner man för en liten kort introduktion om Bew, tillsammans med en bild och några av hans tidigare erfarenheter. Här ligger också lite extra saker för krav fyra, fem samt sex.

För *bloggen* valde jag att visa upp fem olika Projekt som han har gjort, detta är i form av en bild tillsammans med två knappar som man kan trycka på för att ta sig vidare (github är en död länk så tryck på läs mer för att komma till själva inlägget).

I *Stil-Väljaren* har man möjligheten att välja mellan dark (som är original temat) och light som är en liten ljusare version med ett par skillnader, mer om detta i krav fem.

Alla routes finns tillgänglig i både footern och i hamburgermenyn vilket används som huvudnavigering för webbsidan.

Det är inget speciellt med *footern* (i alla fall på default temat), den använder sig av tre stycken kolumner för navigering tillsammans med en copyright symbol, kontaktinformation och en kortfattad summering om webbsidan.

Allt är förvånansvärt responsiv på båda teman då de fungerar med en bredd på runt 175 pixlar utan att då en horisontell scroll beroende på by och tema. Det finns även en media query som hanterar lite större skärmar som t.ex en tv. Detta har däremot varit lite svårare att testa då min inte är lika stor som den inne på Dbwebb.

Navigeringen är också responsiv om man minskar höjden på skärmen t.ex till 225 pixlar eller mindre.


# Uppdrag 4 & 5 - Tema & Tema alternativt (valfri)
Jag visste redan från början att jag ville ha två stycken teman och jag började att göra en typ av blandning mellan båda dessa. Så jag började med att göra en liten bas layout för hur mina potentiella teman skulle se ut.

Idéen bakom hur min layout kom till liv var att jag ville göra ett så olikt tema som möjligt i jämförelsevis med den typiska anax/dbwebb strukturen. Det var viktigt för kunden att ha en lite mer modernare stil samtidigt som det inte skulle vara allt för mycket element som gör besökaren förvirrad. Det var också viktigt att hålla saker minimalistiskt men ändå inte för tråkigt.

Det var viktigt att default temat skulle ha ett djup med en tydlig proximitet som åtskiljer elementen. Medans det andra skulle vara mer minimalistisk och interaktivt.

Eftersom kunden inte gillar nav bars särskilt mycket använde jag mig bara av en hamburgermeny för alla besökare. Därför kunde jag lägga lite mer tid på att få den snyggare. 

Båda teman mixar widths på sina regioner, original temat är lite bredare då den innehåller lite mer och vill ta större plats då det ljusare temat har lite mer fokus på texten.

Stilarna är grid baserade och *?vgrid* & *?hgrid* fungerar på alla sidor. Det kan vara lite svårt att se vissa nyanser eller texter men jag försökte att göra det lättare genom att ta bort bakgrundsbilderna och ändra några färger.

Allt är inte riktigt anpassat för det vgrid som vi fick jobba mot men man kan se att allt ligger med regelbunden storlek och mellanrum.

Att få hgrid för typografin att fungera var ett av det mest tidskrävande saker jag har gjort på länge men resultatet blev riktigt bra för att vara en “hemmagjord” modul. Eftersom jag använder CSS grid kommer vissa element att skalas om beroende på fönsterstorlek vilket också gör att bakgrunden inte riktigt hänger med.

Därför gjorde jag också en “test-sida” som ni kan kolla på som tar bort den delen och kan nås [här](http://www.student.bth.se/~mabn17/dbwebb-kurser/design/me/proj/htdocs/hgrid?hgrid). Länken finns också på om-sidan i den tredje sista paragrafen.

Lite Mer om information/skillnader om färger, typografi och annat för båda teman ligger i också i about sidan, länken till Stil-Väljaren hittas längst ner i navbaren som befinner sig uppe till höger.

# Uppdrag 6: Förklara strukturen kring temat (valfri)
Till Skillnad från de flesta så har jag inte samma struktur då @desinax inte finns tillgängligt för Sass. Kortfattningsvis så är min struktur är mer optimerad för projektet lägger inte vissa saker som t.ex main och annat i sin egna modul. Det finns undantag som footern och navbaren då det är lite för mycket style kod för att blanda in i resterande moduler. Min struktur är mer för att hålla det dry och simpel. Exempelvis så kan ett flertal olika val göras beroende på en variabel i configurations filen.

Jag kommer inte gå in på så mycket mer detaljer då, ni kan läsa mer om detta i projektets about sida.

# Tankar om projektet och kursen
Jag har lagt största delen av mitt sommarledighet på detta projektet så att jag är klar med alla kurser. Det var lite längre än vad jag skulle velat lägga men jag blev extremt nöjd med slutresultatet.

Visst så gjorde jag det kanske svårare för mig än vad det kunde vara genom att byta vilka tekniker jag använde. T.ex så var nog det jobbigaste att försöka göra om typografi modulen så att den passade mitt projekt och, efter ett bra tag, så lyckades jag att få den fungera för min style.

Enligt mig så är denna både den jobbigaste och tråkigaste kursen dbwebb har att erbjuda. Det kan vara för att jag inte är så jätte förtjust i design, vilket kan bero på att jag inte är så bra på det. Vill någon att jag skulle styla en sida så kan jag säkert göra det någorlunda men det skulle gå riktigt långsamt.

Det är lite väl fokus på just ramverket och jag tycker att man borde skippa detta tills Oophp börjar. Mycket av svårigheter kan bero på att man inte känner sig hemma och vet hur man navigerar i det. Jag vet iallafall att det var de största problemen för mig när vi jobbade i anax-flat. Men efter att ha läst Oophp samt Ramverk 1 kursen behövde man inte vara så rädd och efter de kan man nästan ramverket utantill. Detta var till en stor hjälp.

Jag tycker att kursen borde göras om helt så att det är lite mer fokus på design och antingen less/sass beroende på vad folk gillar bäst. Förslagsvis så kan alla kmoms fortfarande handla om ett visst område som det gör nu, behålla rapporterna och gå igenom de css trixen man behöver kunna för att klara kursmomentet (som ex css grid). Men istället för att jobba inom ramverket skulle det nog vara roligare för alla att kanske “kopiera” olika sidor som ni har byggt utan att se css:en. Här kan man vidareutveckla detta med varje kmom/börja på något nytt, möjligen ge eleverna moduler/html att använda och slutet slänga ihop det till en sida liknande dessa projekt.

Jag ger kursen 4/10 poäng och kommer troligen inte att rekommendera den till andra.
