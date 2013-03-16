<div id='form-cadastro'>
<?php 
	echo validation_errors();

	echo form_open(base_url().'administracao/categorias/gravar_alteracao');
	
	echo form_fieldset("Alterar Categoria");
		
		echo form_hidden('id',$dados_categoria[0]->id);
		
		echo form_label('Nome da Categoria','nome');	
		echo form_input('nome',$dados_categoria[0]->nome);
		
		echo form_label('Descri&ccedil;&atilde;o da Categoria','descricao');
		echo form_textarea('descricao',$dados_categoria[0]->descricao);
		
		echo form_submit('mysubmit', 'Salvar');
		echo form_reset('myreset', 'Cancelar');
		
	echo form_fieldset_close();
	
	echo form_close();
?>
</div>