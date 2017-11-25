<?php

/**
 * Comparable.php
 *
 * @since 2017-11-25
 * @author Andreas Treichel <gmblar+github@gmail.com>
 */

namespace Blar\Comparable;

/**
 * Interface Comparable
 *
 * @package Blar\Comparable
 */
interface Comparable {

    /**
     * @param Object $other
     *
     * @return bool
     */
    public function compareTo(Object $other): bool;

}
