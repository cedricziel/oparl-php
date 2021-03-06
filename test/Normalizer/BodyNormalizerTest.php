<?php


namespace OParl\Test\Normalizer;

use OParl\Model\Body;
use OParl\Model\Meeting;
use PHPUnit\Framework\TestCase;

class BodyNormalizerTest extends TestCase
{
    use NormalizerProvider;

    public function testCanNormalize()
    {
        $content = <<<EOF
{
    "id": "https://oparl.example.org/body/0",
    "type": "https://schema.oparl.org/1.1/Body",
    "system": "https://oparl.example.org/",
    "contactEmail": "ris@beispielstadt.de",
    "contactName": "RIS-Betreuung",
    "ags": "05315000",
    "rgs": "053150000000",
    "equivalent": [
        "http://d-nb.info/gnd/2015732-0",
        "http://dbpedia.org/resource/Cologne"
    ],
    "shortName": "Köln",
    "name": "Stadt Köln, kreisfreie Stadt",
    "website": "http://www.beispielstadt.de/",
    "license": "http://creativecommons.org/licenses/by/4.0/",
    "licenseValidSince": "2014-01-01T00:00:00+02:00",
    "organization": "https://oparl.example.org/body/0/organizations/",
    "person": "https://oparl.example.org/body/0/persons/",
    "meeting": "https://oparl.example.org/body/0/meetings/",
    "paper": "https://oparl.example.org/body/0/papers/",
    "agendaItem": "https://oparl.example.org/body/0/agendaItems/",
    "consultation": "https://oparl.example.org/body/0/consultations/",
    "file": "https://oparl.example.org/body/0/files/",
    "locationList": "https://oparl.example.org/body/0/locations/",
    "membership": "https://oparl.example.org/body/0/memberships/",
    "legislativeTerm": [
        {
            "id": "https://oparl.example.org/term/21",
            "type": "https://schema.oparl.org/1.1/LegislativeTerm",
            "body": "https://oparl.example.org/body/0",
            "name": "21. Wahlperiode",
            "startDate": "2010-12-03",
            "endDate": "2013-12-03",
            "created": "2014-01-08T14:28:31+01:00",
            "modified": "2014-01-08T14:28:31+01:00"
        }
    ],
    "location": {
        "id": "https://oparl.example.org/location/0",
        "type": "https://schema.oparl.org/1.1/Location",
        "description": "Rathaus der Beispielstadt, Ratshausplatz 1, 12345 Beispielstadt",
        "created": "2014-01-08T14:28:31+01:00",
        "modified": "2014-01-08T14:28:31+01:00",
        "geojson": {
            "type": "Feature",
            "geometry": {
                "type": "Point",
                "coordinates": [
                    50.1234,
                    10.4321
                ]
            },
            "properties": {
                "name": "Rathausplatz"
            }
        }
    },
    "classification": "Kreisfreie Stadt",
    "created": "2014-01-08T14:28:31+01:00",
    "modified": "2014-01-08T14:28:31+01:00"
}
EOF;
        $serializer = $this->getSerializer();

        /** @var Body $body */
        $body = $serializer->deserialize($content, Body::class, 'json');

        self::assertEquals('https://oparl.example.org/body/0', $body->getId());
        self::assertEquals('https://schema.oparl.org/1.1/Body', $body->getType());
    }
}
