<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Invoice</title>

        <link rel="stylesheet" href="styles/styleNotaFiscal.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">

		<?php
			date_default_timezone_set('America/Sao_Paulo');
		?>
    </head>

    <body>
        <header>
			<h1>Nota Fiscal</h1>
		</header>

		<article>
			<h1>Recipient</h1>
			<table class="meta">
				<tr>
					<th><span >Número</span></th>
					<td><span >1</span></td>
				</tr>
				<tr>
					<th><span >Data</span></th>
					<td><span > <?php print date("j/m/Y"); ?> </span></td>
				</tr>
				<tr>
					<th><span >Grupo</span></th>
					<td><span >Eduardo, Nelson e Lívia de Castro</span></td>
				</tr>
			</table>

			<table class="inventory">
				<thead>
					<tr>
						<th><span >Item</span></th>
						<th><span >Descrição</span></th>
						<th><span >Quantidade</span></th>
						<th><span >Preço</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a class="cut">-</a><span >Beats EP</span></td>
						<td><span >Fone de ouvido</span></td>
						<td><span >1</span></td>
                        <?php
							// Algumas variáveis úteis. Podem modificar livremente.
							extract($_GET);

							// Aqui pode usar dois switches para atribuir os valores da cor e do tamanho
							// de acordo com os valores obtidos via $_GET.
						?>
                        <td><span data-prefix>$</span><span><?php echo $pFinal; ?></span></td>
					</tr>
				</tbody>
			</table>

            <table class="balance">
				<tr>
					<th><span >Total</span></th>
					<td><span data-prefix>R$ &nbsp;</span><span><?php echo $pFinal; ?></span></td>
				</tr>
				<tr>
					<th><span >Total pago</span></th>
					<td><span data-prefix>R$ &nbsp;</span><span ><?php echo $pFinal; ?></span></td>
				</tr>
			</table>
		</article>    
    </body>
</html>
