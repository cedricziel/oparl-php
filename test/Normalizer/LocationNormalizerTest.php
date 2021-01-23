<?php


namespace OParl\Test\Normalizer;

use OParl\Model\Body;
use OParl\Model\Location;
use OParl\Model\Meeting;
use OParl\Model\Organization;
use OParl\Model\Person;
use PHPUnit\Framework\TestCase;

class LocationNormalizerTest extends TestCase
{
    use NormalizerProvider;

    public function testCanNormalize()
    {
        $content = <<<EOF
{
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
}
EOF;
        $serializer = $this->getSerializer();

        /** @var Location $body */
        $body = $serializer->deserialize($content, Location::class, 'json');

        self::assertEquals('https://oparl.example.org/location/0', $body->getId());
        self::assertEquals('https://schema.oparl.org/1.1/Location', $body->getType());
    }
}
