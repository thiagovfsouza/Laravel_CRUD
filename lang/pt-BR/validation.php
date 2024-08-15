<?php
return [
    "attributes" => [
        "name" => "Nome"
    ],
    "accepted" => "O :attribute deve ser aceito.",
    "active_url" => "O :attribute não é um URL válido.",
    "after" => "O :attribute deve ser uma data posterior a :date.",
    "after_or_equal" => "O :attribute deve ser uma data posterior ou igual a :date.",
    "alpha" => "O :attribute pode conter apenas letras.",
    "alpha_dash" => "O :attribute pode conter apenas letras, números, travessões e sublinhados.",
    "alpha_num" => "O :attribute pode conter apenas letras e números.",
    "array" => "O :attribute deve ser um array.",
    "before" => "O :attribute deve ser uma data anterior a :date.",
    "before_or_equal" => "O :attribute deve ser uma data anterior ou igual a :date.",
    "between" => [
        "array" => "O :attribute deve ter entre :min e :max itens.",
        "file" => "O :attribute deve estar entre :min e :max kilobytes.",
        "numeric" => "O :attribute deve estar entre :min e :max.",
        "string" => "O :attribute deve ter entre :min e :max caracteres."
    ],
    "boolean" => "O campo :attribute deve ser verdadeiro ou falso.",
    "confirmed" => "A confirmação de :attribute não corresponde.",
    "custom" => ["attribute-name" => ["rule-name" => "mensagem personalizada"]],
    "date" => "O :attribute não é uma data válida.",
    "date_equals" => "O :attribute deve ser uma data igual a :date.",
    "date_format" => "O :attribute não corresponde ao formato :format.",
    "different" => "O :attribute e o :other devem ser diferentes.",
    "digits" => "O :attribute deve ter :digits dígitos.",
    "digits_between" => "O :attribute deve estar entre :min e :max dígitos.",
    "dimensions" => "O :attribute tem dimensões de imagem inválidas.",
    "distinct" => "O campo :attribute possui um valor duplicado.",
    "email" => "O :attribute deve ser um endereço de email válido.",
    "exists" => "O :attribute selecionado é inválido.",
    "file" => "O :attribute deve ser um arquivo.",
    "filled" => "O campo :attribute deve ter um valor.",
    "gt" => [
        "array" => "O :attribute deve ter mais de :value itens.",
        "file" => "O :attribute deve ser maior que :value kilobytes.",
        "numeric" => "O :attribute deve ser maior que :value.",
        "string" => "O atributo :attribute deve ser maior que os caracteres :value."
    ],
    "gte" => [
        "array" => "O :attribute deve ter :value itens ou mais.",
        "file" => "O :attribute deve ser maior ou igual a :value kilobytes.",
        "numeric" => "O :attribute deve ser maior ou igual a :value.",
        "string" => "O :attribute deve ser maior ou igual a :value characteres."
    ],
    "image" => "O :attribute deve ser uma imagem.",
    "in" => "O :attribute selecionado é inválido.",
    "in_array" => "O campo :attribute não existe em :other.",
    "integer" => "O :attribute deve ser um número inteiro.",
    "ip" => "O :attribute deve ser um endereço IP válido.",
    "ipv4" => "O :attribute deve ser um endereço IPv4 válido.",
    "ipv6" => "O :attribute deve ser um endereço IPv6 válido.",
    "json" => "O :attribute deve ser uma string JSON válida.",
    "lt" => [
        "array" => "O :attribute deve ter itens menores que :value.",
        "file" => "O :attribute deve ser menor que :value kilobytes.",
        "numeric" => "O :attribute deve ser menor que :value.",
        "string" => "O :attribute deve ser menor que :value caracteres."
    ],
    "lte" => [
        "array" => "O :attribute não deve ter mais que :value itens.",
        "file" => "O :attribute deve ser menor ou igual a :value kilobytes.",
        "numeric" => "O :attribute deve ser menor ou igual a :value.",
        "string" => "O :attribute deve ser menor ou igual a :value caracteres."
    ],
    "max" => [
        "array" => "O :attribute não pode ter mais que :max itens.",
        "file" => "O :attribute não pode ser maior que :max kilobytes.",
        "numeric" => "O :attribute não pode ser maior que :max.",
        "string" => "O atributo :attribute não pode ser maior que :max caracteres."
    ],
    "mimes" => "O :attribute deve ser um arquivo do tipo: :values.",
    "mimetypes" => "O :attribute deve ser um arquivo do tipo: :values.",
    "min" => [
        "array" => "O :attribute deve ter pelo menos :min itens.",
        "file" => "O atributo :attribute deve ter pelo menos :min kilobytes.",
        "numeric" => "O :attribute deve ser pelo menos :min.",
        "string" => "O :attribute deve ter pelo menos :min caracteres."
    ],
    "not_in" => "O :attribute selecionado é inválido.",
    "not_regex" => "O formato :attribute é inválido.",
    "numeric" => "O :attribute deve ser um número.",
    "present" => "O campo :attribute deve estar presente.",
    "regex" => "O formato :attribute é inválido.",
    "required" => "O campo :attribute é obrigatório.",
    "required_if" => "O campo :attribute é obrigatório quando :other é :value.",
    "required_unless" => "O campo :attribute é obrigatório, a menos que :other esteja em :values.",
    "required_with" => "O campo :attribute é obrigatório quando :values está presente.",
    "required_with_all" => "O campo :attribute é obrigatório quando :values estão presentes.",
    "required_without" => "O campo :attribute é obrigatório quando :values não está presente.",
    "required_without_all" => "O campo :attribute é obrigatório quando nenhum dos :values está presente.",
    "same" => "O atributo :attribute e :other devem corresponder.",
    "size" => [
        "array" => "O :attribute deve conter :size itens.",
        "file" => "O :attribute deve ser :size kilobytes.",
        "numeric" => "O :attribute deve ser :size.",
        "string" => "O :attribute deve ter :size caracteres."
    ],
    "string" => "O :attribute deve ser uma string.",
    "timezone" => "O :attribute deve ser uma Zona válida.",
    "unique" => "O :attribute já foi usado.",
    "uploaded" => "Falha ao carregar :attribute.",
    "url" => "O formato :attribute é inválido.",
    "uuid" => "O atributo deve ser um UUID válido."
];
