<!-- Footer -->
  <footer id="footer">
    <div class="inner">

      <h2>Stuur een berichtje</h2>

      <form action="#" method="post">

        <div class="field half first">
          <label for="name">Naam</label>
          <input name="name" id="name" type="text" placeholder="">
        </div>
        <div class="field half">
          <label for="email">Email</label>
          <input name="email" id="email" type="email" placeholder="">
        </div>
        <div class="field">
          <label for="message">Bericht</label>
          <textarea name="message" id="message" rows="6" placeholder=""></textarea>
        </div>
        <ul class="actions">
          <li><input value="Verstuur" class="button alt" type="submit"></li>
        </ul>
      </form>

      <?php include( get_template_directory() . '/includes/social.php' ); ?>

      <div class="copyright">
        <?php echo date('Y'); ?> &copy; HOMSK
      </div>

    </div>
    <a href="#banner" id="return-to-top" class="scrolly"><i class="fa fa-chevron-up"></i></a>

    <?php wp_footer(); ?>
  </footer>

</body>
</html>
