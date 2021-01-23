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

class ObjectListLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'OParl\\Model\\ObjectListLinks';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \OParl\Model\ObjectListLinks;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \OParl\Model\ObjectListLinks();
        if (\array_key_exists('first', $data)) {
            $object->setFirst($data['first']);
        }
        if (\array_key_exists('prev', $data)) {
            $object->setPrev($data['prev']);
        }
        if (\array_key_exists('self', $data)) {
            $object->setSelf($data['self']);
        }
        if (\array_key_exists('next', $data)) {
            $object->setNext($data['next']);
        }
        if (\array_key_exists('last', $data)) {
            $object->setLast($data['last']);
        }
        if (\array_key_exists('web', $data)) {
            $object->setWeb($data['web']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getFirst()) {
            $data['first'] = $object->getFirst();
        }
        if (null !== $object->getPrev()) {
            $data['prev'] = $object->getPrev();
        }
        if (null !== $object->getSelf()) {
            $data['self'] = $object->getSelf();
        }
        if (null !== $object->getNext()) {
            $data['next'] = $object->getNext();
        }
        if (null !== $object->getLast()) {
            $data['last'] = $object->getLast();
        }
        if (null !== $object->getWeb()) {
            $data['web'] = $object->getWeb();
        }

        return $data;
    }
}