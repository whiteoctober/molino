<?php

/*
 * This file is part of the Molino package.
 *
 * (c) Pablo Díez <pablodip@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Molino;

/**
 * DeleteQueryInterface.
 *
 * @author Pablo Díez <pablodip@gmail.com>
 */
interface DeleteQueryInterface extends QueryInterface
{
    /**
     * Executes the query.
     */
    function execute();
}
