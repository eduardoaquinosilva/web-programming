<!-- Grupo: Eduardo Aquino da Silva, Emilio Nelson Cruzeiros e Lívia de Castro Bezerra -->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta name="author" content="Eduardo Aquino da Silva, Emilio Nelson Cruzeiros e Lívia de Castro Bezerra">
        <title>Index</title>

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <link href="styles/style.css" rel="stylesheet">
        <script src="scripts/functions.js"></script>
    </head>

    <body>
        <main class="container">
            <!-- Left Column / Headphones Image -->
            <div class="left-column">
              <img id="headphone" class="active" src="images/red.png" alt="">
            </div>
      
            <!-- Right Column -->
            <div class="right-column">
                <!-- Product Description -->
                <div class="product-description">
                    <span>Headphones</span>
                    <h1>Beats EP</h1>
                    <p>O fone de ouvido supra-auricular Beats EP oferece som da mais alta qualidade. Seu design sem bateria oferece reprodução ilimitada. E sua estrutura elegante e resistente é reforçada com aço inoxidável leve.</p>
                </div>
      
                <!-- Product Configuration -->
                <div class="product-configuration">        
                    <!-- Product Color -->
                    <div class="product-color">
                        <span>Cor</span>
            
                        <div class="color-choose">
                            <div>
                                <input onclick="cor('images/red.png')" data-image="red" type="radio" id="red" name="color" value="red">
                                <label for="red"><span></span></label>
                            </div>
                            <div>
                                <input onclick="cor('images/blue.png')" data-image="blue" type="radio" id="blue" name="color" value="blue">
                                <label for="blue"><span></span></label>
                            </div>
                            <div>
                                <input onclick="cor('images/black.png')" data-image="black" type="radio" id="black" name="color" value="black">
                                <label for="black"><span></span></label>
                            </div>
                        </div>
                    </div>
      
                    <!-- Cable Configuration -->
                    <div class="cable-config">
                        <span>Comprimento do cabo</span>
            
                        <div class="cable-choose">
                            <button onclick="cabo(1)">1m</button>
                            <button onclick="cabo(2)">2m</button>
                            <button onclick="cabo(3)">3m</button>
                        </div>
                    </div>
                </div>
      
                <!-- Product Pricing -->
                <div class="product-price">
                    <span>R$</span><span id="valorFinal">0</span>
                    <a href="javascript:getQR()" class="cart-btn">Gerar QRCode</a>
                    <div id="qrcode"></div>
                </div>
            </div>
        </main>
    </body>
</html>
