<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Sylius\Bundle\ContentBundle\Document;

use PhpSpec\ObjectBehavior;
use Sylius\Component\Resource\Model\ResourceInterface;
use Symfony\Cmf\Bundle\BlockBundle\Doctrine\Phpcr\ReferenceBlock;

/**
 * @author Magdalena Banasiak <magdalena.banasiak@lakion.com>
 */
final class ReferenceBlockSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Sylius\Bundle\ContentBundle\Document\ReferenceBlock');
    }

    function it_extends_reference_block_from_Symfony_CMF()
    {
        $this->shouldHaveType(ReferenceBlock::class);
    }

    function it_is_a_Sylius_resource()
    {
        $this->shouldImplement(ResourceInterface::class);
    }
}
