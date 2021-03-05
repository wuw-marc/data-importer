<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Bundle\DataImporterBundle\Cleanup;

use Pimcore\Model\Element\ElementInterface;

class UnpublishStrategy implements CleanupStrategyInterface
{
    public function doCleanup(ElementInterface $element = null): void
    {
        if ($element && method_exists($element, 'setPublished')) {
            $element->setPublished(false);
            $element->save();
        }
    }
}
