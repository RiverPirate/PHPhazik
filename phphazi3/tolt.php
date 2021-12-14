<?php

spl_autoload(
        function ($onev){
            $p=explode('\\',$onev);
            $f= end($p);
            if(file_exists($f)) include $f;
        }
        );
