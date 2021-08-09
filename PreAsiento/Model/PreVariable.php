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
 * Basado en el model Partida.php.
 */

namespace FacturaScripts\Plugins\PreAsiento\Model;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Plugins\PreAsiento\Model;
use FacturaScripts\Core\Model\Base;

class PreVariable extends Base\ModelClass
{
    use Base\ModelTrait;
    use Base\AccEntryRelationTrait;

    public $idprevariable;
    public $codprevariable;
    public $tipoprevariable;
    public $mensaje;
    
    public static function primaryColumn()
    {
        return 'idprevariable';
    }

    public static function tableName()
    {
        return 'prevariables';
    }    

    /**
     * Returns True if there is no erros on properties values.
     *
     * @return bool
     */
    public function test(): bool
    {
        $utils = $this->toolBox()->utils();
        $this->mensaje = $utils->noHtml($this->mensaje);

        if (\strlen($this->mensaje) < 1 || \strlen($this->mensaje) > 255) {
            $this->toolBox()->i18nLog()->warning('invalid-column-lenght', ['%column%' => 'mensaje', '%min%' => '1', '%max%' => '255']);
            return false;
        }

        return parent::test();
    }

}
