<?php


namespace OParl\Test\Normalizer;

use OParl\Model\Body;
use OParl\Model\Meeting;
use OParl\Model\Organization;
use OParl\Model\Paper;
use OParl\Model\Person;
use PHPUnit\Framework\TestCase;

class PaperNormalizerTest extends TestCase
{
    use NormalizerProvider;

    public function testCanNormalize()
    {
        $content = <<<EOF
{
    "id": "https://oparl.example.org/paper/749",
    "type": "https://schema.oparl.org/1.1/Paper",
    "body": "https://oparl.example.org/bodies/1",
    "name": "Antwort auf Anfrage 1200/2014",
    "reference": "1234/2014",
    "date": "2014-04-04",
    "paperType": "Beantwortung einer Anfrage",
    "relatedPaper": [
        "https://oparl.example.org/paper/699"
    ],
    "mainFile": {
        "id": "https://oparl.example.org/files/57737",
        "type": "https://schema.oparl.org/1.1/File",
        "name": "Anlage 1 zur Anfrage",
        "fileName": "anlage_1_zur_anfrage.pdf",
        "mimeType": "application/pdf",
        "date": "2013-01-04",
        "sha1Checksum": "d749751af44a32c818b9b1e1515251c67734f5d2",
        "size": 82930,
        "accessUrl": "https://oparl.example.org/files/57737.pdf",
        "downloadUrl": "https://oparl.example.org/files/download/57737.pdf",
        "license": "http://www.opendefinition.org/licenses/cc-by",
        "created": "2013-01-04T07:54:13+01:00",
        "modified": "2013-01-04T07:54:13+01:00"
    },
    "auxiliaryFile": [
        {
            "id": "https://oparl.example.org/files/57739",
            "type": "https://schema.oparl.org/1.1/File",
            "name": "Anlage 1 zur Anfrage",
            "fileName": "anlage.pdf",
            "mimeType": "application/pdf",
            "date": "2013-01-04",
            "sha1Checksum": "da39a3ee5e6b4b0d3255bfef95601890afd80709",
            "size": 82930,
            "accessUrl": "https://oparl.example.org/files/57739.pdf",
            "downloadUrl": "https://oparl.example.org/files/download/57739.pdf",
            "text": "Der Übersichtsplan zeigt alle Ebenen des ...",
            "masterFile": "https://oparl.example.org/files/57738",
            "license": "http://www.opendefinition.org/licenses/cc-by",
            "created": "2013-01-04T07:54:13+01:00",
            "modified": "2013-01-04T07:54:13+01:00"
        }
    ],
    "location": [
        {
            "id": "https://oparl.example.org/locations/29856",
            "type": "https://schema.oparl.org/1.1/Location",
            "description": "Honschaftsstraße 312, Köln",
            "created": "2012-01-08T14:05:27+01:00",
            "modified": "2012-01-08T14:05:27+01:00",
            "geojson": {
                "type": "Point",
                "coordinates": [
                    7.03291,
                    50.98249
                ]
            }
        }
    ],
    "originatorPerson": [
        "https://oparl.example.org/person/2000",
        "https://oparl.example.org/person/1000"
    ],
    "originatorOrganization": [
        "https://oparl.example.org/organization/2000",
        "https://oparl.example.org/organization/1000"
    ],
    "consultation": [
        {
            "id": "https://oparl.example.org/consultation/47594",
            "type": "https://schema.oparl.org/1.1/Consultation",
            "agendaItem": "https://oparl.example.org/agendaitem/15569",
            "meeting": "https://oparl.example.org/meeting/243",
            "organization": [
                "https://oparl.example.org/organization/96"
            ],
            "authoritative": false,
            "role": "Beschlussfassung",
            "created": "2012-01-08T14:05:27+01:00",
            "modified": "2012-01-08T14:05:27+01:00"
        }
    ],
    "underDirectionOf": [
        "https://oparl.example.org/organization/2000"
    ],
    "created": "2013-01-08T12:05:27+01:00",
    "modified": "2013-01-08T12:05:27+01:00"
}
EOF;
        $serializer = $this->getSerializer();

        /** @var Paper $body */
        $body = $serializer->deserialize($content, Paper::class, 'json');

        self::assertEquals('https://oparl.example.org/paper/749', $body->getId());
        self::assertEquals('https://schema.oparl.org/1.1/Paper', $body->getType());
    }
}
