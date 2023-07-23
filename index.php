<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Wedding of Asi Kurniasi & Lukman</title>

    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rouge+Script&family=Work+Sans:wght@100;400;600;700&display=swap" rel="stylesheet">

    <!-- Countdown CSS -->
    <link rel="stylesheet" href="assets/css/simplyCountdown.theme.default.css?v=">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/index.css?v=">
</head>
<body>
    <section id="hero" class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
        <main>
            <h4>Kepada Bapak/Ibu/Saudara/i, </h4>

            <h1>Asi Kurniasi & Lukman</h1>
            <p>Tanpa mengurangi rasa hormat, kami bermaksud mengundang Anda untuk menghadiri acara pernikahan kami.</p>
            <p>Yang akan melakukan resepsi pernikahan dalam :</p>

            <div class="simply-countdown">

            </div>

            <a href="#undangan" class="btn btn-lg mt-4">Lihat Undangan</a>
        </main>
    </section>

    <section>
        <h1>Hello World</h1>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    <!-- Countdown JS -->
    <script src="assets/js/simplyCountdown.min.js"></script>

    <script>
        simplyCountdown('.simply-countdown', {
            year: 2023, // required
            month: 10, // required
            day: 15, // required
            hours: 9, // Default is 0 [0-23] integer
            minutes: 0, // Default is 0 [0-59] integer
            words: { //words displayed into the countdown
                days: { singular: 'Hari', plural: 'Hari' },
                hours: { singular: 'Jam', plural: 'Jam' },
                minutes: { singular: 'Menit', plural: 'Menit' },
                seconds: { singular: 'Detik', plural: 'Detik' }
            }
        });
    </script>
</body>
</html>