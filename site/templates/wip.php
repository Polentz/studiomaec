<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <meta name="description" content="<?= $site->description() ?>">
    <link rel="canonical" href="<?= $page->url() ?>">
    <meta name="keywords" content="<?= $site->keywords() ?>">
    <meta property="og:locale" content="en">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $site->title() ?>">
    <meta property="og:description" content="<?= $site->description() ?>">
    <meta property="og:url" content="<?= $page->url() ?>">
    <meta property="og:site_name" content="<?= $site->title() ?>">
    <?php if ($ogImage = $site->ogImage()->toFile()) : ?>
        <meta property="og:image" content="<?= $ogImage->url() ?>">
    <?php endif ?>
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link href="/assets/favicons/studiomaec-favicon-74.png" rel="icon" type="image/x-icon">
    <link href="/assets/favicons/studiomaec-favicon-74.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://use.typekit.net/lbh6bnf.css">
    <?= css([
        'assets/css/variables.css',
        'assets/css/base.css',
    ]) ?>
</head>

<style>
    :root {
        --doc-height: 100%;
        --bg-color: #e8e8e8;
        --main-color: #001bcb;
        --difference-color: #fcde1e;
        --acc-color: #f49f0a;
        --white: #fff;
        --black: #000;
        --txt-large-size: 8rem;
        --txt-size: 1rem;
    }

    body {
        width: 100%;
        min-height: var(--doc-height);
        color: var(--main-color);
        background-color: var(--bg-color);
        overflow: hidden;
        font-family: "articulat-cf", sans-serif;
    }

    .landing-section {
        width: 100%;
        height: var(--doc-height);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        text-align: center;
    }

    .landing-section h1 {
        width: 100%;
        font-size: var(--txt-large-size);
        font-weight: 400;
        line-height: .95;
        border-bottom: solid .75px var(--main-color);
    }

    .landing-section h2 {
        font-size: var(--txt-size);
        font-weight: 700;
        line-height: 2;
    }

    .footer {
        width: 100%;
        height: auto;
        position: absolute;
        bottom: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: end;
        -ms-flex-align: end;
        align-items: end;
        padding: 1rem 2.5rem;
        font-size: var(--txt-size);
        font-weight: 700;
        line-height: 1.2;
    }

    .footer-block {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        gap: 1rem;
    }

    .footer-wrapper:nth-of-type(2) {
        text-align: center;
    }

    .footer-block h3 {
        font-weight: 400;
    }

    .contac-block {
        text-align: end;
    }

    @media screen and (max-width: 740px) {
        :root {
            --txt-large-size: 3.5rem;
        }

        .landing-section h1 {
            line-height: 1.2;
        }

        .footer {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            padding: 2rem;
            gap: 1rem;
        }

        .footer-wrapper:nth-of-type(2),
        .footer-wrapper,
        .contac-block {
            text-align: start;
        }
    }
</style>

<body>
    <main class="main">
        <section class="landing-section">
            <h1>studio mäc</h1>
            <h2>architecture & territory</h2>
        </section>
    </main>
    <footer class="footer">
        <div class="footer-wrapper">
            <ul class="footer-block">
                <li>
                    <p>studio mäc</p>
                    <p>architecture & territory</p>
                    <p>berlin . paris</p>
                </li>

            </ul>
        </div>
        <div class="footer-wrapper">
            <ul class="footer-block">
                <li>
                    <h3>julia mäckler + augustin clément</h3>
                    <p>our website is under construction</p>
                    <p>we will be online soon</p>
                </li>
            </ul>
        </div>
        <div class="footer-wrapper">
            <ul class="footer-block contac-block">
                <li>
                    <p><a href="https://www.instagram.com/studio_maec_arch/" target="_blank" rel="noopener noreferrer">instagram</a></p>
                    <p><a href="mailto:info@studiomaec.com">info@studiomaec.com</a></p>
                    <p><a href="tel:+491736351024">+ 49 173 635 1024</a></p>
                </li>
            </ul>
        </div>
    </footer>
    <noscript>Please turn on JS to navigate this website</noscript>
    <script>
        const documentHeight = () => {
            const doc = document.documentElement;
            doc.style.setProperty("--doc-height", `${window.innerHeight}px`);
        };

        window.addEventListener("load", () => {
            documentHeight();
        });

        window.addEventListener("resize", () => {
            documentHeight();
        });
    </script>
</body>

</html>