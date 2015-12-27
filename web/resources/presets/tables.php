<?php
class Tables {
    static function button ($icon = "", $color = "", $id = "", $class = "", $title = "", $link = false, $url = ""){ 
        $html = "";
        if ($link){ $html .= "<a href ='$url'>"; } 
        $html .="<button id='$id' class='btn-list fa fa-$icon color-bg-$color $class' title='$title'></button>";
        if ($link){ $html .="</a>";  }
        return $html;
     }
}
