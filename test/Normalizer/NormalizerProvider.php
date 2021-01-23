<?php


namespace OParl\Test\Normalizer;


use OParl\Normalizer\MeetingNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

trait NormalizerProvider
{
    public function getSerializer(): Serializer
    {
        $normalizers = [
            new ArrayDenormalizer(),
            new MeetingNormalizer(),
        ];

        return new Serializer($normalizers, [new JsonEncoder()]);
    }
}
