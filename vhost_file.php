<?php

    $vhosts_file = '..\apache\conf\extra\httpd-vhosts.conf';

    if (file_exists($vhosts_file)) {
        // echo '<h2 style="background-color: greenyellow;">Existe vhosts_file</h2>';
        // readfile($vhosts_file);
        // $content = file_get_contents($vhosts_file);

        $sites = [];
        $ports = [];
        $states = [];

        $fp = fopen($vhosts_file, "r");
        while (($line = stream_get_line($fp, 1024 * 1024, "\n")) !== false) {
            $linea = $line . '';
            if (strripos($linea, '# Site:') !== false) {
                array_push($sites, str_replace('# Site:', '', $linea));
            } else if (strripos($linea, 'Listen ') !== false) {
                array_push($ports, str_replace(['# Listen ', 'Listen '], '', $linea));
            } else if (strripos($linea, '##<VirtualHost *') !== false) {
                // Do nothing
            } else if (strripos($linea, '#<VirtualHost *') !== false) {
                array_push($states, 'inactive');
            }else if (strripos($linea, '<VirtualHost *') !== false) {
                array_push($states, 'active');
            }
        }
        fclose($fp);
        if (count($sites) === count($ports) && count($ports) === count($states)) {
            for ($i = 0; $i < count($sites); $i++) {
                if ($states[$i] === 'active')
                    echo '<li><a style="background-color: greenyellow;" href="' . 'http://localhost:' . $ports[$i] . '/">' . $sites[$i] . "(" . trim(str_replace('#', '', $ports[$i])) . ")" .  "</a></li><br>";
                else {
                    echo '<li><a style="background-color: orange;" href="' . 'http://localhost:' . $ports[$i] . '/">' . $sites[$i] . "(" . trim(str_replace('#', '', $ports[$i])) . ")" .  "</a></li><br>";
                }
            }
        } else {
            echo '<h2 style="background-color: orange;">Arrays sizes do not match</h2>';
        }
    } else {
        echo '<h1 style="color:red;">vhosts_file does not exist!</h1>';
    }

?>
