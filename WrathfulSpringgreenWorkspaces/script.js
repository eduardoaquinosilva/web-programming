face = [['R', 'G', 'Y'], ['W', 'R', 'O'], ['Y', 'W', 'Q']]
document.write(face[0][2])

n = '838102050'
document.write('n = ' + n + ', é uma ' + typeof n + '<br/>')
n = 12345 * 67890
document.write('n = ' + n + ', é uma ' + typeof n + '<br/>')
n += ' plus some text'
document.write('n = ' + n + ', é uma ' + typeof n + '<br/>')

url = document.links.linkb.href
document.write('URL: ' + url)

function $(id) {
  return document.getElementById(id)
}

url= $('linkb').href
document.write('URL: ' + url)

document.location.href = 'https://google.com'

function bomDia() {
	let msg = document.getElementById('message')
	msg.innerHTML = 'Bom dia!'
}

function $(id) {
	return document.getElementById(id)
}

function generateEmail(form) {
	$('email').innerHTML = form.elements['first'].value + '.' + form.elements['last'].value + '@uni.edu.br'
	form.reset()
	form.elements['first'].focus()
}

alert('Cuidado!')
let termos = confirm('Leu os termos do contrato?')
let nome = prompt('Qual o seu nome?', 'Seu nome')

jQuery('code').css('border', '1px solid #aaa')

jQuery('blackquote').css('background', 'lime')
jQuery('#aviso').css('border', '3px dashed red')
jQuery('.novo').css('text-decoration', 'underline')
jQuery('blackquote, #aviso, .novo').css('font-weight', 'bold')

jQuery('#ok').click(function() {
	jQuery('#result').html('Clique OK!')
})

jQuery('#first').focus()
jQuery('input:eq(2)').focus(function() {
	jQuery(this).css('background', '#ff0')
})
jQuery('input').blur(function() {
	jQuery(this).css('background', '#aaa')
})

jQuery('.myClass').dblclick(function() {
	jQuery(this).slideUp()
})

canvas = jQuery('#pad')[0];
context = canvas.getContext("2d")
pendown = false
jQuery('#pad').mousemove(function(event) {
	let xpos = event.pageX - canvas.offsetLeft
	let ypos = event.pageY - canvas.offsetTop
	if (pendown) context.lineTo(xpos, ypos)
	else context.moveTo(xpos, ypos)
	context.stroke()
})
jQuery('#pad').mousedown(function() { pendown = true })
jQuery('#pad').mouseup(function() { pendown = false })

jQuery('#test').mouseenter(function() {jQuery(this).html('Mouse enter')})
jQuery('#test').mouseout(function() {jQuery(this).html('Aonde vai?')})

jQuery('#test').mouseenter(function() {jQuery('img').attr('src', 'https://bit.ly/3cWOx3n')})
jQuery('#test').mouseout(function() {jQuery(this).html('Aonde vai?')})

jQuery('#form').submit(function() {
	if (jQuery('#fname').val() == '' || jQuery('#lname').val() == '') {
		alert('Insira os dois nomes.')
		return false
	}
})

jQuery('#hide').click(function() {jQuery('#text').toggle('slow', 'linear')})
jQuery('#show').click(function() {jQuery('#text').show('slow', 'linear')})

jQuery('#toggle').click(function() { jQuery('#text').toggle('slow', 'linear') })

jQuery('#fadeout').click(function() { jQuery('#text').fadeOut('slow') })
jQuery('#fadein').click(function() { jQuery('#text').fadeIn('slow') })
jQuery('#fadetoggle').click(function() { jQuery('#text').fadeToggle('slow') })
jQuery('#fadeto').click(function() { jQuery('#text').fadeTo('slow', 0.5) })

jQuery('#hide').click(function() {jQuery('#text').fadeOut('slow')})
jQuery('#show').click(function() {jQuery('#text').fadeIn('slow')})

jQuery('#slideup').click(function() {jQuery('#para').slideUp('slow')})
jQuery('#slidedown').click(function() {jQuery('#para').slideDown('slow')})
jQuery('#slidetoggle').click(function() {jQuery('#para').slideToggle('slow', 'linear')})

bounce()
function bounce() {
	jQuery('#ball')
		.animate({left: '270px', top: '380px'}, 'slow', 'linear')
		.animate({left: '540px', top: '190px'}, 'slow', 'linear')
		.animate({left: '270px', top: '0px'}, 'slow', 'linear')
		.animate({left: '0px', top: '190px'}, 'slow', 'linear')
}

alert($('#intro').html())

jQuery('a').prepend('Link: ')
jQuery("[href^='http']").append(" <img src='https://icons.iconarchive.com/icons/oxygen-icons.org/oxygen/24/Emblems-emblem-symbolic-link-icon.png'>")
jQuery('code').before('<hr>').after('<hr>')
jQuery('#a').click(function() { $('#ball').remove()} )
jQuery('#b').click(function() { $('#quote').empty()} )
