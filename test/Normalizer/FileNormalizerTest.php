<?php


namespace OParl\Test\Normalizer;

use OParl\Model\Body;
use OParl\Model\File;
use OParl\Model\Meeting;
use OParl\Model\Organization;
use OParl\Model\Person;
use PHPUnit\Framework\TestCase;

class FileNormalizerTest extends TestCase
{
    use NormalizerProvider;

    public function testCanNormalize()
    {
        $content = <<<EOF
{
    "id": "https://oparl.example.org/files/57737",
    "type": "https://schema.oparl.org/1.1/File",
    "name": "Anlage 1 zur Anfrage",
    "fileName": "anlage_1_zur_anfrage.pdf",
    "mimeType": "application/pdf",
    "date": "2013-01-04",
    "size": 82930,
    "sha1Checksum": "d749751af44a32c818b9b1e1515251c67734f5d2",
    "accessUrl": "https://oparl.example.org/files/57737.pdf",
    "downloadUrl": "https://oparl.example.org/files/download/57737.pdf",
    "derivativeFile": [
        "https://oparl.example.org/files/57739"
    ],
    "fileLicense": "http://www.opendefinition.org/licenses/cc-by",
    "created": "2013-01-04T07:54:13+01:00",
    "modified": "2013-01-04T07:54:13+01:00"
}
EOF;
        $serializer = $this->getSerializer();

        /** @var File $body */
        $body = $serializer->deserialize($content, File::class, 'json');

        self::assertEquals('https://oparl.example.org/files/57737', $body->getId());
        self::assertEquals('https://schema.oparl.org/1.1/File', $body->getType());
    }
}
