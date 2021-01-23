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

class MeetingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'OParl\\Model\\Meeting';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \OParl\Model\Meeting;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \OParl\Model\Meeting();
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('shortName', $data) && $data['shortName'] !== null) {
            $value = $data['shortName'];
            if (is_string($data['shortName'])) {
                $value = $data['shortName'];
            } elseif (is_null($data['shortName'])) {
                $value = $data['shortName'];
            }
            $object->setShortName($value);
        } elseif (\array_key_exists('shortName', $data) && $data['shortName'] === null) {
            $object->setShortName(null);
        }
        if (\array_key_exists('license', $data) && $data['license'] !== null) {
            $value_1 = $data['license'];
            if (is_string($data['license'])) {
                $value_1 = $data['license'];
            } elseif (is_null($data['license'])) {
                $value_1 = $data['license'];
            }
            $object->setLicense($value_1);
        } elseif (\array_key_exists('license', $data) && $data['license'] === null) {
            $object->setLicense(null);
        }
        if (\array_key_exists('keyword', $data)) {
            $values = [];
            foreach ($data['keyword'] as $value_2) {
                $values[] = $value_2;
            }
            $object->setKeyword($values);
        }
        if (\array_key_exists('web', $data) && $data['web'] !== null) {
            $value_3 = $data['web'];
            if (is_string($data['web'])) {
                $value_3 = $data['web'];
            } elseif (is_null($data['web'])) {
                $value_3 = $data['web'];
            }
            $object->setWeb($value_3);
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
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        $value = $object->getShortName();
        if (is_string($object->getShortName())) {
            $value = $object->getShortName();
        } elseif (is_null($object->getShortName())) {
            $value = $object->getShortName();
        }
        $data['shortName'] = $value;
        $value_1 = $object->getLicense();
        if (is_string($object->getLicense())) {
            $value_1 = $object->getLicense();
        } elseif (is_null($object->getLicense())) {
            $value_1 = $object->getLicense();
        }
        $data['license'] = $value_1;
        if (null !== $object->getKeyword()) {
            $values = [];
            foreach ($object->getKeyword() as $value_2) {
                $values[] = $value_2;
            }
            $data['keyword'] = $values;
        }
        $value_3 = $object->getWeb();
        if (is_string($object->getWeb())) {
            $value_3 = $object->getWeb();
        } elseif (is_null($object->getWeb())) {
            $value_3 = $object->getWeb();
        }
        $data['web'] = $value_3;
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
}
