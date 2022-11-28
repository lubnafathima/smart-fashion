    <!-- footer -->
    <div class="footer" style="background-color: #E4E4E4; margin-top: 5em;">
        <footer class="py-3">
            <ul class="nav justify-content-center pb-3 mb-3">
                <li class="nav-item"><a href="home.php" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="collection.php?collection=men" class="nav-link px-2 text-muted">Men's Fashion</a></li>
                <li class="nav-item"><a href="collection.php?collection=women" class="nav-link px-2 text-muted">Women's Fashion</a></li>
                <li class="nav-item"><a href="collection.php?collection=accessories" class="nav-link px-2 text-muted">Accessories</a></li>
                <li class="nav-item"><a href="lookbook.php" class="nav-link px-2 text-muted">Lookbook</a></li>
                <li class="nav-item"><a href="customer_care.php" class="nav-link px-2 text-muted">Customer Care</a></li>
                <?php if(isset($_SESSION['username'])){ ?>
                <li class="nav-item"><a href="user_profile.php" class="nav-link px-2 text-muted" >Profile</a></li>
                <?php } else { ?>
                <li class="nav-item"><a href="log-in.php" class="nav-link px-2 text-muted" >Profile</a></li>
                <?php } ?>
            </ul>
            <p class="text-center text-muted"><a class="text-success fw-bold text-decoration-none" href="https://github.com/lubnafathima">&copy; SMART FASHION</a></p>
        </footer>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</php>