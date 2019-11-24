<?php

abstract class Lorem {
   public static function ipsum($nodstavce) {
        $odstavce = [];
        for($p=0; $p<$nodstavce; ++$p) {
            $nveta = random_int(3,8);
            $veta = [];
            for($s=0; $s<$nveta; ++$s) {
                $pole = [];
                $a = .33;
                while(true) {
                    $nslov = random_int(3, 15);
                    $slova = self::random_values(self::$lorem, $nslov);
                    $pole[] = implode(' ', $slova);
                    if(self::random_float() >= $a) {
                        break;
                    }
                    $a /= 2;
                }

                $veta[] = ucfirst(implode(', ', $pole)) . '.';
            }
            $odstavce[] = implode(' ',$veta);
        }
        return implode("\n\n",$odstavce);
    }

    private static function random_float() {
        return random_int(0, PHP_INT_MAX-1)/PHP_INT_MAX;
    }

    private static function random_values($arr, $count) {
        $keys = array_rand($arr, $count);
        if($count == 1) {
            $keys = [$keys];
        }
        return array_intersect_key($arr, array_fill_keys($keys, null));
    }

    private static $lorem = [
        0 => 'lorem',
        1 => 'ipsum',
        2 => 'je',
        3 => 'sedl',
        4 => 'pes',
        5 => 'šel',
        6 => 'na',
        7 => 'do',
        8 => 'zletilí',
        9 => 'malý',
        10 => 'velký',
        11 => 'mi',
        12 => 'oni',
        13 => 'já',
        14 => 'Josef',
        15 => 'v',
        16 => 'opice',
        17 => 'kočka',
        18 => 'pavouk',
        19 => 'slon',
        20 => 'meloun',
        21 => 'spal',
        22 => 'spadl',
        23 => 'příkop',
        24 => 'Indie',
        25 => 'Česko',
        26 => 'hezký',
        27 => 'veverka',
        28 => 'pošťák',
        29 => 'malíř',
        30 => 'brouček',
        31 => 'červený',
        32 => 'rozbytý',
        33 => 'čmelák',
        34 => 'usnul',
        35 => 'šašek',
        36 => 'maluje',
        37 => 'hora',
        38 => 'noha',
        39 => 'ples',
        40 => 'lednice',
        41 => 'chytrý',
        42 => 'a',
        43 => 'hloupí',
        44 => 'teplý',
        45 => 'studený',
        46 => 'ošklivý',
        47 => 'krásný',
        48 => 'kráska',
        49 => 'slaný',
        50 => 'sladký',
        51 => 'ryba',
        52 => 'republikán',
        53 => 'voják',
        54 => 'nedívá',
        55 => 'dívá',
        56 => 'jaro',
        57 => 'jako',
        58 => 'zima',
        59 => 'podzim',
        60 => 'skleněný',
        61 => 'auto',
        62 => 'okno',
        63 => 'déšť',
        64 => 'plavčík',
        65 => 'plavat',
        66 => 'neumí',
        67 => 'umí',
        68 => 'moře',
        69 => 'pták',
        70 => 'knížka',
        71 => 'papír',
        72 => 'má',
        73 => 'tiskárna',
        74 => 'kaštan',
        75 => 'kámen',
        76 => 'živí',
        77 => 'mrtví',
        78 => 'počůraný',
        79 => 'spadl',
        80 => 'strom',
        81 => 'administrativní',
        82 => 'ovci',
        83 => 'snědl',
        84 => 'vlk',
        85 => 'orel',
        86 => 'osm',
        87 => 'les',
        88 => 'brýle',
        89 => 'Jan',
        90 => 'počítač',
        91 => 'ježek',
        92 => 'zelený',
        93 => 'modrý',
        94 => 'žlutá',
        95 => 'žlutý',
        96 => 'jezdil',
        97 => 'bězěl',
        98 => 'prošel',
        99 => 'kulhal',
        100 => 'urna',
    ];
}

