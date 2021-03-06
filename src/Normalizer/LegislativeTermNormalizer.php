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

class LegislativeTermNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        $object = new \OParl\Model\LegislativeTerm();
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('body', $data) && $data['body'] !== null) {
            $value = $data['body'];
            if (\is_string($data['body'])) {
                $value = $data['body'];
            } elseif (null === $data['body']) {
                $value = $data['body'];
            }
            $object->setBody($value);
        } elseif (\array_key_exists('body', $data) && $data['body'] === null) {
            $object->setBody(null);
        }
        if (\array_key_exists('startDate', $data)) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['startDate'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('endDate', $data)) {
            $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['endDate'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('shortName', $data) && $data['shortName'] !== null) {
            $value_1 = $data['shortName'];
            if (\is_string($data['shortName'])) {
                $value_1 = $data['shortName'];
            } elseif (null === $data['shortName']) {
                $value_1 = $data['shortName'];
            }
            $object->setShortName($value_1);
        } elseif (\array_key_exists('shortName', $data) && $data['shortName'] === null) {
            $object->setShortName(null);
        }
        if (\array_key_exists('license', $data) && $data['license'] !== null) {
            $value_2 = $data['license'];
            if (\is_string($data['license'])) {
                $value_2 = $data['license'];
            } elseif (null === $data['license']) {
                $value_2 = $data['license'];
            }
            $object->setLicense($value_2);
        } elseif (\array_key_exists('license', $data) && $data['license'] === null) {
            $object->setLicense(null);
        }
        if (\array_key_exists('keyword', $data)) {
            $values = [];
            foreach ($data['keyword'] as $value_3) {
                $values[] = $value_3;
            }
            $object->setKeyword($values);
        }
        if (\array_key_exists('web', $data) && $data['web'] !== null) {
            $value_4 = $data['web'];
            if (\is_string($data['web'])) {
                $value_4 = $data['web'];
            } elseif (null === $data['web']) {
                $value_4 = $data['web'];
            }
            $object->setWeb($value_4);
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
        $value = $object->getBody();
        if (\is_string($object->getBody())) {
            $value = $object->getBody();
        } elseif (null === $object->getBody()) {
            $value = $object->getBody();
        }
        $data['body'] = $value;
        if (null !== $object->getStartDate()) {
            $data['startDate'] = $object->getStartDate()->format('Y-m-d');
        }
        if (null !== $object->getEndDate()) {
            $data['endDate'] = $object->getEndDate()->format('Y-m-d');
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        $value_1 = $object->getShortName();
        if (\is_string($object->getShortName())) {
            $value_1 = $object->getShortName();
        } elseif (null === $object->getShortName()) {
            $value_1 = $object->getShortName();
        }
        $data['shortName'] = $value_1;
        $value_2 = $object->getLicense();
        if (\is_string($object->getLicense())) {
            $value_2 = $object->getLicense();
        } elseif (null === $object->getLicense()) {
            $value_2 = $object->getLicense();
        }
        $data['license'] = $value_2;
        if (null !== $object->getKeyword()) {
            $values = [];
            foreach ($object->getKeyword() as $value_3) {
                $values[] = $value_3;
            }
            $data['keyword'] = $values;
        }
        $value_4 = $object->getWeb();
        if (\is_string($object->getWeb())) {
            $value_4 = $object->getWeb();
        } elseif (null === $object->getWeb()) {
            $value_4 = $object->getWeb();
        }
        $data['web'] = $value_4;
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
        return $type === 'OParl\\Model\\LegislativeTerm';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \OParl\Model\LegislativeTerm;
    }
}
