<?php
/**
 * Copyright 2011-2013 Maximilian Reichel <mr@phramz.com>
 *
 * This file is part of Phramz.
 *
 * Phramz is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Phramz is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Phramz.  If not, see <http://www.gnu.org/licenses/lgpl.txt>.
 */
namespace Phramz\Commons\Test\Fixture;

/**
 * @author Maximilian Reichel <mr@phramz.com>
 */
class PlainObject
{
    private $privateValue;
    public $publicValue;

    public function __construct($privateValue = 'private', $publicValue = 'public')
    {
        $this->privateValue = $privateValue;
        $this->publicValue = $publicValue;
    }

    public function setPrivateValue($privateValue)
    {
        $this->privateValue = $privateValue;
    }

    public function getPrivateValue()
    {
        return $this->privateValue;
    }
}
