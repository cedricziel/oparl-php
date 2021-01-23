<?php


namespace OParl\Test\Normalizer;

use OParl\Model\Body;
use OParl\Model\Meeting;
use OParl\Model\Organization;
use PHPUnit\Framework\TestCase;

class OrganizationNormalizerTest extends TestCase
{
    use NormalizerProvider;

    public function testCanNormalize()
    {
        $content = <<<EOF
{
    "id": "https://oparl.example.org/organization/34",
    "type": "https://schema.oparl.org/1.1/Organization",
    "body": "https://oparl.example.org/bodies/1",
    "name": "Ausschuss für Haushalt und Finanzen",
    "shortName": "Finanzausschuss",
    "startDate": "2012-07-17",
    "organizationType": "Gremium",
    "location": {
        "id": "https://oparl.example.org/location/0",
        "type": "https://schema.oparl.org/1.1/Location",
        "description": "Rathaus der Beispielstadt, Ratshausplatz 1, 12345 Beispielstadt",
        "created": "2012-01-06T12:01:00+01:00",
        "modified": "2012-01-08T14:05:27+01:00",
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
    "post": [
        "Vorsitzender",
        "1. Stellvertreter",
        "Mitglied"
    ],
    "meeting": "https://oparl.example.org/organization/34/meetings",
    "membership": [
        "https://oparl.example.org/membership/27",
        "https://oparl.example.org/membership/48",
        "https://oparl.example.org/membership/57"
    ],
    "classification": "Ausschuss",
    "keyword": [
        "finanzen",
        "haushalt"
    ],
    "created": "2012-07-16T00:00:00+02:00",
    "modified": "2012-08-16T12:34:56+02:00"
}
EOF;
        $serializer = $this->getSerializer();

        /** @var Organization $body */
        $body = $serializer->deserialize($content, Organization::class, 'json');

        self::assertEquals('https://oparl.example.org/organization/34', $body->getId());
        self::assertEquals('https://schema.oparl.org/1.1/Organization', $body->getType());
    }
}
