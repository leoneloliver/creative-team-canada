<div id='form-cadastro'>
	<?php
		echo validation_errors();	
		echo form_open_multipart(base_url().'administracao/produtos/gravar_alteracao');		
		echo form_fieldset("Adicionar Produtos");			
			echo form_hidden('id',$dados_produto[0]->id);		
			echo form_label('Categoria','categoria');	
				
			foreach($categorias as $categoria):
				$drop[$categoria->id] = $categoria->nome;
			endforeach;
			
			$selecionado = $dados_produto[0]->categoria;			
			echo form_dropdown('categoria',$drop,$selecionado);			
		
			echo form_label('Nome do Produto','nome');	
			echo form_input('nome',$dados_produto[0]->nome);
			
			echo form_label('Foto do produto','userfile');	
			echo form_upload('userfile','BUSCAR');
			if($dados_produto[0]->foto<>""){
				echo img("imgs/".$dados_produto[0]->foto);
			}
			
			// foto 2 atualizar --//
			echo form_label('Foto do produto','userfile2');	
			echo form_upload('userfile2','BUSCAR');
			if($dados_produto[0]->foto2<>""){
				echo img("imgs/".$dados_produto[0]->foto2);
			}
			// ------ //
	
			echo form_label('Pre&ccedil;o do produto','preco');	
			echo form_input('preco',decimal_to_reaisbr($dados_produto[0]->preco));
			
			echo form_label('Descri&ccedil;&atilde;o do Produto','descricao');
			echo form_textarea('descricao',$dados_produto[0]->descricao);
			
			echo form_submit('mysubmit', 'Alterar');
			echo form_reset('myreset', 'Cancelar');
			
		echo form_fieldset_close();		
		echo form_close();
	?>
</div>
<div id='lista-produtos'>
	<?php 
		foreach($produtos as $produto):
		
			echo anchor("./administracao/produtos/excluir/".$produto->id, "[X]","onclick=\"return confirm('Confirma a exclusão deste produto?')\"");
			echo " - ";
			echo anchor("./administracao/produtos/alterar/".$produto->id, $produto->nome);
			echo br(1);
		endforeach;
	?>
</div>