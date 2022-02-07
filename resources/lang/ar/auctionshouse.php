<?php

return [
    'title' => 'المزادات',
    'new' => 'انشاء مزاد',
    'your' => 'عرض المزادات الخاصة بي',
    'no-filter' => 'لا توجد تصفية',

    'add' => [
        'title' => 'اضافة عنصر فى المزادات',
        'back' => 'رجوع',
        'form' => [
            'web-inventory' => 'حقيبة الويب:',
            'selected-item' => 'العنصر المحدد:',
            'gold-lost' => 'انتبه, ستفقد :percent% من عملة gold كضريبة عندما يشتري شخص ما العنصر.',
            'price' => 'السعر',
            'price_help' => 'سعر البداية عند المزايدة عليها.',
            'price_instead_help' => 'السعر لشراء العنصر فوراً. إذا تركت هذا فارغًا, لا يوجد شراء فوري متاح.',
            'price_instead' => 'سعر الشراء الفوري',
            'until' => 'حتى',
            'until_help' => 'تاريخ انتهاء المزاد.',
            'submit-item' => 'إنشاء مزاد',
            'no-item-help' => 'إذا كنت تريد إضافة عنصر, الرجاء الذهاب إلى هذه الصفحة',
            'no-item-help-href' => 'حقيبة الويب',
        ]
    ],

    'own' => [
        'title' => 'المزادات الخاصة بك',
        'back' => 'رجوع',
        'cancel-title' => 'إلغاء هذا المزاد',
        'cancel-message' => 'هل أنت متأكد أنك تريد إلغاء المزاد لهذا العنصر؟ :item',
    ],

    'sidebar' => [
        'filter' => 'تصفية',
        'weapon' => 'Weapons',
        'equipment' => 'Equipment',
    ],

    'table' => [
        'item' => 'السلعه',
        'name' => 'الاسم',
        'price' => 'السعر',
        'price_instead' => 'سعر الشراء الفوري',
        'until' => 'حتى',
        'actions' => 'أجراءات',
    ],

    'showitem' => [
        'title' => ':name',
        'own-item' => 'لا يمكنك المزايدة أو شراء العنصر الخاص بك.',
        'expired' => 'انتهى هذا المزاد',
        'gold' => 'عملة gold',
        'npc_price' => 'NPC سعر',
        'price' => 'سعر العرض الحالي',
        'price_instead' => 'سعر الشراء الفوري',
        'until' => 'التاريخ حتى بدء المزاد',
        'bid_price' => 'سعر العرض الخاص بك',
        'bid' => 'العرض',
        'highest-user' => 'أنت حاليا أعلى مزايد',
        'current_bids' => '(يوجد حاليا  :amount عروض على هذا العنصر.)',
        'buy_now_text' => 'يمكنك شراء هذا العنصر الآن',
        'buy_now' => 'شراء الأن!',
    ],

    'notification' => [
        'add' => [
            'successfully' => 'تمت إضافة العنصر بنجاح إلى المزادات',
            'price' => 'سعر الشراء الفوري لا يمكن أن يكون أقل من السعر العادي.',
            'not-item' => 'هذا ليس العنصر الخاص بك, ماذا تحاول?',
        ],
        'buy' => [
            'successfully' => 'لقد اشتريت هذا العنصر بنجاح, تحقق من حقيبة الويب الخاص بك.',
            'not-enough-gold' => 'ليس لديك ما يكفي من عملة gold في حقيبة الويب الخاص بك.',
            'until' => 'لقد مر الوقت لشراء هذا العنصر.',
            'price-0' => 'سعر الشراء الفوري هو 0, لذلك لا يمكنك شرائه!',
            'error' => 'حدث خطأ ما, من فضلك حاول مرة أخرى.',
        ],
        'cancel' => [
            'successfully' => 'لقد قمت بإلغاء هذا المزاد بنجاح!',
        ],
        'bid' => [
            'successfully' => 'أنت الآن الأعلى في هذا المزاد',
            'not-enough-gold' => 'ليس لديك ما يكفي من عملة gold في حقيبة الويب الخاص بك.',
            'until' => 'لقد مر الوقت لشراء هذا العنصر.',
            'not-highest' => 'قام شخص ما بتقديم عرض للتو وهو أعلى من سعرك الحالي',
            'error' => 'حدث خطأ ما ، يرجى المحاولة مرة أخرى.',
            'already' => 'أنت بالفعل صاحب أعلى عرض سعر.',
            'bid-higher' => 'لا يمكنك المزايدة أعلى من سعر الشراء الفوري',
        ]
    ],
];