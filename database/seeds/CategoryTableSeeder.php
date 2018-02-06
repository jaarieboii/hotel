<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('activities')->insert([[
                'name' => 'DDR museaum Thale',
                'activity' => 'Het museum is gevestigd in een groot pand van een meubelzaak, op de zesde verdieping. Het
museum bestaat uit 1 verdieping en is onderverdeeld in verschillende kamers. De kamers hebben
verschillende thema’s van 1949-1989. Zo zie je woonkamers uit de ’50, ’60 en ’70 jaren.
De kamers zijn rijkelijk gevuld met allerlei spullen uit de DDR tijd. Kamers met allerlei artikelen zoals
televisies, typemachines, radio’s en fototoestellen in allerlei verschillende uitvoeringen. Verder is er
een kantoor is van de Stasi, klaslokaal, werkplaats, kinderkamer en nog veel meer.
Op de gang bevinden zich wanden vol met vitrines met allerlei materialen/ voorwerpen van elke dag
zoals: speelgoed, bier, wasmiddelen, wekkers, sigarettenverpakkingen en nog veel meer. Er wordt
ook een korte toelichting gegeven op deze voorwerpen.
Een van de kamers is gewijd aan de bouw en de val van de Berlijnse muur met veel tekst,
krantenknipsels en foto’s.
Al met al een interessant opgezet museum. Met misschien wel herkenbare spullen uit je eigen
jeugd!',
                'category' => 'car'
            ],[
            'name' => 'Hexenplatz Thale',
            'activity' => 'Ongeveer een uur rijden vanaf Altenau vind je de plaats Thale, hier zijn verschillende leuke uitstapjes
voor jong en oud. We gaan eerst gratis parkeren:
P Seilbahn-Walther - Rathenau Straße 8 Thale of P Rosstrappe – Rosstrappe 1 Thale
Op ongeveer 5 minuten lopen komen we bij de Erlebnis Welt. Hier zijn tal van eet- en
drinkgelegenheden. Die er trouwens ook weer volop zijn als je met de kabelbaan naar de
Hexentansplatz gaat. Hier beneden zijn tal van leuke activiteiten voor iedereen zoals minigolf,
funpark voor kinderen (trampolines, luna-loop, botsboten etc.) en er staat een Tolhaus (grote
speeltuin voor kinderen en gratis).
Er zijn hier twee kabelbanen:
1. Rosstrappe
2. Hexentansplatz
Rosstrappe- hier kun je de beroemde Rosstrappe van dichtbij zien, sagenpaviljoen bezoeken,
wandelen en downhill Mountainbiken.
Hexentansplatz- de Hexentansplatz ligt op 454 meter hoogte, kaartje kost E 6.50 voor een retour.
De Harz is bekend om zijn mythen en sagen. Eén van deze is dat op de Hexentansplatz in de laatste
nacht van april alle heksen hier verzamelen om met de duivel en demonen te dansen, het
Walpurgisfest
Als je de kabelbaan uitkomt kun je naar het uitzichtpunt lopen. Overal zijn tal van mogelijkheden om
te wandelen. Eenmaal boven aangekomen zijn er veel restaurants en souvenirwinkels.
Je kan het Walpurgishuis bezoeken , kost E 1.50 p.p.
Ook is er nog een dierentuin met 70 verschillende soorten dieren uit Duitsland ( E 6.50 p.p.).
Bijzonder is ook het Bergtheater. Dit heeft een geweldig uitzicht over het Bodental. Hier worden in
de zomer dagelijks openluchtvoorstellingen gehouden. Prijzen zijn variabel.
De Hexentansplatz is dus een trekpleister voor jong en oud. Op de Tanzplatz zelf staan drie grote
beelden; de heks, de duivel en het hulpje van de duivel. De kinderen vinden deze vooral leuk om op
te klimmen.
Als je vanaf de beelden richting de souvenirwinkels loopt kom je bij een groot restaurant met
prachtig terras. Vanaf hier heb je mooi uitzicht op het dal en de Rosstrappe. Je kunt hier helemaal
langs de rand lopen, veilig achter een hek. Je ziet dan steeds weer andere rotsformaties .',
            'category' => 'car'
        ],[
            'name' => 'Wandeling Oderteich',
            'activity' => 'Tussen de plaats Andreasberg en het Torfhaus bevindt zich de Oderteich. Dit is een prachtig
wandelgebied. Langs de weg kun je de auto gratis parkeren.
Langs de Oderteich zijn veel wandelmogelijkheden:
1. Wasserwander weg , heen- en terug 15 km
2. Torfhaus 6,6 km
3. Koningskrug 3,9 km
4. Rondwandeling om de Oderteich 4 km
De rondwandeling biedt veel variatie aan verschillende soorten wandelpaden en natuurschoon. Je
wandelt over vlonders, planken, boomstammen, paden van grind, boomwortels en asfalt.
Stevig schoeisel is dus aan te raden!
De natuur heeft tijdens deze wandeling vele verschillende gezichten. Je ziet dennenbomen, dode
bomenbos, veel insecten en prachtige vergezichten over het water. Je zou niet eens denken dat je in
Duitsland bent, maar eerder in de Rocky Mountains. Het traject begint met de “mythe” van Vrouw
Holle en het ontstaan van de Oderteich. Bij de mythe staat een oude boomstam die creatief is
omgevormd tot vrouw Holle. Wat overigens prachtig is gedaan.
Verder is het mogelijk hier het water in te gaan. Dit is wel geheel op eigen risico. Er zijn tijdens de
wandeling tal van mogelijkheden om even een eet- en drinkpauze in te lassen.

Het dichtstbijzijnde restaurant is de Rinderstall vanaf de Parkeerplaats ongeveer 200 meter. Dit
wordt ook op de bewegwijzering aangegeven.
Deze wandeling is zeker een aanrader en de hond is ook welkom in de ze prachtige omgeving!',
            'category' => 'walking'
            ]]
            );
    }
}
