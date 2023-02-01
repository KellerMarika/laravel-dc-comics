<?php
return  [

'file' => [
    'containedStringIn_COLUMN_NAME' => [
        'file',
        
    ]
],

'color' => [
    'containedStringIn_COLUMN_NAME' => [
        'custom_color',
    ]
],

'range' => [
    'containedStringIn_COLUMN_NAME' => [
        'range', //occorre fornire un min max e step
    ]
],

'email' => [
    'containedStringIn_COLUMN_NAME' => [
        'email',
    ]
],

'password' => [
    'containedStringIn_COLUMN_NAME' => [
        'password',
    ]
],


'url' => [
    'containedStringIn_COLUMN_NAME' => [
        'url',
    ]
],

'tel' => [
    'containedStringIn_COLUMN_NAME' => [
        'phone',
    ]
],

'week' => [
    'containedStringIn_COLUMN_NAME' => [
        'week',
    ]
],

'month' => [
    'containedStringIn_COLUMN_NAME' => [
        'month',
    ]
],

'number' => [

    'integer-float_DATA_TYPE' => [
        'bigint',
        'int',
        'mediumint',
        'smallint',
        'tinyint',
        'year', //min 4 max4
        /*        ], 
        'float_DATA_TYPE'=>[ */
        'double',
        //step 0.01
        'decimal', //step 0.01
    ],
],

'select-radio' => [

    'multiChoices_DATA_TYPE' => [
        'enum',
        'set'
    ],
],

'checkbox' => [

    'boolean_DATA_TYPE' => [
        'boolean',
        'bool'
    ],
],

'date' => [

    'onlyDate_DATA_TYPE' => [
        'date',
    ],
],

'Datetime-local' => [

    'dateTime_DATA_TYPE' => [
        'datetime',
    ],
],

'time' => [

    'onlyTime_DATA_TYPE' => [
        'time',
    ],
],

'textarea' => [

    'bigText_DATA_TYPE' => [
        'text',
        'mediumtext',
        'longtext',
        'json'//boh
    ],
],

'text' => [

    'smallText_DATA_TYPE' => [
        'char',
        'tinytext',
        'varchar',
        'string',
        //più tutto il resto
    ],
],

/*       '?' => [

    'space_DATA_TYPE' => [
        'linestring',
        'multilinestring',
        'point',
        'multipoint',
        'polygon',
        'multipolygon',
        'geometry',
        'geometrycollection',
 
    ],
], */



];