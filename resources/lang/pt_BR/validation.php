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

    'accepted'             => ':attribute deve ser aceito.',
    'active_url'           => ':attribute não é um endereço válido.',
    'after'                => ':attribute deve ser após :date.',
    'after_or_equal'       => ':attribute deve ser após ou igual a :date.',
    'alpha'                => ':attribute só deve conter letras.',
    'alpha_dash'           => ':attribute pode conter letras, números e hífen(-).',
    'alpha_num'            => ':attribute pode somente conter letras e números.',
    'array'                => ':attribute deve ser um array.',
    'before'               => ':attribute deve ser uma data anterior a :date.',
    'before_or_equal'      => ':attribute deve ser uma data anterior ou igual a :date.',
    'between'              => [
        'numeric' => ':attribute deve ser entre :min e :max.',
        'file'    => ':attribute deve ser entre :min e :max kilobytes.',
        'string'  => ':attribute deve conter entre :min e :max caracteres.',
        'array'   => ':attribute deve conter entre :min e :max items.',
    ],
    'boolean'              => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed'            => 'A confirmação de :attribute não está igual.',
    'date'                 => ':attribute não é uma data válida.',
    'date_format'          => ':attribute deve estar no formato :format.',
    'different'            => ':attribute e :other devem ser diferentes.',
    'digits'               => ':attribute deve conter :digits dígitos.',
    'digits_between'       => ':attribute deve conter entre :min e :max dígitos.',
    'dimensions'           => ':attribute tem dimensões inválidas da imagem.',
    'distinct'             => ':attribute contém valores em duplicidade.',
    'email'                => ':attribute deve conter um endereço de e-mail válido.',
    'exists'               => 'O :attribute selecionado é inválido.',
    'file'                 => ':attribute deve ser um arquivo.',
    'filled'               => 'O campo :attribute é obrigatório.',
    'image'                => ':attribute deve ser uma imagem.',
    'in'                   => 'O :attribute selecionado é inválido.',
    'in_array'             => 'O campo :attribute não existe em :other.',
    'integer'              => ':attribute deve ser um número inteiro.',
    'ip'                   => ':attribute deve conter um endereço de IP válido.',
    'json'                 => ':attribute deve ser uma JSON válido.',
    'max'                  => [
        'numeric' => ':attribute não pode ser maior que  :max.',
        'file'    => ':attribute não pode ter tamanho maior que :max kilobytes.',
        'string'  => ':attribute não pode conter mais que :max caracteres.',
        'array'   => ':attribute não pode conter mais que :max items.',
    ],
    'mimes'                => ':attribute deve ser arquivo do tipo: :values.',
    'min'                  => [
        'numeric' => ':attribute deve conter pelo menos :min.',
        'file'    => ':attribute deve ter tamanho mínimo de :min kilobytes.',
        'string'  => ':attribute deve conter pelo menos :min caracteres.',
        'array'   => ':attribute deve conter no mínimo :min items.',
    ],
    'not_in'               => 'O :attribute selecionado é inválido.',
    'numeric'              => ':attribute deve ser um número.',
    'present'              => ':attribute deve estar presente.',
    'regex'                => ':attribute está com formato inválido.',
    'required'             => 'Campo :attribute é obrigatório.',
    'required_if'          => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_unless'      => 'O campo :attribute é obrigatório a menos que  :other seja :values.',
    'required_with'        => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without'     => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values está presentes.',
    'same'                 => ':attribute e :other devem ser iguais.',
    'size'                 => [
        'numeric' => ':attribute deve ter :size.',
        'file'    => ':attribute deve conter :size kilobytes.',
        'string'  => ':attribute deve conter :size caracteres.',
        'array'   => ':attribute deve conter :size items.',
    ],
    'string'               => ':attribute deve ser um texto.',
    'timezone'             => ':attribute deve conter uma zona de horário válida.',
    'unique'               => ':attribute já foi cadastrado.',
    'url'                  => ':attribute tem formato inválido.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'tags'         => 'tag',
    ],

];
