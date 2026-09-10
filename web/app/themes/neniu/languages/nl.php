<?php

$navItems = [
    'help' => 'Ik heb hulp nodig',
    'concerns' => 'Ik ben bezorgd',
    'prevention' => 'Samen voorkomen',
    'contact' => 'Contact',
];

return [
    'header-nav-main' => [
        'help' => $navItems['help'],
        'concerns' => $navItems['concerns'],
        'prevention' => $navItems['prevention'],
        'contact' => $navItems['contact'],
    ],
    'footer-nav-help' => [
        'title' => 'Hulp',
        'help' => $navItems['help'],
        'concerns' => $navItems['concerns'],
        'prevention' => $navItems['prevention'],
    ],
    'footer-nav-about' => [
        'title' => 'Over Neniu',
        'who' => 'Wie is Neniu',
        'contact' => $navItems['contact'],
    ],
    'hero-section' => [
        'title' => 'Hulp en advies bij online fraude',
        'text-lead' => 'Heb je iets verdachts meegemaakt? Maak je je zorgen om iemand in je omgeving? Of wil je weten hoe je online fraude beter kunt herkennen en voorkomen?',
        'text' => 'Bij <strong>Neniu</strong> kun je terecht met vragen en bezorgdheden rond online fraude. Onze vrijwilligers luisteren zonder oordeel, helpen je om de situatie beter te begrijpen en bekijken samen met jou welke stappen mogelijk zijn.'
    ],
    'service-card-help' => [
        'title' => 'Ik heb hulp nodig',
        'text' => 'Ben je mogelijk slachtoffer van online fraude? We helpen je om de situatie te begrijpen en de juiste volgende stappen te bepalen.',
        'linkText' => 'Meer info',
    ],
    'service-card-concerns' => [
        'title' => 'Ik ben bezorgd',
        'text' => 'Maak je je zorgen om iemand in je omgeving? We helpen je om signalen te herkennen en te bekijken hoe je kunt reageren.',
        'linkText' => 'Meer info',
    ],
    'service-card-prevention' => [
        'title' => 'Samen voorkomen',
        'text' => 'Met praktijkgerichte infosessies maken we mensen en organisaties weerbaarder tegen online fraude.',
        'linkText' => 'Meer info',
    ],
    // Help section
    'help-section' => [
        'badge-label' => 'Ondersteuning',
        'title' => 'Ik heb hulp nodig',
        'text-lead' => 'Heb je iets meegemaakt dat je niet vertrouwt? Heb je geld overgemaakt, persoonlijke gegevens gedeeld of contact met iemand waarvan je achteraf begint te twijfelen? Blijf er niet alleen mee zitten. Hoe sneller je reageert, hoe groter de kans dat verdere schade kan worden beperkt.',
        'text' => '<p><strong>Twijfel je? Stop dan eerst</strong>. Maak geen verdere betalingen, deel geen persoonlijke gegevens of codes en verbreek voorlopig het contact met de persoon of organisatie die je niet vertrouwt. Bewaar berichten, telefoonnummers, e-mailadressen, documenten en betalingsbewijzen. Heb je bankgegevens gedeeld of al geld overgemaakt? Neem dan zo snel mogelijk contact op met je bank.</p><p>Bij Neniu luisteren we naar je verhaal, zonder oordeel en in alle vertrouwen. Samen brengen we in kaart wat er is gebeurd, bekijken we welke signalen op fraude kunnen wijzen en welke stappen je kunt nemen. Waar mogelijk helpen we ook bij het verzamelen van digitaal bewijsmateriaal en bij de voorbereiding van verdere stappen richting bank, politie of andere betrokken diensten.</p>',
        'callout-contact' => '<p>Je hoeft niet zeker te weten dat je slachtoffer bent geworden. <a href="#contact-section">Twijfel is voldoende om contact</a> met ons op te nemen.</p>'
    ],
    // Concerns section
    'concerns-section' => [
        'badge-label' => 'Begeleiding',
        'title' => 'Ik ben bezorgd om iemand',
        'text-lead' => 'Maak je je zorgen om iemand die mogelijk wordt gemanipuleerd, geld overmaakt, verwikkeld is in een verdachte online relatie of je waarschuwingen niet lijkt te geloven? Het kan moeilijk zijn om te weten wat je moet doen zonder ruzie te veroorzaken of het contact met die persoon te verliezen.',
        'text' => '<p>Probeer verwijten en harde confrontaties zoveel mogelijk te vermijden. Iemand die door een fraudeur wordt beïnvloed, kan sterk overtuigd zijn van het verhaal dat hem of haar wordt verteld. Probeer daarom vooral het contact te behouden, rustig vragen te stellen en samen feiten te controleren. Gebeuren er nog betalingen, dan is snel handelen belangrijk om verdere financiële schade te beperken.</p>
    <p><strong>Ook als partner, familielid, vriend of andere betrokkene kun je bij Neniu terecht.</strong> We helpen je om de situatie te bekijken, mogelijke waarschuwingssignalen te herkennen en na te denken over hoe je het gesprek kunt aangaan. Indien nodig bekijken we samen welke verdere stappen mogelijk zijn.</p>
    <p>Heb je berichten, contactgegevens, betalingsbewijzen, namen van websites of platformen of een overzicht van wat er is gebeurd? Bewaar die informatie. Ze kunnen je helpen om beter te begrijpen wat er aan de hand is.</p>',
    ],
    // Prevention section
    'prevention-section' => [
        'badge-label' => 'Preventie',
        'title' => 'Samen fraude voorkomen',
        'text-lead' => 'Wie begrijpt hoe fraudeurs te werk gaan, kan verdachte situaties sneller herkennen. Daarom organiseert Neniu toegankelijke en praktijkgerichte infosessies, workshops en demonstraties over online fraude en digitale veiligheid.',
        'text' => '<p>Aan de hand van herkenbare voorbeelden laten onze vrijwilligers zien hoe fraudeurs vertrouwen proberen te winnen, welke technieken ze gebruiken en welke signalen je kunnen waarschuwen. Onderwerpen zoals phishing, bankfraude, vriendschaps- en liefdesfraude, frauduleuze beleggingen, identiteitsfraude, gehackte accounts, wachtwoorden en sociale media kunnen daarbij aan bod komen.</p>
        <p>Onze activiteiten richten zich onder meer tot burgers, senioren, gezinnen, verenigingen, scholen, bedrijven, lokale besturen en professionals die met kwetsbare doelgroepen werken. We stemmen de inhoud af op de deelnemers en maken bewust ruimte voor vragen, interactie en praktijkvoorbeelden.</p>',
        'callout-contact' => '<p>Wil je samen met Neniu een infosessie, workshop of andere preventieactiviteit organiseren? <a href="mailto:info@neniu.help?subject=Organiseren preventie-activiteit">Neem contact met ons op</a>. We bekijken graag wat het best aansluit bij jouw organisatie of doelgroep.</p>'
    ],
    // Contact section
    'contact-section' => [
        'title' => 'Contacteer ons',
        'text-lead' => 'Je hoeft er niet alleen voor te staan. Neem gerust contact met ons op. We luisteren naar je verhaal en bekijken samen hoe we je verder kunnen helpen.',
        'text' => 'Je kiest zelf hoe je contact met ons opneemt. Bel ons, plan een vertrouwelijk online videogesprek of stuur ons een e-mail. Onze vrijwilligers staan klaar om naar je te luisteren en je verder op weg te helpen.',
    ],
    // Contact Card - Call
    'contact-card-call' => [
        'button-label' => 'Bel +32 15 48 88 88',
        'description' => 'Je kan ons dagelijks telefonisch bereiken van 9 tot 21 uur.',
    ],
    // Contact Card - Appointment
    'contact-card-appointment' => [
        'button-label' => 'Boek een afspraak',
        'description' => 'Boek je afspraak voor een vertrouwelijk online video gesprek.',
    ],
    // Contact Card - Email
    'contact-card-email' => [
        'button-label' => 'Stuur een e-mail',
        'description' => '24/24 bereikbaar. Je ontvangt zo snel mogelijk een antwoord.',
    ],
    'company-info' => [
        'company-type' => 'vzw'
    ]
];
