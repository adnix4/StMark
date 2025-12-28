  </main>
  <footer class="bg-light py-4 border-top">
    <div class="container-fluid text-center small text-muted">
      <p>&copy; <?php echo date('Y'); ?> Grace Church — All rights reserved.</p>
      <p>123 Main St, Your City • Phone: (555) 555-5555</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="" crossorigin="anonymous"></script>
  <script src="<?php echo isset($base) ? $base : (rtrim(dirname($_SERVER['PHP_SELF']), '/\\') ?: '/') . '/'; ?>assets/js/main.js"></script>
</body>
</html>
