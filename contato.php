<?php include('header2.php'); ?>
		<div class="container sombra">
			<div class="textpadding">
				<div class="content">
					<div class="fl"><img src="imagens/contato.jpg" alt=""></div>
				</div>

				<div class="content cls">
					<p>
					Por favor preencha as informações abaixo para falar conosco ou submeter as suas dúvidas.
					Obrigado.
					</p>
						<fieldset>
							<form action="">
								<div class="fl">
									<label for="nome">Nome do Contato</label>
									<label for="">Nome da Empresa</label>
									<label for="">Email Contato</label>
									<label for="">Cidade</label>
									<label for="">Estado</label>
									<label for="">Telefone Comercial</label>
									<label for="">Celular</label>
									<label for="">Assunto</label>
									<label for="">Mensagem</label>
								</div>
								<div class="fr formspc">
									<input type="text" autofocus name="nome" required size="60">
									<input type="text" autofocus name="empresa" required size="60">
									<input type="email" autofocus name="email" required size="60">
									<input type="text" autofocus name="cidade" size="25">
									<input type="text" autofocus name="estado" size="25">
									<input autofocus name="tel" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4}" required size="30">
									<input autofocus name="tel" pattern="\([0-9]{2}\)[\s][0-9]{5}-[0-9]{4}" required size="30">
									<input type="text" autofocus name="assunto" required size="60">
									<textarea name="mensagem" id="" cols="45" rows="10"></textarea>
									<a href="#" class="fr"><img src="imagens/btenviar.png" height="29" width="88" alt=""></a>
								</div>

							</form>
						</fieldset>
				</div>
				<div class="content cls textpadding">
					<p>
					Tel.: 21 2512-1879 <br>
					Obrigado por entrar em contato com a Kabel Weg Engenharia (KWE) <br>
					Sua informação será sempre guardada com privacidade e nunca compartilhada com terceiros.
					</p>
				</div>
			</div>
		</div>

		<div id="footer" class="bgfooter">
		<?php include('footer2.php'); ?>
		</div>
    </body>
</html>