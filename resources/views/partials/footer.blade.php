<footer class="footer border-top">
    <div class="container">
        <p>&copy; 2025 Linux & Open Source Lovers Community. Tous droits réservés.</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@if (request()->routeIs('home'))
    <script>
        let typed = new Typed('#typed-text', {
            strings: [
                "Linux & Open Source Lovers Community",
                "Participez à nos tournois !",
                "Dev ou CyberSec, à vous de choisir."
            ],
            typeSpeed: 100,
            backSpeed: 50,
            backDelay: 1300,
            loop: true,
            cursorChar: '|',
            cursorBlinking: true
        });
    </script>
@endif
