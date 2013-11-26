<?php

namespace Modera\BackendToolsBundle\Section;

/**
 * A basic immutable implementation of {@class SectionInterface}.
 *
 * @author    Sergei Lissovski <sergei.lissovski@modera.org>
 * @copyright 2013 Modera Foundation
 */
class Section implements SectionInterface
{
    private $iconClass;
    private $name;
    private $description;
    private $meta;
    private $section;
    private $sectionActivationParams;

    /**
     * @param string $name
     * @param string $description
     * @param string $iconClass
     * @param array  $meta
     */
    public function __construct($name, $section, $description = '', $iconClass = '', array $sectionActivationParams = array(),array $meta = array())
    {
        $this->name = $name;
        $this->section = $section;
        $this->description = $description;
        $this->iconClass = $iconClass;
        $this->sectionActivationParams = $sectionActivationParams;
        $this->meta = $meta;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getIconClass()
    {
        return $this->iconClass;
    }

    /**
     * @return string
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * @return array
     */
    public function getSectionActivationParams()
    {
        return $this->sectionActivationParams;
    }
}