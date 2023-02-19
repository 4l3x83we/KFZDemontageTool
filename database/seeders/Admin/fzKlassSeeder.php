<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: fzklassSeeder.php
 * User: ${USER}
 * Date: 14.${MONTH_NAME_FULL}.2023
 * Time: 10:24
 */

namespace Database\Seeders\Admin;

use App\Models\Backend\Admin\fzklasse;
use Illuminate\Database\Seeder;

class fzKlassSeeder extends Seeder
{
    public function run()
    {
        fzklasse::create(['fzk_id' => '1', 'fzk_name' => 'C1 | Lof Zugmasch. Ketten (=1150mm)',]);
        fzklasse::create(['fzk_id' => '2', 'fzk_name' => 'C2 | Lof Zugmasch. Ketten (<40km/h, SW <1150mm)',]);
        fzklasse::create(['fzk_id' => '3', 'fzk_name' => 'C3 | Lof Zugmasch. Ketten (<40km/h, LM <600kg)',]);
        fzklasse::create(['fzk_id' => '4', 'fzk_name' => 'C4 | Lof Zugmasch. Ketten (Stelzenschlepper)',]);
        fzklasse::create(['fzk_id' => '5', 'fzk_name' => 'C5 | Lof Zugmasch. Ketten (>40km/h)',]);
        fzklasse::create(['fzk_id' => '6', 'fzk_name' => 'L1e | einspuriges Motorfahrzeug',]);
        fzklasse::create(['fzk_id' => '7', 'fzk_name' => 'L2e | mehrspuriges Motorfahrzeug',]);
        fzklasse::create(['fzk_id' => '8', 'fzk_name' => 'L3e | Kraftrad (Motorrad)',]);
        fzklasse::create(['fzk_id' => '9', 'fzk_name' => 'L4e | Motorrad mit Beiwagen',]);
        fzklasse::create(['fzk_id' => '10', 'fzk_name' => 'L5e | Motordreirad (z.B. Trike)',]);
        fzklasse::create(['fzk_id' => '11', 'fzk_name' => 'L6e | Vierrädrige Leichtkraftfahrzeuge',]);
        fzklasse::create(['fzk_id' => '12', 'fzk_name' => 'L7e | Vierrädrige Kraftfahrzeuge im Sinne der Richtlinie 2002/24/EG',]);
        fzklasse::create(['fzk_id' => '13', 'fzk_name' => 'M1 | PKW/Kombi (höchstens 8 Sitzpläze außer Fahrer)',]);
        fzklasse::create(['fzk_id' => '14', 'fzk_name' => 'M2 | Omnibus (mehr als 8 Sitze, höchstzul. Gesamtgew. bis 5t)',]);
        fzklasse::create(['fzk_id' => '15', 'fzk_name' => 'M2 | Omnibus (mehr als 8 Sitze, höchstzul. Gesamtgew. über 5t)',]);
        fzklasse::create(['fzk_id' => '16', 'fzk_name' => 'N1 | Lastkraftwagen (höchstzul. Gesamtgew. bis 3,5t)',]);
        fzklasse::create(['fzk_id' => '17', 'fzk_name' => 'N2 | Lastkraftwagen (höchstzul. Gesamtgew. über 3,5t und bis 12t)',]);
        fzklasse::create(['fzk_id' => '18', 'fzk_name' => 'N3 | Lastkraftwagen (höchstzul. Gesamtgew. über 12t)',]);
        fzklasse::create(['fzk_id' => '19', 'fzk_name' => 'O1 | Anhänger (höchstzul. Gesamtgew. bis 0,75t)',]);
        fzklasse::create(['fzk_id' => '20', 'fzk_name' => 'O2 | Anhänger (höchstzul. Gesamtgew. über 0,75t und bis 3,5t)',]);
        fzklasse::create(['fzk_id' => '21', 'fzk_name' => 'O3 | Anhänger (höchstzul. Gesamtgew. über 3,5t und bis 10t)',]);
        fzklasse::create(['fzk_id' => '22', 'fzk_name' => 'O4 | Anhänger (höchstzul. Gesamtgew. über 10t)',]);
        fzklasse::create(['fzk_id' => '23', 'fzk_name' => 'R1 | Lof Anhänger, bis 1,500kg/Achse',]);
        fzklasse::create(['fzk_id' => '24', 'fzk_name' => 'R2 | Lof Anhänger, bis 3,500kg/Achse',]);
        fzklasse::create(['fzk_id' => '25', 'fzk_name' => 'R3 | Lof Anhänger, bis 21,000kg/Achse',]);
        fzklasse::create(['fzk_id' => '26', 'fzk_name' => 'R4 | Lof Anhänger, mehr als 21,000kg/Achse',]);
        fzklasse::create(['fzk_id' => '27', 'fzk_name' => 'T1 | Lof Zugmasch. (=1150mm)',]);
        fzklasse::create(['fzk_id' => '28', 'fzk_name' => 'T2 | Lof Zugmasch. (<40km/h, SW <1150mm)',]);
        fzklasse::create(['fzk_id' => '29', 'fzk_name' => 'T3 | Lof Zugmasch. (<40km/h, LM <600kg)',]);
        fzklasse::create(['fzk_id' => '30', 'fzk_name' => 'T4 | Lof Zugmasch. (<=40km/h)',]);
        fzklasse::create(['fzk_id' => '31', 'fzk_name' => 'T5 | Lof Zugmasch. (>40km/h)',]);

    }
}
