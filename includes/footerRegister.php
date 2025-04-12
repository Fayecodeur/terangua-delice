</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.4/sweetalert2.min.js"></script>
<script>
    <?php if (isset($_SESSION['show_success_alert']) && $_SESSION['show_success_alert']) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Inscription réussie',
            text: '<?= $_SESSION["success_message"]; ?>'
        }).then(() => {
            <?php unset($_SESSION['success_message'], $_SESSION['show_success_alert']); ?>
            window.location.href = 'connexion.php';
        });
    <?php endif; ?>
</script>
<script src="assets/js/validRegister.js"></script>

</html>