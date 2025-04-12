</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.4/sweetalert2.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        <?php if (!empty($loginErr)) : ?>
            Swal.fire({
                icon: 'error',
                title: 'Erreur de connexion',
                text: '<?= $loginErr; ?>',
            });
        <?php endif; ?>
    });
</script>
<!-- <script src="assets/js/validLogin.js"></script> -->


</html>