<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo e($title); ?> - PHPProject</title>


    <link rel="stylesheet" href="https://cdn.fontcdn.ir/Font/Persian/Vazir/Vazir.css">
    <link rel="stylesheet" href="/assets/main.css" />
    <link rel="stylesheet" href="/assets/rtl.css">
</head>

<body class="bg-indigo-50 font-[Vazir]">

    <header class="bg-indigo-900">
        <nav class="mx-auto flex container items-center justify-between py-4 flex-row-reverse" aria-label="Global">
            <a href="/" class="-m-1.5 p-1.5 text-white text-2xl font-bold"> PHPProject </a>

            <div class="flex lg:gap-x-10">
                <a href="/about" class="text-gray-300 hover:text-white transition">درباره ما</a>
                <?php if (isset($_SESSION['user'])) : ?>
                    <a href="/logout" class="text-gray-300 hover:text-white transition">خروج</a>
                <?php else : ?>
                    <a href="/login" class="text-gray-300 hover:text-white transition">ورود</a>
                    <a href="/register" class="text-gray-300 hover:text-white transition">ثبت‌نام</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>

</body>

</html>