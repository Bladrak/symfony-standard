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
 * Class TestModelInterface
 *
 * @package Acme\DemoBundle\Model
 *
 * @author Hugo Briand <briand@ekino.com>
 */
interface TestModelInterface
{
    /**
     * @return string
     */
    public function getTestProperty();

    /**
     * @param ExecutionContextInterface $context
     */
    public function validate(ExecutionContextInterface $context);
}