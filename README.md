# Costs of COVID-19


## Überblick

* [Über das Projekt](#über-das-projekt)
  * [Ziele](#ziele)
  * [Frameworks](#frameworks)
* [Installation](#installation)
  * [Voraussetzungen](#voraussetzungen)
  * [Installieren](#installieren)
* [Demo](#demo)
* [Roadmap](#roadmap)
* [Contributing](#contributing)
* [Kontakt](#kontakt)




## Über das Projekt

Keinem nützt es, erst in 2 Jahren den tatsächlichen wirtschaftlichen Schaden der Corona-Krise zu bemessen. Rettungspakete und Unterstützungen müssen zeitnah bei den richtigen Unternehmen ankommen. Insbesondere kleine Unternehmen und Selbstständige sind von den Auswirkungen des Covid19-Virus so stark betroffen, dass sie Angst um ihre Existenzgrundlage haben.

Mit dieser Plattform können an die betroffenen Unternehmen durch eine schnelle, standardisierte Kreditprüfung kurzfristig kleinere Darlehen zur Kompensation der entstandenen Umsatzeinbußen ausgegeben werden. Durch die Offenlegung der Daten der Unternehmen erhalten der Bund und die Länder eine Indikation zu dem wirtschaftlichen Schaden in Echtzeit. Dies soll sie in die Lage versetzen zeitnah mit geeigneten Rettungspaketen reagieren zu können.

### Ziele

#### Echtzeitmessung des in Deutschland entstandenen wirtschaftlichen Schadens

* Ermöglicht es dem Bund und den Ländern die wirtschaftlichen Folgen von Covid19 schneller abschätzen zu können und dadurch frühzeitig entsprechende Maßnahmen einzuleiten

#### Schnelle Vergabe von Notkrediten an Unternehmen in der Krise

* Für die Plattform muss ein Fonds aufgesetzt werden
* Einfacher Prüfungsalgorithmus ermöglicht schnelle und unbürokratische Kreditvergabe für kleine Unternehmen
* Begrenzung der Kredite auf bspw. 10 T€ / Monat, um insb. kleine Unternehmen und Selbstständige zu unterstützen
* Als Anreiz für die Unternehmen, die Daten zu teilen

### Frameworks/DB

* Laravel
* vue.js
* mySQL




## Installation

Um eine lokale Version zu nutzenm nüssen folgende Schritte beachtet werden.

### Voraussetzungen

* Laravel
* Composer
* Datenbank

### Installieren

1. Repo klonen
```sh
git clone https://github.com/yourCustomCode/costs-of-covid-19.git
```
2. Composer
```sh
composer install
```
3. .env anpassen
```sh
nano .env
```




## Demo

Eine funktionierende Demo kann sich _unter folgender [Website](https://costsofcovid-19.cloud.ycc-serv.com/)_ angesehen werden.




## Roadmap

### Allgemein:
* Die Domain muss eingetragen werden
* Abstimmung mit dem Finanzamt / Bundesanzeiger, um elektronische Übermittlung der Daten zur Verifizierung der
* Angaben zu diskutieren
* Fonds zur Kreditfinanzierung aufsetzen
* Bekanntmachung der Website bei Unternehmen in Deutschland
* Kreditvergabe-Algorithmus muss noch aufgebaut / programmiert werden





## Contributing

Contributions machen ein Open Source Projekt aus und helfen bei der Entwicklung sowie dem Lernprozess. Alle Contributions **sind gern gesehen**.

1. Fork das Projekt
2. Erstelle eine Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit deine Änderungen (`git commit -m 'Add some AmazingFeature'`)
4. Push (`git push origin feature/AmazingFeature`)
5. Öffne einen Pull Request



## Kontakt

* Philipp Hartmann - philipp.hartmann@pwc.com (Projektmanagement)
* Stefan Wild - XXX (Frontend)
* Florian Lorch - XXX (Frontend)
* Tim Ganther - tim@yourcustomcode.com (Backend)
* Louis Linke - louis@yourcustomcode.com (Backend)
