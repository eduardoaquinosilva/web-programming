jQuery(function() {
	jQuery('#card-text').toggle();

	jQuery('#show').click(function() {
		jQuery('#card-text').toggle();
	})

	jQuery('#try').click(function() {
		jQuery('#card-text').hide();
		
		var answer = prompt();
		var cardId = jQuery('img').attr('id');
		console.log(answer, cardId);
		
		jQuery.post('try.php', {id: cardId, term: answer}, function(data) {
			console.log(data);
			if (data > 0) {
				jQuery.playSound('sounds/correct.mp3');
				jQuery('#card-text').show();
			} else jQuery.playSound('sounds/error.mp3');
		})
	})

	jQuery('#next').click(function() {
		jQuery('#card-text').hide();

		var cardId = jQuery('img').attr('id');
		
		jQuery.post('next.php', {id: cardId}, function(data) {
			var nextCard = JSON.parse(data);
			jQuery('img').attr('src', 'cards/' + nextCard['img']);
			jQuery('img').attr('id', nextCard['id']);
			jQuery('#card-text').html(nextCard['term']);
		})
	})
})
