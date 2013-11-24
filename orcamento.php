<?php include('header2.php'); ?>
		<div class="container sombra">
			<div class="textpadding">
				<div class="content">
					<div class="fl"><img src="imagens/orcamento.jpg" alt=""></div>
				</div>

				<div class="content cls">
					<br>
					<p>
					Utilize essa secao para solicitar um orcamento. <br>
					Os campos com * sao obrigatorios.
					</p>
						<form action="">
							<fieldset>
								<h3>Dados do Cliente</h3>
								<div class="fl">
									<label for="nome">Nome Empresa*</label>
									<label for="">CNPJ</label>
									<label for="">Nome do Responsável*</label>
									<label for="">Email Responsável*</label>
									<label for="">Telefone Comercial</label>
									<label for="">Telefone Nextel + ID</label>
									<label for="">ID</label>
									<label for="">WebSite</label>
								</div>
								<div class="fr formspc">
									<input type="text" autofocus name="nome" required size="60">
									<input type="text" autofocus name="empresa" required size="60">
									<input type="email" autofocus name="email" required size="60">
									<input autofocus name="tel" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4}" required size="30">
									<input autofocus name="tel" pattern="\([0-9]{2}\)[\s][0-9]{5}-[0-9]{4}" required size="30">
									<input type="text" autofocus name="cidade" size="30">
									<input type="text" autofocus name="estado" size="30">
									<input type="text" autofocus name="assunto" required size="60">
								</div>
							</fieldset>
							<fieldset>
								<h3>Dados do local onde o serviço será prestado</h3>
								<div class="fl">
									<label for="">Endereço</label>
									<label for="">Bairro</label>
									<label for="">Cidade</label>
									<label for="">Estado</label>
								</div>
								<div class="fr formspc">
									<input type="text" autofocus name="nome" required size="60">
									<input type="text" autofocus name="cidade" size="60">
									<input type="text" autofocus name="estado" size="25">
									<input type="text" autofocus name="assunto" required size="25">
								</div>
							</fieldset>
							<fieldset>
								<h3>Dados sobre o serviço</h3>
								<div class="fl">
									<label for="">Selecione tipo de serviço</label>
									<label for="">Especialidade</label>
								</div>
								<div class="fr formspc">
									<select name="tipo_serviço" id="">
										<option value=""></option>
										<option value="">--------------</option>
									</select>
									<select name="tipo_serviço" id="">
										<option value=""></option>
										<option value="">--------------</option>
									</select>
								</div>
							</fieldset>
							<fieldset>
								<h3>Utilize o espaço abaixo para descrever os detalhes do orçamento solicitado</h3>
								<div class="fl">
									<label for="">Mensagem</label>
								</div>
								<div class="fr formspc">
									<textarea name="mensagem" id="" cols="45" rows="5"></textarea>
									<a href="#" class="fr"><img src="imagens/btenviar.png" height="29" width="88" alt=""></a>
								</div>
							</fieldset>
						</form>
				</div>
			</div>
		</div>

		<div id="footer" class="bgfooter">
		<?php include('footer2.php'); ?>
		</div>
    </body>
</html>