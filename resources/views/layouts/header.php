<?php require_once __DIR__ . '/head.php'; ?>

<body>
    <div class="header-and-footer-container">
        <header>
            <div class="header-logo">
                <!-- <img src="" alt=""> -->
                <h3>Logo</h3>
            </div>
            <div>
                <button><a href="http://"> menu</a></button>
            </div>
            <div>
                <span onclick="openHeaderMenu()" class="header-mobile-menu-button" style="font-size: 24px; cursor: pointer;">&#9776;</span>
            </div>
        </header>
        <?php include __DIR__ . '/navbar.php' ?>
    </div>

    <script>
        function openHeaderMenu() {
            document.querySelector("nav").classList.toggle('show');
        }
    </script>