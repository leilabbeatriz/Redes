<?php
class Storage{

    public static function importImage($image){//caso haja uma subpasta, deve ser incluida junto com o arquivo.extensao
        return print "/storage/decoration/images/".$image;
    }

    public static function importCSS($css){//caso haja uma subpasta, deve ser incluida junto com o arquivo.extensao
        return print "/storage/decoration/css/".$css;
    }

    public static function importIcon($icon){//caso haja uma subpasta, deve ser incluida junto com o arquivo.extensao
        return print "/storage/decoration/icons/".$icon;
    }

    public static function importJs($js){//caso haja uma subpasta, deve ser incluida junto com o arquivo.extensao
        return print "/storage/decoration/js/".$js;
    }
}