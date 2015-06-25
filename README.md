# bosb

## Vorraussetzungen
- git
- composer

```bash
# composer global installieren
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
```

## Projekt lokal installieren

Im Terminal in das Verzeichnis wechseln, in welchem das Projekt installiert werden soll.

```bash
# im Terminal
# beispielsweise
cd ~/Code
```

Nun muss das Projekt von github gecloned werden:

```bash
# im Terminal
# Das bosb hinten ist der Ordnername und kann beliebig ersetzt werden
git clone https://github.com/lukasoppermann/bosb.git bosb
```

Nun müssen die `dependencies` mit composer installiert werden

```bash
# im Terminal
composer install
```

Sofern Änderungen am CSS vorgenommen werden, muss gulp installiert werden

```bash
# im Terminal
npm install
```
