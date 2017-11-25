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
     * @param mixed $other
     *
     * @return bool
     */
    public function compareTo($other): bool;

}
