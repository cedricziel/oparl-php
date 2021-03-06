<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace OParl\Normalizer;

use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class OrganizationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \OParl\Model\Organization();
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('body', $data)) {
            $object->setBody($data['body']);
        }
        if (\array_key_exists('membership', $data)) {
            $values = [];
            foreach ($data['membership'] as $value) {
                $values[] = $value;
            }
            $object->setMembership($values);
        }
        if (\array_key_exists('meeting', $data)) {
            $object->setMeeting($data['meeting']);
        }
        if (\array_key_exists('consultation', $data)) {
            $object->setConsultation($data['consultation']);
        }
        if (\array_key_exists('post', $data)) {
            $values_1 = [];
            foreach ($data['post'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPost($values_1);
        }
        if (\array_key_exists('subOrganizationOf', $data)) {
            $object->setSubOrganizationOf($data['subOrganizationOf']);
        }
        if (\array_key_exists('organizationType', $data)) {
            $object->setOrganizationType($data['organizationType']);
        }
        if (\array_key_exists('classification', $data)) {
            $object->setClassification($data['classification']);
        }
        if (\array_key_exists('startDate', $data)) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['startDate'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('endDate', $data)) {
            $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['endDate'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('website', $data)) {
            $object->setWebsite($data['website']);
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($this->denormalizer->denormalize($data['location'], 'OParl\\Model\\Location', 'json', $context));
        }
        if (\array_key_exists('externalBody', $data)) {
            $object->setExternalBody($data['externalBody']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('shortName', $data) && $data['shortName'] !== null) {
            $value_2 = $data['shortName'];
            if (\is_string($data['shortName'])) {
                $value_2 = $data['shortName'];
            } elseif (null === $data['shortName']) {
                $value_2 = $data['shortName'];
            }
            $object->setShortName($value_2);
        } elseif (\array_key_exists('shortName', $data) && $data['shortName'] === null) {
            $object->setShortName(null);
        }
        if (\array_key_exists('license', $data) && $data['license'] !== null) {
            $value_3 = $data['license'];
            if (\is_string($data['license'])) {
                $value_3 = $data['license'];
            } elseif (null === $data['license']) {
                $value_3 = $data['license'];
            }
            $object->setLicense($value_3);
        } elseif (\array_key_exists('license', $data) && $data['license'] === null) {
            $object->setLicense(null);
        }
        if (\array_key_exists('keyword', $data)) {
            $values_2 = [];
            foreach ($data['keyword'] as $value_4) {
                $values_2[] = $value_4;
            }
            $object->setKeyword($values_2);
        }
        if (\array_key_exists('web', $data) && $data['web'] !== null) {
            $value_5 = $data['web'];
            if (\is_string($data['web'])) {
                $value_5 = $data['web'];
            } elseif (null === $data['web']) {
                $value_5 = $data['web'];
            }
            $object->setWeb($value_5);
        } elseif (\array_key_exists('web', $data) && $data['web'] === null) {
            $object->setWeb(null);
        }
        if (\array_key_exists('deleted', $data)) {
            $object->setDeleted($data['deleted']);
        }
        if (\array_key_exists('created', $data)) {
            $object->setCreated(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created']));
        }
        if (\array_key_exists('modified', $data)) {
            $object->setModified(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['modified']));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getBody()) {
            $data['body'] = $object->getBody();
        }
        if (null !== $object->getMembership()) {
            $values = [];
            foreach ($object->getMembership() as $value) {
                $values[] = $value;
            }
            $data['membership'] = $values;
        }
        if (null !== $object->getMeeting()) {
            $data['meeting'] = $object->getMeeting();
        }
        if (null !== $object->getConsultation()) {
            $data['consultation'] = $object->getConsultation();
        }
        if (null !== $object->getPost()) {
            $values_1 = [];
            foreach ($object->getPost() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['post'] = $values_1;
        }
        if (null !== $object->getSubOrganizationOf()) {
            $data['subOrganizationOf'] = $object->getSubOrganizationOf();
        }
        if (null !== $object->getOrganizationType()) {
            $data['organizationType'] = $object->getOrganizationType();
        }
        if (null !== $object->getClassification()) {
            $data['classification'] = $object->getClassification();
        }
        if (null !== $object->getStartDate()) {
            $data['startDate'] = $object->getStartDate()->format('Y-m-d');
        }
        if (null !== $object->getEndDate()) {
            $data['endDate'] = $object->getEndDate()->format('Y-m-d');
        }
        if (null !== $object->getWebsite()) {
            $data['website'] = $object->getWebsite();
        }
        if (null !== $object->getLocation()) {
            $data['location'] = $this->normalizer->normalize($object->getLocation(), 'json', $context);
        }
        if (null !== $object->getExternalBody()) {
            $data['externalBody'] = $object->getExternalBody();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        $value_2 = $object->getShortName();
        if (\is_string($object->getShortName())) {
            $value_2 = $object->getShortName();
        } elseif (null === $object->getShortName()) {
            $value_2 = $object->getShortName();
        }
        $data['shortName'] = $value_2;
        $value_3 = $object->getLicense();
        if (\is_string($object->getLicense())) {
            $value_3 = $object->getLicense();
        } elseif (null === $object->getLicense()) {
            $value_3 = $object->getLicense();
        }
        $data['license'] = $value_3;
        if (null !== $object->getKeyword()) {
            $values_2 = [];
            foreach ($object->getKeyword() as $value_4) {
                $values_2[] = $value_4;
            }
            $data['keyword'] = $values_2;
        }
        $value_5 = $object->getWeb();
        if (\is_string($object->getWeb())) {
            $value_5 = $object->getWeb();
        } elseif (null === $object->getWeb()) {
            $value_5 = $object->getWeb();
        }
        $data['web'] = $value_5;
        if (null !== $object->getDeleted()) {
            $data['deleted'] = $object->getDeleted();
        }
        if (null !== $object->getCreated()) {
            $data['created'] = $object->getCreated()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getModified()) {
            $data['modified'] = $object->getModified()->format('Y-m-d\\TH:i:sP');
        }

        return $data;
    }

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'OParl\\Model\\Organization';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \OParl\Model\Organization;
    }
}
