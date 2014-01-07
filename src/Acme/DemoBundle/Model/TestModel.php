<?php
/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace Acme\DemoBundle\Model;

use Symfony\Component\Validator\ExecutionContextInterface;


/**
 * Class TestModel
 *
 * @package Acme\DemoBundle\Model
 *
 * @author Hugo Briand <briand@ekino.com>
 */
class TestModel implements TestModelInterface
{
    /**
     * @var string
     */
    private $testProperty;

    /**
     * @return string
     */
    public function getTestProperty()
    {
        return $this->testProperty;
    }

    public function setTestProperty($testProperty)
    {
        $this->testProperty = $testProperty;
    }

    /**
     * {@inheritdoc}
     */
    public function validate(ExecutionContextInterface $context)
    {
        $context->addViolationAt('property', 'Always fails');
    }
}