<?php


namespace OParl\Test\Normalizer;

use OParl\Model\Meeting;
use OParl\Normalizer\MeetingNormalizer;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class MeetingNormalizerTest extends TestCase
{
    use NormalizerProvider;

    public function testCanNormalizeMeeting()
    {
        $content = <<<EOF
{
    "id": "https://oparl.example.org/meeting/281",
    "type": "https://schema.oparl.org/1.1/Meeting",
    "name": "4. Sitzung des Finanzausschusses",
    "start": "2013-01-04T08:00:00+01:00",
    "end": "2013-01-04T12:00:00+01:00",
    "invitation": {
        "id": "https://oparl.example.org/files/57739",
        "name": "Einladung",
        "fileName": "einladung.pdf",
        "mimeType": "application/pdf",
        "date": "2012-01-08",
        "modified": "2012-01-08T14:05:27+01:00",
        "sha1Checksum": "da39a3ee5e6b4b0d3255bfef95601890afd80709",
        "size": 82930,
        "accessUrl": "https://oparl.example.org/files/57739.pdf",
        "downloadUrl": "https://oparl.example.org/files/download/57739.pdf"
    }
}
EOF;
        $serializer = $this->getSerializer();

        /** @var Meeting $meeting */
        $meeting = $serializer->deserialize($content, Meeting::class, 'json');

        self::assertEquals('https://oparl.example.org/meeting/281', $meeting->getId());
        self::assertEquals('https://schema.oparl.org/1.1/Meeting', $meeting->getType());
    }
}
