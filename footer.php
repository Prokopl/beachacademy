		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<div class="copyright text-dark p-2 text-center">
          &copy; 2020 - <?php echo date('Y'); ?> <a href="http://beachacademy.cz">BAVB</a>&nbsp;&nbsp;|&nbsp;&nbsp;Vytvořil <a href="http://prokopl.cz">Lukáš Prokop</a>
        </div>

 		<script>
		  $('#page .collapse').on('show.bs.collapse', function(e) {
		  var $card = $(this).closest('.card');
		  var $open = $($(this).data('parent')).find('.collapse.show');

		  var additionalOffset = 0;
		  if($card.prevAll().filter($open.closest('.card')).length !== 0)
		  {
				additionalOffset =  $open.height();
		  }
		  $('html,body').animate({
			scrollTop: $card.offset().top - additionalOffset - 90
		  }, 500);
});
		</script>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
