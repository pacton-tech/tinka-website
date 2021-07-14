<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    "accepted" => ":attribute mesti diterima.",
    "active_url" => ":attribute bukan URL yang sah.",
    "after" => ":attribute mestilah tarikh selepas :date.",
    "after_or_equal" => ":attribute mestilah tarikh selepas atau sama dengan :date.",
    "alpha" => ":attribute hanya boleh mengandungi huruf.",
    "alpha_dash" => ":attribute hanya boleh mengandungi huruf, nombor, sempang dan garis bawah.",
    "alpha_num" => ":attribute hanya boleh mengandungi huruf dan nombor.",
    "array" => ":attribute mestilah pelbagai.",
    "before" => ":attribute mestilah tarikh sebelum :date.",
    "before_or_equal" => ":attribute mestilah tarikh sebelum atau sama dengan :date.",
    "between" => [
        "array" => ":attribute mestilah antara :min dan :max item.",
        "file" => ":attribute mestilah antara :min dan :max kilobait.",
        "numeric" => ":attribute mestilah antara :min dan :max.",
        "string" => ":attribute mestilah antara :min dan :max karakter."
    ],
    "boolean" => "Medan :attribute mestilah \"true\" atau \"false\".",
    "confirmed" => "Pengesahan :attribute tidak sepadan.",
    "custom" => ["attribute-name" => ["rule-name" => "custom-message"]],
    "date" => ":attribute bukan tarikh yang sah.",
    "date_equals" => ":attribute mestilah tarikh sama dengan :date.",
    "date_format" => ":attribute tidak sepadan dengan format :format.",
    "different" => ":attribute dan :other mesti berbeza.",
    "digits" => ":attribute mesti :digits digit.",
    "digits_between" => ":attribute mestilah di antara digit :min dan :max.",
    "dimensions" => ":attribute ini mempunyai dimensi imej yang tidak sah.",
    "distinct" => "Medan :attribute mempunyai nilai pendua.",
    "email" => ":attribute mestilah alamat e-mel yang sah.",
    "ends_with" => ":attribute mesti berakhir dengan salah satu daripada yang berikut: :values.",
    "exists" => ":attribute yang dipilih tidak sah.",
    "file" => ":attribute mestilah fail.",
    "filled" => "Medan :attribute mesti mempunyai nilai.",
    "gt" => [
        "array" => ":attribute mesti mempunyai lebih daripada item :value.",
        "file" => ":attribute mesti lebih besar daripada :value kilobait.",
        "numeric" => ":attribute mesti lebih besar daripada :value.",
        "string" => ":attribute mesti lebih besar daripada :value karakter."
    ],
    "gte" => [
        "array" => ":attribute mesti mempunyai :value item atau lebih.",
        "file" => ":attribute mesti lebih besar atau sama dengan :value kilobait.",
        "numeric" => ":attribute mesti lebih besar atau sama dengan :value.",
        "string" => ":attribute mesti lebih besar atau sama dengan :value karakter."
    ],
    "image" => ":attribute mestilah gambar.",
    "in" => ":attribute yang dipilih tidak sah.",
    "in_array" => "Medan :attribute tidak ada dalam :other.",
    "integer" => ":attribute mestilah bilangan bulat.",
    "ip" => ":attribute mestilah alamat IP yang sah.",
    "ipv4" => ":attribute mestilah alamat IPv4 yang sah.",
    "ipv6" => ":attribute mestilah alamat IPv6 yang sah.",
    "json" => ":attribute mestilah rentetan JSON yang sah.",
    "lt" => [
        "array" => ":attribute mesti kurang daripada :value item.",
        "file" => ":attribute mestilah kurang daripada :value kilobait.",
        "numeric" => ":attribute mestilah kurang daripada :value.",
        "string" => ":attribute mestilah kurang daripada :value karakter."
    ],
    "lte" => [
        "array" => ":attribute tidak boleh melebihi :value item.",
        "file" => ":attribute mestilah kurang daripada atau sama dengan :value kilobait.",
        "numeric" => ":attribute mestilah kurang daripada atau sama dengan :value.",
        "string" => ":attribute mestilah kurang daripada atau sama dengan :value karakter."
    ],
    "max" => [
        "array" => ":attribute tidak dibenarkan mempunyai lebih daripada :max item.",
        "file" => ":attribute tidak dibenarkan lebih besar daripada :max kilobait.",
        "numeric" => ":attribute tidak dibenarkan lebih besar daripada :max.",
        "string" => ":attribute tidak dibenarkan lebih besar daripada :max karakter."
    ],
    "mimes" => ":attribute mestilah fail jenis: :values.",
    "mimetypes" => ":attribute mestilah fail jenis: :values.",
    "min" => [
        "array" => ":attribute mesti mempunyai sekurang-kurangnya :min item.",
        "file" => ":attribute mestilah sekurang-kurangnya :min kilobait.",
        "numeric" => ":attribute mestilah sekurang-kurangnya :min.",
        "string" => ":attribute mestilah sekurang-kurangnya :min karakter."
    ],
    "not_in" => ":attribute yang dipilih tidak sah.",
    "not_regex" => "Format :attribute tidak sah.",
    "numeric" => ":attribute mestilah nombor.",
    "password" => "Kata laluan tidak betul.",
    "present" => "Medan :attribute mesti ada.",
    "regex" => "Format :attribute tidak sah.",
    "required" => "Medan :attribute diperlukan.",
    "required_if" => "Medan :attribute diperlukan apabila :other adalah :value.",
    "required_unless" => "Medan :attribute diperlukan melainkan :other dalam :values.",
    "required_with" => "Medan :attribute diperlukan apabila ada :values.",
    "required_with_all" => "Medan :attribute diperlukan apabila ada :values.",
    "required_without" => "Medan :attribute diperlukan apabila tiada :values.",
    "required_without_all" => "Medan :attribute diperlukan apabila tiada :values.",
    "same" => ":attribute dan :other mesti sepadan.",
    "size" => [
        "array" => ":attribute mesti mempunyai :size item.",
        "file" => ":attribute mestilah :size kilobait.",
        "numeric" => ":attribute mestilah :size.",
        "string" => ":attribute mestilah :size karakter."
    ],
    "starts_with" => ":attribute mesti bermula dengan salah satu daripada yang berikut: :values.",
    "string" => ":attribute mestilah rentetan.",
    "timezone" => ":attribute mestilah zon yang sah.",
    "unique" => ":attribute sudah diambil.",
    "uploaded" => ":attribute gagal dimuat naik.",
    "url" => "Format :attribute tidak sah.",
    "uuid" => ":attribute mestilah UUID yang sah.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
