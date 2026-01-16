  </main>
  <footer class="bg-light py-4 border-top">
    <div class="container-fluid text-center small text-muted">
      <p>&copy; <?php echo date('Y'); ?> St. Mark Lutheran Church — All rights reserved. — <a href= "<?php echo $base; ?>?page=contact">Contact Us</a></p>
      <p>3307 State St, Eau Claire, WI 54701 • Phone: (715) 834-5782 • EMAIL: <a href="mailto:INFO@STMARK-WELS.ORG">INFO@STMARK-WELS.ORG</a></p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="" crossorigin="anonymous"></script>
  <script src="<?php echo isset($base) ? $base : (rtrim(dirname($_SERVER['PHP_SELF']), '/\\') ?: '/') . '/'; ?>assets/js/main.js"></script>
</body>
</html>
