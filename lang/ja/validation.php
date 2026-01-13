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

    'accepted' => ':attributeを承認してください。',
    'accepted_if' => ':otherが:valueの場合、:attributeを承認してください。',
    'active_url' => ':attributeは有効なURLではありません。',
    'after' => ':attributeは:date以降の日付にしてください。',
    'after_or_equal' => ':attributeは:date以降の日付にしてください。',
    'alpha' => ':attributeは英字のみにしてください。',
    'alpha_dash' => ':attributeは英数字とハイフン、アンダースコアのみにしてください。',
    'alpha_num' => ':attributeは英数字のみにしてください。',
    'array' => ':attributeは配列にしてください。',
    'ascii' => ':attributeは半角英数字と記号のみにしてください。',
    'before' => ':attributeは:date以前の日付にしてください。',
    'before_or_equal' => ':attributeは:date以前の日付にしてください。',
    'between' => [
        'array' => ':attributeは:min個から:max個の間にしてください。',
        'file' => ':attributeは:min KBから:max KBの間のファイルにしてください。',
        'numeric' => ':attributeは:minから:maxの間の数値にしてください。',
        'string' => ':attributeは:min文字から:max文字の間にしてください。',
    ],
    'boolean' => ':attributeはtrueかfalseにしてください。',
    'can' => ':attributeに許可されていない値が含まれています。',
    'confirmed' => ':attributeが確認用の値と一致しません。',
    'contains' => ':attributeに必須の値が含まれていません。',
    'current_password' => '現在のパスワードが正しくありません。',
    'date' => ':attributeは有効な日付ではありません。',
    'date_equals' => ':attributeは:dateと同じ日付にしてください。',
    'date_format' => ':attributeは:format形式にしてください。',
    'decimal' => ':attributeは小数点以下:decimal桁にしてください。',
    'declined' => ':attributeを拒否してください。',
    'declined_if' => ':otherが:valueの場合、:attributeを拒否してください。',
    'different' => ':attributeと:otherは異なる値にしてください。',
    'digits' => ':attributeは:digits桁にしてください。',
    'digits_between' => ':attributeは:min桁から:max桁の間にしてください。',
    'dimensions' => ':attributeの画像サイズが無効です。',
    'distinct' => ':attributeに重複した値があります。',
    'doesnt_end_with' => ':attributeは次のいずれかで終わってはいけません: :values',
    'doesnt_start_with' => ':attributeは次のいずれかで始まってはいけません: :values',
    'email' => ':attributeは有効なメールアドレス形式にしてください。',
    'ends_with' => ':attributeは次のいずれかで終わる必要があります: :values',
    'enum' => '選択された:attributeは無効です。',
    'exists' => '選択された:attributeは無効です。',
    'extensions' => ':attributeは次の拡張子のファイルである必要があります: :values',
    'file' => ':attributeはファイルにしてください。',
    'filled' => ':attributeは必須です。',
    'gt' => [
        'array' => ':attributeは:value個より多くする必要があります。',
        'file' => ':attributeは:value KBより大きいファイルにしてください。',
        'numeric' => ':attributeは:valueより大きい数値にしてください。',
        'string' => ':attributeは:value文字より多くしてください。',
    ],
    'gte' => [
        'array' => ':attributeは:value個以上にしてください。',
        'file' => ':attributeは:value KB以上のファイルにしてください。',
        'numeric' => ':attributeは:value以上の数値にしてください。',
        'string' => ':attributeは:value文字以上にしてください。',
    ],
    'hex_color' => ':attributeは有効な16進数カラーコードにしてください。',
    'image' => ':attributeは画像ファイルにしてください。',
    'in' => '選択された:attributeは無効です。',
    'in_array' => ':attributeは:otherに存在しません。',
    'integer' => ':attributeは整数にしてください。',
    'ip' => ':attributeは有効なIPアドレスにしてください。',
    'ipv4' => ':attributeは有効なIPv4アドレスにしてください。',
    'ipv6' => ':attributeは有効なIPv6アドレスにしてください。',
    'json' => ':attributeは有効なJSON文字列にしてください。',
    'list' => ':attributeはリストにしてください。',
    'lowercase' => ':attributeは小文字にしてください。',
    'lt' => [
        'array' => ':attributeは:value個より少なくしてください。',
        'file' => ':attributeは:value KBより小さいファイルにしてください。',
        'numeric' => ':attributeは:valueより小さい数値にしてください。',
        'string' => ':attributeは:value文字より少なくしてください。',
    ],
    'lte' => [
        'array' => ':attributeは:value個以下にしてください。',
        'file' => ':attributeは:value KB以下のファイルにしてください。',
        'numeric' => ':attributeは:value以下の数値にしてください。',
        'string' => ':attributeは:value文字以下にしてください。',
    ],
    'mac_address' => ':attributeは有効なMACアドレスにしてください。',
    'max' => [
        'array' => ':attributeは:max個以下にしてください。',
        'file' => ':attributeは:max KB以下のファイルにしてください。',
        'numeric' => ':attributeは:max以下の数値にしてください。',
        'string' => ':attributeは:max文字以下にしてください。',
    ],
    'max_digits' => ':attributeは:max桁以下にしてください。',
    'mimes' => ':attributeは次のファイル形式にしてください: :values',
    'mimetypes' => ':attributeは次のファイル形式にしてください: :values',
    'min' => [
        'array' => ':attributeは:min個以上にしてください。',
        'file' => ':attributeは:min KB以上のファイルにしてください。',
        'numeric' => ':attributeは:min以上の数値にしてください。',
        'string' => ':attributeは:min文字以上にしてください。',
    ],
    'min_digits' => ':attributeは:min桁以上にしてください。',
    'missing' => ':attributeは存在してはいけません。',
    'missing_if' => ':otherが:valueの場合、:attributeは存在してはいけません。',
    'missing_unless' => ':otherが:valueでない場合、:attributeは存在してはいけません。',
    'missing_with' => ':valuesが存在する場合、:attributeは存在してはいけません。',
    'missing_with_all' => ':valuesが存在する場合、:attributeは存在してはいけません。',
    'multiple_of' => ':attributeは:valueの倍数にしてください。',
    'not_in' => '選択された:attributeは無効です。',
    'not_regex' => ':attributeの形式が無効です。',
    'numeric' => ':attributeは数値にしてください。',
    'password' => [
        'letters' => ':attributeは少なくとも1つの文字を含める必要があります。',
        'mixed' => ':attributeは少なくとも1つの大文字と1つの小文字を含める必要があります。',
        'numbers' => ':attributeは少なくとも1つの数字を含める必要があります。',
        'symbols' => ':attributeは少なくとも1つの記号を含める必要があります。',
        'uncompromised' => 'この:attributeはデータ漏洩で検出されました。別の:attributeを選択してください。',
    ],
    'present' => ':attributeが存在している必要があります。',
    'present_if' => ':otherが:valueの場合、:attributeが存在している必要があります。',
    'present_unless' => ':otherが:valueでない場合、:attributeが存在している必要があります。',
    'present_with' => ':valuesが存在する場合、:attributeが存在している必要があります。',
    'present_with_all' => ':valuesが存在する場合、:attributeが存在している必要があります。',
    'prohibited' => ':attributeは禁止されています。',
    'prohibited_if' => ':otherが:valueの場合、:attributeは禁止されています。',
    'prohibited_unless' => ':otherが:valuesでない場合、:attributeは禁止されています。',
    'prohibits' => ':attributeは:otherを禁止しています。',
    'regex' => ':attributeの形式が無効です。',
    'required' => ':attributeは必須です。',
    'required_array_keys' => ':attributeは次のキーを含む必要があります: :values',
    'required_if' => ':otherが:valueの場合、:attributeは必須です。',
    'required_if_accepted' => ':otherが承認された場合、:attributeは必須です。',
    'required_if_declined' => ':otherが拒否された場合、:attributeは必須です。',
    'required_unless' => ':otherが:valuesでない場合、:attributeは必須です。',
    'required_with' => ':valuesが存在する場合、:attributeは必須です。',
    'required_with_all' => ':valuesが存在する場合、:attributeは必須です。',
    'required_without' => ':valuesが存在しない場合、:attributeは必須です。',
    'required_without_all' => ':valuesが全て存在しない場合、:attributeは必須です。',
    'same' => ':attributeと:otherは一致する必要があります。',
    'size' => [
        'array' => ':attributeは:size個にしてください。',
        'file' => ':attributeは:size KBにしてください。',
        'numeric' => ':attributeは:sizeにしてください。',
        'string' => ':attributeは:size文字にしてください。',
    ],
    'starts_with' => ':attributeは次のいずれかで始まる必要があります: :values',
    'string' => ':attributeは文字列にしてください。',
    'timezone' => ':attributeは有効なタイムゾーンにしてください。',
    'unique' => ':attributeはすでに使用されています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'uppercase' => ':attributeは大文字にしてください。',
    'url' => ':attributeは有効なURL形式にしてください。',
    'ulid' => ':attributeは有効なULIDにしてください。',
    'uuid' => ':attributeは有効なUUIDにしてください。',

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

    'attributes' => [
        'name' => '名前',
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'password_confirmation' => 'パスワード（確認）',
        'current_password' => '現在のパスワード',
    ],

];
