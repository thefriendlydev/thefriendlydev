<?php
class FieldMap {
  public static $map = [
    'submission'               => [
      'name'                    => 'field_55cbd5d637327',
      'store_id'                => 'field_55cbd5f437328',
      'likes'                   => 'field_55cbe8d83a4f3',
      'department'              => 'field_55cbd41037324ada',
      'type'                    => 'field_55cbd41037324',
      'picture'                 => 'field_55cbd47737325',
      'youtube_url'             => 'field_55cbd4b237326',
      'is_winner'               => 'field_55dc8644360c2'
    ],
  ];
  public static function key_for ($posttype, $fieldname) {
    return self::$map[$posttype][$fieldname];
  }
}