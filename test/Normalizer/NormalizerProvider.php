<?php


namespace OParl\Test\Normalizer;


use OParl\Normalizer\AgendaItemNormalizer;
use OParl\Normalizer\BodyNormalizer;
use OParl\Normalizer\ConsultationNormalizer;
use OParl\Normalizer\FileNormalizer;
use OParl\Normalizer\LegislativeTermNormalizer;
use OParl\Normalizer\LocationNormalizer;
use OParl\Normalizer\MeetingNormalizer;
use OParl\Normalizer\MembershipNormalizer;
use OParl\Normalizer\ObjectListLinksNormalizer;
use OParl\Normalizer\ObjectListNormalizer;
use OParl\Normalizer\ObjectListPaginationNormalizer;
use OParl\Normalizer\OParlObjectNormalizer;
use OParl\Normalizer\OrganizationNormalizer;
use OParl\Normalizer\OrganizationObjectListNormalizer;
use OParl\Normalizer\PaperNormalizer;
use OParl\Normalizer\PersonNormalizer;
use OParl\Normalizer\SystemNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

trait NormalizerProvider
{
    public function getSerializer(): Serializer
    {
        $normalizers = [
            new ArrayDenormalizer(),
            new AgendaItemNormalizer(),
            new BodyNormalizer(),
            new ConsultationNormalizer(),
            new FileNormalizer(),
            new LegislativeTermNormalizer(),
            new LocationNormalizer(),
            new MeetingNormalizer(),
            new MembershipNormalizer(),
            new ObjectListLinksNormalizer(),
            new ObjectListNormalizer(),
            new ObjectListPaginationNormalizer(),
            new OParlObjectNormalizer(),
            new OrganizationNormalizer(),
            new OrganizationObjectListNormalizer(),
            new PaperNormalizer(),
            new PersonNormalizer(),
            new SystemNormalizer(),
        ];

        return new Serializer($normalizers, [new JsonEncoder()]);
    }
}
