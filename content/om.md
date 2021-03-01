---
titel: 'Om'
---

<h1 class="lg-heading" style="padding-top: 10px;">
    Om
    <span class="text-secondary">Mig</span>
</h1>
<h2 class="sm-heading">
    Bio & Tidigare erfarenheter...
</h2>
<div class="about-info">
    <img src="cimage/me-x-250.png" alt="Sven Svensson" class="bio-image">
    <div class="bio">
    <h3 class="text-secondary">BIO</h3>
    <p style="padding-top: 4px;">Mitt namn är Sven Svensson aka Bew Gorp. Jag har hållt på med webbutväckling 8 år och letar efter nya möjligheter för att vidarutväckla mina kunskaper.</p>
</div>
<div class="job job-1">
    <h3>Lager 111</h3>
    <h6>Full Stack Utväcklare</h6>
    <p>Arbetade framförallt med PHP/Larvel tillsammans med Vue.js för att utväckla och underhålla <b>Lager 111</b>'s webshop som än idag används.</p>
</div>
<div class="job job-2">
    <h3>ABC Freelancers</h3>
    <h6>Front End Utväcklare</h6>
    <p>Ett konsult företag med fokus på att öka accessibilitet, snygga till och förbättra responsivitet på webbsidor</p>
</div>
<div class="job job-3">
    <h3>LogoStick AB</h3>
    <h6>Graphic Designer</h6>
    <p>Utväcklade och planerade layoutes på webbsidor, reklamer och tidningar. Jobbade mycket med diverse olika adobe produktet.</p>
    </div>
</div>
<h1 class="lg-heading" style="padding-top: 25px;">
    Teman
</h1>
<h2 class="text-secondary sm-heading" style="margin-top: 35px;">
    Dark ...
</h2>
<div class="explain-grid min">
<div class="main-color min"></div>
<div class="secondary-color min"></div>
<div class="font-color min"></div>
<div class="allign-row-end">
<!-- ?h=400&w=400 -->

[FIGURE src=image/report/dark.gif class="screenshot h-100 d-unset-md"]


</div>
</div>
<div class="block-me" style="margin-top: 59px;">
<p>
Dark också sidans default style använder sig av fonten 'Lato' som är baserad på sans-serif för att göra texten mer läsbart med den mörkare bakgrunden. Sans-serif hjälper också webbplatsen att lyfta fram en mer personlig kännsla.
</p>
<p>
Temats designelement lägger fokus på att lyfta fram olika former och linjer för att guida besökaren runt webbplatsen, detta hjälper till att fånga blicken sammtidigt som, de inte blir alltför distraherande. Den använder sig av mörkare färger med avseende på kvällstider. För att underlätta bläddring av sidan används den ljusblåa accsentfärgen som hjälper till med avskärmningen. Bakgrundsbildens syfte är att lyfta fram en textur så att temat får ett djup och bli mer intressant.</p>
</p>
<p>
Temats designprinsiper fokuserar på att lyfta fram proximitet mellan elementen. De är uppdelade på så sätt att informationen hänger samman i elementen sammtidigt som de innehåller en individuell hirarki.
</p>
</div>
<h2 class="text-secondary sm-heading">
    Light ...
</h2>
<div class="explain-grid-b min">
<div class="main-b-color min "></div>
<div class="secondary-b-color min"></div>
<div class="font-b-color min"></div>
<div class="allign-row-end">


[FIGURE src=image/report/light.gif class="screenshot-b h-100 d-unset-md"]


</div>
</div>
<div class="block-me" style="margin-top: 68px;">
<p>
Till skillnad från dark använder light serif fonten 'PT Serif Caption', tillsammans med en text-shadow för att man skall få en mer 'flytande' och lekfull känsla. Skuggan hjälper till att lyfra fram en kontrast som både gör det lättare att se och läsa mot den gråa bakgunden. Nästan allt från temat baserats på olika font betoningar, storlek och färger då temat fokuserar på att vara så minimalistisk som möjligt utan att ta bort någon information eller data.
</p>
<p>
Tanken bakom temat är att det skall vara minimalistisk. Jag använder en kombination av interaktivitet och minimalism för att skapa ett anpassbart tema som avskärmar elementen som är mindre viktiga. På så sätt får man mer betoningar på den viktigare informationen.
</p>
</div>
<h1 class="lg-heading">
    Sass <span class="text-secondary">Kod</span> Struktur
</h1>
<h2 class="sm-heading">
    Moduler <span class="text-secondary">&</span> Struktur ...
</h2>
<div class="block-me a">
<b>En kort presentation av mina moduler som används:</b><br>
<span class="text-secondary">1. css/normalize.css</span> - Används för att normalisera all css för att få samma grundlayout oavsätt webbläsare.<br>
<span class="text-secondary">2. fontawsome</span> - Används för att visa ikoner så som de på förstasidan eller i footern.<br>
<span class="text-secondary">3. modules/_config.scss</span> - Innehåller alla mixins och variabler som används i alla moduler och teman.<br>
<span class="text-secondary">4. modules/_footer.scss</span> - Innehåller bas all kod för att footern skall fungera<br>
<span class="text-secondary">5. modules/_grid.scss</span> - Tar hand om hgrid och vgrid.<br>
<span class="text-secondary">6. modules/_menu.scss</span> - Innehåller bas all kod för att hambörjarmenyn skall fungera<br>
<span class="text-secondary">7. modules/_typo.scss</span> - En Sassifierad version av @desinax's typografi.<br>
<span class="text-secondary">8. shared/_mobile.scss</span> - Innehåller all delad responsiv kod mellan de webbplatsens teman.<br>
<span class="text-secondary">9. shared/_layout.scss</span> - Innehåller kod för alla delade layouts mellan webbplatsens teman.<br>
</div>
<h2 class="sm-heading">
    Varför min uppdelning är bra ...
</h2>
<div class="block-me" style="margin-top: 38px;">
<p>
Min uppdelning av koden är säkerligen lite mer anurlunda än de andra som har lämnat in projekten då, jag aldrig använde mig av @desinax's riktiga bas. Huvudtanken bakom hur jag har strukturerat mina moduler var att göra det så bra som möjligt för just detta projektet.
</p>
<p>
En av de stösta anledningarna varför just min struktur känns bättre är för att för att jag inte använder mig av en massa onödiga moduler, kod som inte används tillsammans med en massa onödiga variablar, då min kod är lite mer intelligent. Saker som att bara ändra en variabel (exempelvis den primära färgen) kommer också att ändra olika värden som, vilken genomskilnighet vissa elenent får samnt, vilken färg den primära fonten kommer till att ha. Med hjälp av detta kan man på så sätt nästan skapa en helt ny upplevelse av att ändra huvudfärgen och accentfärgen. Självklart kommer inte detta att täcka allt med det gör en hel del.
</p>
<p>
Som tidigare nämt innehåller konfigurationsfilen en hel del funktioner och mixins som alla filer använder sig av. För att då den mest konsistenta layouten för responsivitet finns det olika mixins som specifierar olika breakpoinst då elementen uppdateras. <span class="text-secondary">se bilden nedan</span>
</p>

<div class="index-content" style="grid-gap: 30px;">


<div class="icons allign-row-start">

[FIGURE src=image/report/responsive-mixins.png?h=400&w=400 class="screenshot fix-cimg h-100 d-unset-md never"]

</div>


<div class="allign-row-end">

[FIGURE src=image/report/shared.png?h=400&w=400 class="screenshot fix-cimg h-100 d-unset-md"]

</div>
</div>
<p style="margin-top: 38px;">
Utöver detta har jag också två stycken moduler i mappen <i>shared</i>. Dessa tar hand om att sätta all grundlayout som delas mellan båda teman då saker som färger, fonter, ikoner och några grids stylas. All den responsiva koden från <i>layout</i> sparas och skrivs in i <i>mobile</i> så att man lättare kan seperera koden för att undvika potentiella krockar. Filen innehåller även responsiv kod för navigationen samt footern då de delar på samma.
</p>
<p>
Det är också mycket fokus på att klasser skall ärva från varanda så att man får mer kontroll över alla element och på det sättet undvika potentiella problem. <span class="text-secondary">se bilden ovan för exempel</span>
</p>
Anledningen till att jag valde <span class="text-secondary">Sass</span> över <span class="text-secondary">Less</span> är att sass har bättre syntax då saker som if-statser och for-loopar är mer likt de programmeringsspråk jag är van vid. Less är också lite mer restrikterande då den endast ger en möjligheten att använda mixins under specifika situationer.
<p>
Sass har också blivit mer dominant under de senaste åren då styleramverk som twitter bootstrap har bytt tillbaka till från just less till sass.
</p>
<p>
Jag har känner mig också mer bekväm i prepossesorn som jag valde, då, jag har lekt mer med det i andra av mina projekt. Jag nämde tidigare att det inte fanns moduler till sass i desinax därför jobbade jag även med CSS grid samt lite flexbox för att mina element skall uppnå samma kännsla för ramverket gridlayout. Man får mycket mer kontroll med att jobba med de tekniker jag valde, just för att det inte finns samma mängd buggar och är mindre komplext. Jag känner personligen att man behöver kunna dessa saker för att kunna få jobb som en frontend frontendutvecklare och jag är inte ensam med att tycka det.
</p>
<p>
Det som jag är mest slålt över och som har varit jobbigast är just typografin för hgrid men jag tror att jag har lyckats riktigt bra med denna del.
</p>
<p>
Det finns ett litet problem med detta och det är att elementen gillar att flytta på sig när exempelvis bilder resizas (annars kommer det inte att se bra ut på telefoner) och jag har inte lyckats att få bakgrunden att hänga med. Man kan se att det fungerar någorlunda bra även när man resizar fönstret på t.ex om-sidan. Men för att underlätta gjorde jag en liten "test-sida" för hgridet där bilder och annat som sabbade hur allt rörde sig försvann. På det sättet kan det bli lite lättare för er att testa. Testsidan kommer ni åt <a href="hgrid?hgrid" class="text-secondary" target="_blank">här</a>.
</p>
<p>
Självklart så finns det också nackdelar med teknikerna och strukturen som jag har valt att använda. Varken <span class="text-secondary">flexbox</span> eller <span class="text-secondary">CSS grid</span> fungerar i de äldre webbläsarna som t.ex IE7 samt vissa versioner av browsers utvecklade för mobiler m.m.
</p>
<p>
Strukturen för modulerna som jag har är bra och inte överkompliserade för detta projektet. Dock så är de inte kanske de mest optimala om man t.ex skall återanvända all <span class="text-secondary">scss</span> kod till något annat projekt. Men med att flytta över <b>huvudkoden</b> för både footern och navigationen kan man i alla fall snabbt komma åt det viktigaste. Och det viktigaste av allt, sidan har smooth scroll :).
</p>
</div>
