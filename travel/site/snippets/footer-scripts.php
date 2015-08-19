		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <?php echo js(array(
            'assets/js/s.min.js',
            'assets/js/jquary.fittext.min.js'
        )) ?>
		<script>
			//jQuery(".inflate").fitText(0.8);
			jQuery(".inflate").fitText(0.8, { minFontSize: '16px', maxFontSize: '288px' });
			// jQuery(".sfo .inflate").fitText(1, { minFontSize: '16px', maxFontSize: '288px' });
			// jQuery(".ams .inflate").fitText(0.9, { minFontSize: '16px', maxFontSize: '288px' });
			// jQuery(".osl .inflate").fitText(0.4, { minFontSize: '16px', maxFontSize: '288px' });
		</script>
	</body>
</html>