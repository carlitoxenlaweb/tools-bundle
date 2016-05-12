<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tecnocreaciones\Bundle\ToolsBundle\Service\UnitConverter;

/**
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
interface UnitTypeInterface 
{
    public function convert($qty, $fromUnit, $toUnit);
    
    function getDescription();
    
    function init();
    
    function getUnits();
    
    public static function getType();    
}
