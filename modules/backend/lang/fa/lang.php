<?php
return [
    'auth' => [
        'title' => 'بخش مدیریت',
        'invalid_login' => 'جزییات وارد شده با اطلاعات ما همخوانی ندارد. لطفا دوباره بررسی کنید.',
    ],
    'field' => [
        'invalid_type' => 'نوع فیلد :type نا معتبر می باشد.',
        'options_method_invalid_model' => "خصیصه ':field' به مدل معتبری اشاره نمی کند. گزینه مورد نظر را در مدل :model ایجاد نمایید.",
        'options_method_not_exists' => 'کلاس مدل :model باید شامل متد :method() باشد و گزینه های مورد نیاز ":field" را بازنشاند.',
        'options_static_method_invalid_value' => "متد استاتیک ':method()' در :class آرایه ی معتبری بر نمی گرداند.",
        'colors_method_not_exists' => "کلاس مدل :model باید شامل متد :method() باشد و کدهای هگزادسیمال رنگ های HTML  ':field' را بازنشاند.",
    ],
    'widget' => [
        'not_registered' => "کلاس مربوط به ابزارک ':name' به سیستم معرفی نشده است",
        'not_bound' => "ابزارکی تعریف شده در کلاس با نام ':name' به هیچ کنترلری ارتباط داده نشده است",
    ],
    'page' => [
        'untitled' => "بدون عنوان",
        '404' => [
            'label' => 'صفحه مورد نظر یافت نشد.',
            'help' => "ما بسیار جستجو کردیم اما آدرس درخواستی پیدا نشد. شاید شما به دنبال چیز دیگری می گردید؟",
            'back_link' => 'بازگشت به صفحه قبل',
        ],
        'access_denied' => [
            'label' => "شما مجوز دسترسی ندارید",
            'help' => "شما مجوز لازم براس دسترسی به این صفحه را ندارید.",
            'cms_link' => "بازگشت به مدیریت",
        ],
        'no_database' => [
            'label' => 'پایگاه داده یافت نشد',
            'help' => "جهت استفاده از بخش مدیریت به یک پایگاه داده نیاز دارید. تنظیمات پایگاه داده را بررسی نموده و از نصب جدولها در آن اطمینان حاصل کنید.",
            'cms_link' => 'بازگشت به صفحه اصلی'
        ],
    ],
    'partial' => [
        'not_found_name' => "بخشی با نام ':name' یافت نشد.",
        'invalid_name' => 'نام بخش  :name نامعتبر است',
    ],
    'ajax_handler' => [
        'invalid_name' => 'کنترل کننده آژاکس با نام  :name نامعتبر است.',
        'not_found' => "کنترل کننده آژاکس با نام ':name' پیدا نشد.",
    ],
    'account' => [
        'impersonate' => 'استفاده از هویت کاربر',
        'impersonate_confirm' => 'آیا مطمئن هستید که می خواهید از هویت این کاربر استفاده کنید؟ با خروج از سیستم می توانید به حالت اولیه خود بازگردید.',
        'impersonate_success' => 'شما اکنون با هویت این کاربر هستید.',
        'impersonate_working' => 'در حال تغییر هویت ...',
        'impersonating' => 'تغییر هویت :full_name',
        'stop_impersonating' => 'توقف تغییر هویت',
        'unsuspend' => 'خروج از حالت تعلیق',
        'unsuspend_confirm' => 'آیا جهت خروج این کاربر از حالت تعلیق مطمئن هستید؟',
        'unsuspend_success' => 'کاربر از حالت تعلیق خارج شد.',
        'unsuspend_working' => 'در حال خروج از حالت تعلیق ...',
        'signed_in_as' => 'وارد شده به عنوان :full_name',
        'sign_out' => 'خروج',
        'login' => 'ورود',
        'reset' => 'تنظیم مجدد',
        'restore' => 'بازنشاندن',
        'login_placeholder' => 'ورود',
        'password_placeholder' => 'کلمه عبور',
        'remember_me' => 'مرا به خاطر نگهدار',
        'forgot_password' => "کلمه عبور خود را فراموش کرده اید؟",
        'enter_email' => "پست الکترونیکی خود را وارد نمایید",
        'enter_login' => "نام کاربری خود را وارد نمایید",
        'email_placeholder' => "پست الکترونیکی",
        'enter_new_password' => "کلمه عبور جدید را وارد نمایید",
        'password_reset' => "بازنشاندن کلمه عبور",
        'restore_success' => "یک نامه به پست الکترونیکی شما جهت شروع فرایند بازنشانی کلمه عبور ارسال شد.",
        'reset_success' => "کلمه عبور شما بازنشانی شد و شما هم اکنون میتوانید وارد سیستم شوید.",
        'reset_error' => "اطلاعات رمز عبور نا معتبر است , لطفا مجددا تلاش نمایید!",
        'reset_fail' => "عدم توانایی در بازنشاندن کلمه عبور شما!",
        'apply' => 'اعمال کردن',
        'cancel' => 'انصراف',
        'delete' => 'حذف',
        'ok' => 'تایید',
    ],
    'dashboard' => [
        'menu_label' => 'میز کار',
        'widget_label' => 'ابزارک',
        'widget_width' => 'عرض',
        'full_width' => 'عرض کامل',
        'manage_widgets' => 'مدیرت ابزارک ها',
        'add_widget' => 'افزودن ابزارک',
        'widget_inspector_title' => 'تنظیمات ابزارک',
        'widget_inspector_description' => 'پیکر بندی ابزارک گزارشگیری',
        'widget_columns_label' => 'عرض :columns',
        'widget_columns_description' => 'عرض ابزارک باید عددی مابین 1 تا 10 باشد.',
        'widget_columns_error' => 'لطفا عرض ابزارک را عددی مابین 1 تا 10 وارد نمایید.',
        'columns' => '{1} ستون|[2,Inf] ستون ها',
        'widget_new_row_label' => 'تحمیل سطر جدید',
        'widget_new_row_description' => 'افزودن ابزارک در سطر جدید.',
        'widget_title_label' => 'عنوان ابزارک',
        'widget_title_error' => 'گزینه "عنوان ابزارک" حتما باید وارد شود.',
        'reset_layout' => 'تنظیم مجدد طرح بندی',
        'reset_layout_confirm' => 'آیا از تنظیم مجدد طرح بندی به حالت پیشفرض اطمینان دارید؟',
        'reset_layout_success' => 'تنطیم مجدد طرح بندی انجام شد.',
        'make_default' => 'استفاده به عنوان پیشفرض',
        'make_default_confirm' => 'آیا از استفاده طرح بندی کنونی به عنوان پیشفرض اطمینان دارید؟',
        'make_default_success' => 'طرح بندی کنونی به عنوان پیشفرض تعیین شد.',
        'collapse_all' => 'بستن همه',
        'expand_all' => 'باز کردن همه',
        'status' => [
            'widget_title_default' => 'وضعیت سیستم',
            'update_available' => '{0} به روز رسانی موجود است!|{1} به روز رسانی موجود است!|[2,Inf] به روز رسانی موجود است!',
            'updates_pending' => 'به روزرسانی جدید موجود است.',
            'updates_nil' => 'شما از آخرین نسخه استفاده می کنید.',
            'updates_link' => 'به روز رسانی',
            'warnings_pending' => 'مشکلی وجود دارد که نیاز به بررسی شما دارد.',
            'warnings_nil' => 'مشکلی جهت نمایش وجود ندارد',
            'warnings_link' => 'نمایش',
            'core_build' => 'ویرایش سیستم',
            'event_log' => 'گزارش رویداد ها',
            'request_log' => 'گزارش درخواست ها',
            'app_birthday' => 'نصب شده از',
        ],
        'welcome' => [
            'widget_title_default' => 'خوش آمدید',
            'welcome_back_name' => ':name به :app خوش آمدید.',
            'welcome_to_name' => ':name به :app خوش آمدید.',
            'first_sign_in' => 'اولین ورود شما  به سیستم می باشد',
            'last_sign_in' => 'آخرین ورود شما',
            'view_access_logs' => 'نمایش گزارش دسترسی ها',
            'nice_message' => 'روز خوبی داشته باشید',
        ]
    ],
    'user' => [
        'name' => 'مدیریت',
        'menu_label' => 'مدیران',
        'menu_description' => 'مدیریت کاربران , گروه ها و دسترسی های مدیران.',
        'list_title' => 'مدیریت مدیران',
        'new' => 'مدیر جدید',
        'login' => "ورود",
        'first_name' => "نام",
        'last_name' => "نام خانوادگی",
        'full_name' => "نام کامل",
        'email' => "ایمیل",
        'role_field' => 'نقش',
        'role_comment' => 'نقش ها، مجوز های کاربران را تعیین می کنند که توسط سطوح کاربرای در سربرگ مجوز ها می توانند مورد ارجحیت قرار گیرند و تغییر کنند.',
        'groups' => "گروه ها",
        'groups_comment' => "اختصاص به گروهی که این شخص به آن تعلق دارد.",
        'avatar' => "نمایه",
        'password' => "کلمه عبور",
        'password_confirmation' => "تکرار کلمه عبور",
        'permissions' => 'مجوز های دسترسی',
        'account' => 'حساب کاربری',
        'superuser' => "کاربر ممتاز",
        'superuser_comment' => "اگر میخواهید این شخص به تمام قسمت ها دسترسی داشته باشد این گزینه را فعال نمایید.",
        'send_invite' => 'دعوت نامه توسط پست الکترونیکی ارسال شود',
        'send_invite_comment' => 'جهت ارسال دعوت نامه به پست الکترونیکی این شخص این گزینه را فعال نمایید',
        'delete_confirm' => 'آیا از حذف این مدیر اطمینان دارید؟',
        'return' => 'بازگشت به لیست مدیران',
        'allow' => 'اجازه دسترسی',
        'inherit' => 'ارث بری',
        'deny' => 'عدم دسترسی',
        'activated' => 'فعال شده',
        'last_login' => 'آخرین ورود',
        'created_at' => 'ایجاد شده در',
        'updated_at' => 'ویرایش شده در',
        'deleted_at' => 'حذف شده در',
        'show_deleted' => 'نمایش حذف شده ها',
        'group' => [
            'name' => 'گروه',
            'name_field' => 'نام',
            'name_comment' => 'نام در لیست گروه های در فرم مدیریت در هنگام ویرایش یا ایجاد به  نمایش  در می آید.',
            'description_field' => 'توضیحات',
            'is_new_user_default_field_label' => 'گروه پیشفرض',
            'is_new_user_default_field_comment' => 'بطور پیشفرض مدیران جدید را در این گروه ایجاد کن.',
            'code_field' => 'کد',
            'code_comment' => 'کد یکتایی را جهت دسترسی به آن توسط API وارد نمایید.',
            'menu_label' => 'گروه ها',
            'list_title' => 'مدیریت گروه ها',
            'new' => 'گروه مدیریت جدید',
            'delete_confirm' => 'آیا از حذف این گروه از مدیران اطمینان دارید?',
            'return' => 'بازگشت به لیست گروه ها',
            'users_count' => 'کاربران'
        ],
        'role' => [
            'name' => 'نقش',
            'name_field' => 'نام',
            'name_comment' => 'نام در لیست نقشها در بخش مدیریت به نمایش در می آید.',
            'description_field' => 'توضیحات',
            'code_field' => 'کد',
            'code_comment' => 'کد منحصربفرد نقش را جهت دسترسی به آن توسط رابط برنامه نویسی وارد نمایید.',
            'menu_label' => 'مدیریت نقش ها',
            'list_title' => 'مدیریت نقش ها',
            'new' => 'نقش جدید',
            'delete_confirm' => 'آیا از حذف این نقش اطمینان دارید؟',
            'return' => 'بازگشت به لیست نقش ها',
            'users_count' => 'کاربران'
        ],
        'preferences' => [
            'not_authenticated' => 'هیچ کاربر ثبت شده ای جهت بارگذاری یا ذخیره تنظیمات وجود ندارد.'
        ],
        'trashed_hint_title' => 'این کاربر حذف شده است.',
        'trashed_hint_desc' => 'این کاربرحذف شده است و نمی توانید آن وارد سیستم شوید. جهت بازیابی آن ، روی نماد بازیابی کاربر در سمت چپ-پایین کلیک کنید',
    ],
    'list' => [
        'default_title' => 'لیست',
        'search_prompt' => 'جستجو...',
        'no_records' => 'چیزی یافت نشد.',
        'missing_model' => 'هیچ مدلی برای لیست استفاده شده در کلاس :class تعریف نشده است.',
        'missing_column' => 'ستونی برای :columns تعریف نشده است.',
        'missing_columns' => 'ستونی برای لیست تعریف شده در :class موجود نیست.',
        'missing_definition' => "در لیست تعریف شده ستونی برای ':field' موجود نیست.",
        'missing_parent_definition' => "کنترل کننده لیست شامل تعریف ':definition' نمی باشد.",
        'behavior_not_ready' => 'لسیت مقدار دهی اولیه شده است ، لطفا بررسی نمایید که متد makeLists() در کنترلر خود فراخوانی کرده باشید.',
        'invalid_column_datetime' => "ستون ':column' از نوع شی تاریخ نمی باشد ، لطفا بررسی نمایید که این ستون در مدل از نوع تاریخ تعریف شده باشد.",
        'pagination' => 'نمایش :from تا :to از :total مورد',
        'first_page' => 'اولین صفحه',
        'last_page' => 'آخرین صفحه',
        'prev_page' => 'صفحه قبل',
        'next_page' => 'صفحه بعد',
        'refresh' => 'بازنشانی',
        'updating' => 'درحال به روز رسانی...',
        'loading' => 'در حال بارگزاری...',
        'setup_title' => 'راه اندازی لیست',
        'setup_help' => 'ستون هایی را که میخواهید مشاهده نمایید را انتخاب نمایید. میتوانید محل قرار گیری ستونها را با جابجا نمودن آنها به .',
        'records_per_page' => 'مورد در هر صفحه',
        'records_per_page_help' => 'تعداد موارد نمایش داده شده در هر صفحه را انتخاب نمایید. لطفا توجه نمایید نمایش تعداد زیادی از موارد در هر صفحه از کارایی سیستم می کاهد.',
        'check' => 'بررسی',
        'delete_selected' => 'حذف انتخاب شده ها',
        'delete_selected_empty' => 'مورد جهت حذف انتخاب نشده است.',
        'delete_selected_confirm' => 'آیا میخواهید موارد انتخابی را حذف کنید؟',
        'delete_selected_success' => 'حدف موارد انتخابی انجام شد.',
        'column_switch_true' => 'بله',
        'column_switch_false' => 'خیر'
    ],
    'fileupload' => [
        'attachment' => 'فایل ضمیمه',
        'help' => 'برای فایل ضمیمه عنوان و توضیح مختصری وارد نمایید.',
        'title_label' => 'عنوان',
        'description_label' => 'توضیحات',
        'default_prompt' => 'فایل را جهت ارسال به این نقطه بکشید و یا %s را کلیک کنید',
        'attachment_url' => 'نشانی پیوست',
        'upload_file' => 'ارسال فایل',
        'upload_error' => 'خطا در ارسال فایل',
        'remove_confirm' => 'آیا اطمینان دارید؟',
        'remove_file' => 'حذف فایل'
    ],
    'repeater' => [
        'add_new_item' => 'افزودن مورد جدید',
        'min_items_failed' => ':name حداقل :min  از مورد, فقط :items که ارائه شده است.',
        'max_items_failed' => ':name فقط :max مورد اجازه دارید از , :items که ارائه شده است.',
    ],
    'form' => [
        'create_title' => ":name جدید",
        'update_title' => "ویرایش :name",
        'preview_title' => "پیش نمایش :name",
        'create_success' => ':name با موفقیت ایجاد شد.',
        'update_success' => ':name با موفقیت به روز رسانی شد.',
        'delete_success' => ':name با موفقیت حذف شد.',
        'restore_success' => ':name بازیابی شد',
        'reset_success' => 'بازنشانی موفق بود',
        'missing_id' => "رکورد مشخصه (ID) برای فرم انتخاب نشده است.",
        'missing_model' => 'مدلی برای فرن تعریف شده در کلاس :class مشخص نشده است.',
        'missing_definition' => "فرم مورد نظر شامل فیلدی برای ':field' نمی باشد.",
        'not_found' => 'فرمی با مشخصه :id یافت نشد.',
        'action_confirm' => "آیا اطمینان دارید؟",
        'create' => 'ایجاد',
        'create_and_close' => 'ایجاد و خروج',
        'creating' => 'در حال ایجاد...',
        'creating_name' => 'درحال ایجاد :name...',
        'save' => 'ذخیره',
        'save_and_close' => 'ذخیره و خروج',
        'saving' => 'در حال ذخیره...',
        'saving_name' => 'درحال ذخیره :name...',
        'delete' => 'حذف',
        'deleting' => 'در حال حذف...',
        'confirm_delete' => 'آیا از حذف این مورد اطمینان دارید؟',
        'confirm_delete_multiple' => 'آیا از حذف موارد انتخاب شده اطمینان دارید؟',
        'deleting_name' => 'درحال حذف :name...',
        'restore' => 'بازیابی',
        'restoring' => 'در حال بازیابی ...',
        'confirm_restore' => 'آیا از بازیابی این رکورد مطمئن هستید؟',
        'reset_default' => 'بازگشت به پیش فرض',
        'resetting' => 'بازنشانی',
        'resetting_name' => 'بازنشانی name:',
        'undefined_tab' => 'متفرقه',
        'field_off' => 'بله',
        'field_on' => 'خیر',
        'add' => 'افزودن',
        'apply' => 'اعمال',
        'cancel' => 'انصراف',
        'close' => 'خروج',
        'confirm' => 'تایید',
        'reload' => 'بارگذاری مجدد',
        'complete' => 'تکمیل',
        'ok' => 'تایید',
        'or' => 'یا',
        'confirm_tab_close' => 'در صورت بستن این پنجره موارد ذخیره نشده از بین خواهند رفت. آیا از حذف شدن این پنجره اطمینان دارید؟',
        'behavior_not_ready' => 'فرم مور نظر مقدار دهی اولیه نشده است ، بررسی کنید که متد initForm() در کنترلر فراخوانی شده باشد.',
        'preview_no_files_message' => 'فایلی جهت ارسال وجود ندارد',
        'preview_no_media_message' => 'رسانه ای انتخاب نشده است.',
        'preview_no_record_message' => 'موردی انتخاب نشده است.',
        'select' => 'انتخاب',
        'select_all' => 'انتخاب همه',
        'select_none' => 'هیچ کدام را انتخاب نکنید',
        'select_placeholder' => 'لطفا انتخاب نمایید',
        'insert_row' => 'افزودن سطر',
        'insert_row_below' => 'افزودن سطر بعد از',
        'delete_row' => 'حذف سطر',
        'concurrency_file_changed_title' => 'فایل تغییر کرد',
        'concurrency_file_changed_description' => 'فایلی که شما ویرایش کردید توسط کاربر دیگری تغییر یافته و ذخیره شده است. شما میتوانید فایل را مجددا بارگذاری نمایید و تغییراتی که اعمال کرده اید را از دست بدهید و یا تغییرات اعمال شده توسط آن کاربر را بین برده و فایل را بازنویسی نمایید.',
        'return_to_list' => 'بازگشت به لیست'
    ],
    'recordfinder' => [
        'find_record' => 'انتخاب مورد',
        'invalid_model_class' => 'کلاس مدل فراهم شده  ":modelClass" برای انتخاب رکوردها نامعتبر است.',
        'cancel' => 'انصراف',
    ],
    'pagelist' => [
        'page_link' => 'لینک صفحه',
        'select_page' => 'صفحه ای را انتخاب نمایید...'
    ],
    'relation' => [
        'missing_config' => "کنترل کننده ارتباطات پایگاه داده شامل تعریفی برای ':config' نمی باشد.",
        'missing_definition' => "در ارتباط مورد نظر فیلد ':field' وجود ندارد.",
        'missing_model' => "مدلی برای ارتباط موجود در :class وجود ندارد.",
        'invalid_action_single' => "این عمل در ارتباط یک تعرفه نمبتواند اعمال شود.",
        'invalid_action_multi' => "این عمل در ارتباط چند طرفه نمیتواند اعمال شود.",
        'relationwidget_unsupported_type' => 'نوع رابطه ":type"  توسط ارتباط ابزارک پشتیبانی نمی شود.',
        'help' => "بر روی یک گزینه کلیک کنید تا افزوده شود",
        'related_data' => "اطلاعات :name مرتبط",
        'add' => "افزودن",
        'add_selected' => "افرودن انتخاب شده ها",
        'add_a_new' => ":name جدید",
        'link_selected' => "لینک انتخاب شده ها",
        'link_a_new' => "لینک :name جدید",
        'cancel' => "انصراف",
        'close' => "بستن",
        'add_name' => "افزودن :name",
        'create' => "ایجاد",
        'create_name' => "ایجاد :name",
        'update' => "بروز رسانی",
        'update_name' => "بروز رسانی :name",
        'preview' => "پیش نمایش",
        'preview_name' => "پیش نمایش :name",
        'remove' => "حذف",
        'remove_name' => "حذف :name",
        'delete' => "حذف",
        'delete_name' => "حذف :name",
        'delete_confirm' => "آیا اطمینان دارید؟",
        'link' => "لینک",
        'link_name' => "لینک :name",
        'unlink' => "حذف لینک",
        'unlink_name' => "حذف لینک :name",
        'unlink_confirm' => "آیا اطمینان دارید؟",
    ],
    'reorder' => [
        'default_title' => 'مرتب سازی موارد',
        'no_records' => 'موردی جهت مرتب سازی یافت نشد.',
    ],
    'model' => [
        'name' => "مدل",
        'not_found' => "مدل ':class' با مشخصه ی :id یافت نشد",
        'missing_id' => "مشخصه ای برای مدل مورد نظر یافت نشد.",
        'missing_relation' => "مدل ':class' شامل تعریفی از ':relation'.",
        'missing_method' => "مدل ':class' متدی با نام ':method' ندارد.",
        'invalid_class' => "مدل :model استفاده شده در :class معتبر نمی باشد، این مدل باید از کلاس \Model ارث برده باشد.",
        'mass_assignment_failed' => "عدم توانایی در مقدار دهی  ':attribute'.",
    ],
    'warnings' => [
        'tips' => 'راهنمایی پیکر بندی سیستم',
        'tips_description' => 'مشکلاتی در پیکربندی سیستم وجود دارد، شما باید تنظیمات زیر را بررسی نمایید.',
        'permissions' => 'پوشه :name یا یکی از زیر پوشه های آن برای PHP قابل نوشتن نیستند. لطفا تنظیمات این پوشه را تعییر دهید.',
        'extension' => 'افزونه PHP با نام :name نصب نشده است. لطفن این افزونه را نصب کرده و فعال نمایید.',
        'plugin_missing' => 'افزونه :name مورد نیاز است ولی نصب نشده. لطفا این افزونه را نصب کنید.',
        'debug' => 'حالت عیب یابی فعال است. این مورد در حالت ارائه نهایی نرم افزار توصیه نمی شود.',
        'decompileBackendAssets' => 'فایل های assets   موجود در Backend در حال حاضر کامپایل نشده اند. این مورد هنگام ارائه نهایی نرم افزار توصیه نمی شود.',
        'default_backend_user' => 'کاربر مدیر با مشخصات پیش فرض  (admin / admin@domain.tld)یافت شد. جهت افزایش امنیت سیستم نام کاربری و پست الکترونیک را تغییر دهید.',
    ],
    'editor' => [
        'menu_label' => 'تنظیمات ویرایشگر کد',
        'menu_description' => 'سفارشی سازی ویرایشگر کد، مانند اندازه فونت و رنگ بندی آن.',
        'preview' => 'مرور',
        'font_size' => 'اندازه فونت',
        'tab_size' => 'اندازه کاراکتر TAB',
        'use_hard_tabs' => 'فاصله گذاری با استفاده از TAB',
        'code_folding' => 'بلاک بندی کدها',
        'code_folding_begin' => 'ابتدای علامت گذاری',
        'code_folding_begin_end' => 'ابتدا و انتهای علامت گذاری',
        'autocompletion' => 'تکمیل خودکار',
        'word_wrap' => 'چیدمان کلمات',
        'highlight_active_line' => 'مشخص نودن خط فعال',
        'auto_closing' => 'نشانه ها و کاراکترهای خاص بصورت خودکار بسته شوند',
        'show_invisibles' => 'نمایش کاراکتر های مخفی',
        'show_gutter' => 'نمایش نشانگر',
        'basic_autocompletion'=> 'تکمیل خودکار عمومی (Ctrl + Space)',
        'live_autocompletion'=> 'تکمیل خودکار زنده',
        'enable_snippets'=> 'فعال سازی قطعه کد ها (Tab)',
        'display_indent_guides'=> 'نمایش راهنمای تو رفتگی',
        'show_print_margin'=> 'نمایش حاشیه چاپ',
        'mode_off' => 'خاموش',
        'mode_fluid' => 'سیال',
        '40_characters' => '40 کاراکتر',
        '80_characters' => '80 کاراکتر',
        'theme' => 'رنگ بندی',
        'markup_styles' => 'سبک نشانه گذاری',
        'custom_styles' => 'شیوه نامه های سفارشی',
        'custom_styles_comment' => 'شیوه نامه های سفارشی جهت وارد کردن در ویرایش گر HTML.',
        'markup_classes' => 'کلاس های نشانه گذاری',
        'paragraph' => 'پاراگراف',
        'link' => 'لینک',
        'table' => 'جدول',
        'table_cell' => 'سلول جدول',
        'image' => 'تصویر',
        'label' => 'برچسب',
        'class_name' => 'نام کلاس',
        'markup_tags' => 'تگ های نشانه گذاری',
        'markup_tag' => 'Markup Tag',
        'allowed_empty_tags' => 'اجاره استفاده از تگ های خالی',
        'allowed_empty_tags_comment' => 'لیست تگ های ای که در صورت خالی بودن حذف نشوند.',
        'allowed_tags' => 'تگ های مجاز',
        'allowed_tags_comment' => 'لیست تگ های مجاز',
        'allowed_attributes' => 'ویژگی های مجاز',
        'allowed_attributes_comment' => 'لیست ویژگی های مجاز',
        'no_wrap' => 'تگ های بدون دربرگیرنده',
        'no_wrap_comment' => 'لیست تگ هایی که درون تک بلاک قرار نمیگیرند',
        'remove_tags' => 'تگ های غیر مجاز',
        'remove_tags_comment' => 'تگ هایی که در صورت وارد شدن در ویرایش گر با محتوی خود حذف می شوند',
        'line_breaker_tags' => 'تگ های جداکننده خط',
        'line_breaker_tags_comment' => 'لیستی از تگ هایی  که جهت قراردادن خطوط حائل بین عناصر استفاده می شود..',
        'toolbar_options' => 'گزینه های جعبه ابزار',
        'toolbar_buttons' => 'دکمه های جعبه ابزار',
        'toolbar_buttons_comment' => 'دکمه های پیشفرض جهت نمایش در ویرایشگر.',
        'toolbar_buttons_preset' => 'پیکربندی دکمه از پیش تعیین شده نوار ابزار را وارد کنید:',
        'toolbar_buttons_presets' => [
            'default' => 'پیش فرض',
            'minimal' => 'کمینه',
            'full' => 'کامل',
        ],
        'paragraph_formats' => 'قالب های پاراگراف',
        'paragraph_formats_comment' => 'گزینه هایی که در قالب های پاراگراف دیده می شود',
    ],
    'tooltips' => [
        'preview_website' => 'پیش نمایش وب سایت'
    ],
    'mysettings' => [
        'menu_label' => 'تنظیمات من',
        'menu_description' => 'تنظیمات مربوط به حساب کاربری شما',
    ],
    'myaccount' => [
        'menu_label' => 'حساب کاربری من',
        'menu_description' => 'به روز رسانی اطلاعات حساب کار بری شما مانند نام و کلمه عبور و ... .',
        'menu_keywords' => 'ورود امن'
    ],
    'branding' => [
        'menu_label' => 'شخصی سازی بخش مدیریت',
        'menu_description' => 'شخصی سازی بخش مدیریت مانند نام، رنگ ها  و لوگو.',
        'brand' => 'برند',
        'logo' => 'لوگو',
        'logo_description' => 'لوگوی شخصی سازی شده خود را جهت استفاده در بخش مدیریت ارسال نمایید.',
        'favicon' => 'Favicon',
        'favicon_description' => 'یک favicon دلخواه بارگذاری کنید تا در back-end استفاده شود',
        'app_name' => 'نام برنامه',
        'app_name_description' => 'این نام در بخش عنوان قسمت مدیریت نمایش داده می شود.',
        'app_tagline' => 'شعار برنامه',
        'app_tagline_description' => 'این شعار در قسمت ورود به بخش مدیریت نمایش داده می شود.',
        'colors' => 'رنگ ها',
        'branding_colors' => 'رنگ های برندسازی',
        'branding_colors_comment' => 'این رنگ ها جهت یکسان سازی رنگ برند شما در بخش مدیریت استفاده می شوند',
        'default_colors' => 'رنگ های پیش فرض',
        'default_colors_comment' => 'این رنگ‌ها به‌عنوان نمونه در همه انتخاب‌کننده های رنگ در دسترس خواهند بود، مگر اینکه لغو شوند.',
        'add_default_color' => 'افزودن یک رنگ پیش فرض',
        'primary_color' => 'اصلی color',
        'secondary_color' => 'ثانویه color',
        'accent_color' => 'رنگ مهم',
        'styles' => 'شیوه نامه ها',
        'custom_stylesheet' => 'شیوه نامه های سفارشی',
        'navigation' => 'ناو بری',
        'menu_mode' => 'سبک منو',
        'menu_mode_inline' => 'آیکون در کنار',
        'menu_mode_inline_no_icons' => '(بدون آیکون) در کنار',
        'menu_mode_tile' => 'آیکون در بالا',
        'menu_mode_collapsed' => 'جمع شونده'
    ],
    'backend_preferences' => [
        'menu_label' => 'تنظیمات مدیریت',
        'menu_description' => 'تنظیمات مربوط به زبان مربوط به قسمت مدیریت.',
        'region' => 'بخش',
        'code_editor' => 'ویرایشگر کد',
        'timezone' => 'منطقه زمانی',
        'timezone_comment' => 'تنطیم نمایش تاریخ زمانی در این محدوده',
        'locale' => 'زبان',
        'locale_comment' => 'زبان مورد نظر خود را انتخاب نمایید.',
    ],
    'access_log' => [
        'hint' => 'این لیست نشاندهنده ورود کاربران مدیر به سیستم می باشد. موارد برای مدت :days روز نگهداری می شوند.',
        'menu_label' => 'ثبت دسترسی ها',
        'menu_description' => 'نمایش لیست ورود موفقیت آمیز کاربران مدیر.',
        'id' => 'ID',
        'created_at' => 'زمان و تاریخ',
        'type' => 'نوع',
        'login' => 'ورود',
        'ip_address' => 'نشانی IP',
        'first_name' => 'نام',
        'last_name' => 'نام خانوادگی',
        'email' => 'پست الکترونیکی',
    ],
    'filter' => [
        'all' => 'همه',
        'options_method_not_exists' => "مدل :model باید شامل متدی به نام :method() باشد که گزینه های ':filter' را بازگرداند.",
        'date_all' => 'تمام دوره های زمانی',
        'number_all' => 'همه شماره ها',
    ],
    'import_export' => [
        'upload_csv_file' => '1. ارسال فایل CSV.',
        'import_file' => 'درورن ریزی فایل',
        'row' => 'سطر :row',
        'first_row_contains_titles' => 'سطر اول شامل عنوان ستون ها می باشد',
        'first_row_contains_titles_desc' => 'اگر سطر اول فایل CSV حاوی عنوان ستون ها می باشد این گزینه را انتخاب نمایید.',
        'match_columns' => '2. مطابقت  سازی ستون های فایل با فیلد های پایگاه داده',
        'file_columns' => 'ستون های فایل',
        'database_fields' => 'فیلد های پایگاه داده',
        'set_import_options' => '3. تنظیم گزینه های درون ریزی',
        'export_output_format' => '1. قالب خروجی برون ریزی',
        'file_format' => 'نوع فایل',
        'standard_format' => 'قالب استاندارد',
        'custom_format' => 'قالب سفارشی',
        'delimiter_char' => 'کاراکار جدا کننده',
        'enclosure_char' => 'کاراکتر Enclosure',
        'escape_char' => 'کاراکتر Escape',
        'select_columns' => '2. انتخاب ستون ها جهت برون ریزی',
        'column' => 'ستون',
        'columns' => 'ستون ها',
        'set_export_options' => '3. تنظیم گزینه های برون ریزی',
        'show_ignored_columns' => 'نمایش ستون های نادیده گرفته شده',
        'auto_match_columns' => 'مطابقت خودکار ستون ها',
        'created' => 'ایجاد شده',
        'updated' => 'به روز رسانی شده',
        'skipped' => 'نادیده گرفته شده',
        'warnings' => 'هشدار ها',
        'errors' => 'خطاها',
        'skipped_rows' => 'سطر های نادیده گرفته شده',
        'import_progress' => 'پردازش درون ریزی',
        'processing' => 'در حال پردازش',
        'import_error' => 'خطا در درون ریزی',
        'upload_valid_csv' => 'لطفا فایل CSV معتبری را ارسال نمایید',
        'drop_column_here' => 'ستون را این جا بکشید...',
        'ignore_this_column' => 'این ستون را نادیده بگیر',
        'processing_successful_line1' => 'عملیات برون ریزی فایل با موفقیت انجام شد',
        'processing_successful_line2' => 'مرورگر به صورت خودکار به نشانی دانلود فایل هدایت خواهد شد. ',
        'export_progress' => 'پردازش برون ریزی',
        'export_error' => 'خطا در ایجاد خروجی',
        'column_preview' => 'پیش نمایش ستون',
        'file_not_found_error' => 'فایل یافت نشد',
        'empty_error' => 'داده ای جهت ایجاد خروجی وجود ندارد',
        'empty_import_columns_error' => 'لطفا نام ستون جهت درون ریزی را انتخاب نمایید.',
        'match_some_column_error' => 'لطفا ستون ها را مطابقت دهید',
        'required_match_column_error' => 'لطفا موردی را جهت :label که مورد نیاز می باشد را مطابقت دهید.',
        'empty_export_columns_error' => 'لطفا ستون هایی را که میخواهید در فایل برون ریزی استفاده شوند را انتخاب نمایید.',
        'behavior_missing_uselist_error' => 'حهت برون ریزی باید کنترلر از  ListController در لیست کنترل کننده ها استفاده نماید.',
        'missing_model_class_error' => 'لطفا کلاس مدل  :type را مشخص نمایید.',
        'missing_column_id_error' => 'مشخصه ستون یافت نشد',
        'unknown_column_error' => 'ستون نا مشخص',
        'encoding_not_supported_error' => 'نوع کدینگ فایل منبع قابل شناسایی نمی باشد. لطفا جهت درون ریزی نوع انکدینگ فایل را انتخاب نمایید.',
        'encoding_format' => 'کدینگ فایل',
        'encodings' => [
            'utf_8' => 'UTF-8',
            'us_ascii' => 'US-ASCII',
            'iso_8859_1' => 'ISO-8859-1 (Latin-1, Western European)',
            'iso_8859_2' => 'ISO-8859-2 (Latin-2, Central European)',
            'iso_8859_3' => 'ISO-8859-3 (Latin-3, South European)',
            'iso_8859_4' => 'ISO-8859-4 (Latin-4, North European)',
            'iso_8859_5' => 'ISO-8859-5 (Latin, Cyrillic)',
            'iso_8859_6' => 'ISO-8859-6 (Latin, Arabic)',
            'iso_8859_7' => 'ISO-8859-7 (Latin, Greek)',
            'iso_8859_8' => 'ISO-8859-8 (Latin, Hebrew)',
            'iso_8859_9' => 'ISO-8859-9 (Latin-5, Turkish)',
            'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordic)',
            'iso_8859_11' => 'ISO-8859-11 (Latin, Thai)',
            'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltic Rim)',
            'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtic)',
            'iso_8859_15' => 'ISO-8859-15 (Latin-9, Western European revision with euro sign)',
            'windows_1250' => 'Windows-1250 (CP1250, Central and Eastern European)',
            'windows_1251' => 'Windows-1251 (CP1251)',
            'windows_1252' => 'Windows-1252 (CP1252)'
        ]
    ],
    'permissions' => [
        'manage_media' => 'مدیریت چند رسانه ها',
        'allow_unsafe_markdown' => 'از مارک داون نامعتبر استفاده کنید(شامل javascript شود(',
        'no_image' => 'تصویر یافت نشد.',
    ],
    'mediafinder' => [
        'label' => 'جستجوگر رسانه',
        'default_prompt' => '%s را جهت انتخاب فایل چند رسانه ای انتخاب کنید'
    ],
    'media' => [
        'menu_label' => 'چند رسانه ای',
        'upload' => 'ارسال',
        'move' => 'جابجایی',
        'delete' => 'حذف',
        'add_folder' => 'پوشه جدید',
        'search' => 'جستجو',
        'display' => 'نمایش',
        'filter_everything' => 'همه',
        'filter_images' => 'تصاویر',
        'filter_video' => 'ویدیو',
        'filter_audio' => 'صوتی',
        'filter_documents' => 'اسناد',
        'library' => 'کتاب خانه',
        'size' => 'اندازه',
        'title' => 'عنوان',
        'last_modified' => 'آخرین تغییرات',
        'public_url' => 'نشانی عمومی',
        'click_here' => 'اینجا کلیک کنید',
        'thumbnail_error' => 'خطا در ایجاد تصویر بند انگشتی',
        'return_to_parent' => 'بازگشت به پوشه قبل',
        'return_to_parent_label' => 'بازگشت ..',
        'nothing_selected' => 'چیزی انتخاب نشده است.',
        'multiple_selected' => 'چند مورد انتخاب شده است.',
        'uploading_file_num' => 'ارسال :number فایل(ها)...',
        'uploading_complete' => 'ارسال انجام شد',
        'uploading_error' => 'خطا در ارسال',
        'type_blocked' => 'نوع فایل استفاده شده به دلیل مسائل امنیتی مجاز نمی باشد..',
        'order_by' => 'مرتب سازی با',
        'direction' => 'جهت',
        'direction_asc' => 'صعودی',
        'direction_desc' => 'نزولی',
        'folder' => 'پوشه',
        'no_files_found' => 'فایلی با درخواست شما یافت نشد',
        'delete_empty' => 'لطفا موارد را جهت حذف انتخاب نمایید',
        'delete_confirm' => 'آیا از حذف مورد(های) انتخاب شده اطمینان دارید؟',
        'error_renaming_file' => 'خطا در تغییر نام.',
        'new_folder_title' => 'پوشه ی جدید',
        'folder_name' => 'نام پوشه',
        'error_creating_folder' => 'خطا در ایجاد پوشه',
        'folder_or_file_exist' => 'پوشه یا فایلی با نام وارد شده از قبل وجود دارد.',
        'move_empty' => 'لطفا موارد را جهت جابجایی انتخاب نمایید',
        'move_popup_title' => 'جابحایی فایل یا پوشه ها',
        'move_destination' => 'پوشه مقصد',
        'please_select_move_dest' => 'لطفا پوشه مقصد را انتخاب نمائید.',
        'move_dest_src_match' => 'لطفا پوشه دیگری را انتخاب نمایید.',
        'empty_library' => 'اینجا کمی خالی به نظر می رسد. برای شروع فایل هایتان را بارگذاری کنید یا پوشه ای بسازید.',
        'insert' => 'قرار دادن',
        'crop_and_insert' => 'بریدن و افزودن',
        'select_single_image' => 'لطفا یک تصویر انتخاب نمایید',
        'selection_not_image' => 'مورد انتخاب شده تصویر نمی باشد',
        'restore' => 'حذف همه تغییرات',
        'resize' => 'تغییر اندازه...',
        'selection_mode_normal' => 'معمولی',
        'selection_mode_fixed_ratio' => 'نسبت ثابت',
        'selection_mode_fixed_size' => 'اندازه ثابت',
        'height' => 'ارتفاع',
        'width' => 'عرض',
        'selection_mode' => 'حالت انتخابی',
        'resize_image' => 'تغییر اندازه تصویر',
        'image_size' => 'اندازه تصویر:',
        'selected_size' => 'انتخاب شده:',
        'rename_popup_title' => 'تغییر نام',
        'rename_new_name' => 'نام جدید',
        'move_please_select' => 'لطفا انتخاب نمایید',
        'move_button' => 'جابجایی',
    ],
];
