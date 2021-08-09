<?php
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2014-2020 Carlos Garcia Gomez <carlos@facturascripts.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 * 
 * Este fichero es parte del plugin PreAsientos de FacturaScripts 2020
 * @author Rafael del Pozo <pozo@us.es>
 * Basado en el model Asiento.php.
 */

namespace FacturaScripts\Plugins\PreAsiento\Model;

use FacturaScripts\Core\Model\Base;

class PreAsiento extends Base\ModelClass implements Base\GridModelInterface {

    use Base\ModelTrait;

    public $concepto;
    public $idpreasiento;
    public $name;

    public static function primaryColumn() {
        return 'idpreasiento';
    }

    public static function tableName() {
        return 'preasientos';
    }

    public function accumulateAmounts(array &$detail) {
        
    }

    public function initTotals() {
        
    }

}
