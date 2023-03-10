// Algumas variáveis úteis. Pode modificar livremente.
let coresValores = {
    'images/red.png': 0,
    'images/blue.png': 10,
    'images/black.png': 20
}

let cabosValores = {
    1: 0,
    2: 15,
    3: 25
}

let valorBase = 700
let corEscolhida = 'images/red.png'
let tamanhoCaboEscolhido = 1
let valorFinal = 0

function cor(cor) {
    // Modifica o atributo src da imagem #headphone
    // Atribui o valor adicional da cor.
    // Vermelho: 0
    // Azul: 10
    // Preto: 20
    // Atualiza o valor do produto

    jQuery('#headphone').attr('src', cor)
    corEscolhida = cor
    valorFinal = valorBase + coresValores[corEscolhida] + cabosValores[tamanhoCaboEscolhido]
    jQuery('#valorFinal').text(valorFinal)
}

function cabo(comprimento) {
    // Atribui o valor adicional do tamanho do cabo.
    // 1m: 0
    // 2m: 15
    // 3m: 25
    // Atualiza o valor do produto

    tamanhoCaboEscolhido = comprimento
    valorFinal = valorBase + coresValores[corEscolhida] + cabosValores[tamanhoCaboEscolhido]
    jQuery('#valorFinal').text(valorFinal)
}

// Essa é uma possibilidade de usar a função getQR. Pode modificar livremente.
function getQR() {
    jQuery.post('getQR.php',{pFinal: valorFinal}, function(data) {
        jQuery('#qrcode').html(data)
    })
}
