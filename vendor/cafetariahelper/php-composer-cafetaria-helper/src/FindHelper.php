<?php 

    namespace Cafetaria\Helper 
    {
        class FindHelper
        {
            public static function find(array $items, int $code): bool
            {
                $found = false;
                $index = 0;

                while($index < count($items) && !$found)
                {
                    if($items[$index]->getCode() == $code)
                    {
                        $found = true;
                    }else
                    {
                        $index = $index + 1;
                    }
                }

                return $found;
            }
        }
    }