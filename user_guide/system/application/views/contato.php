<div id="form-contato">
<?php
echo validation_errors();
echo form_open(base_url().'contato/enviar');
    echo form_fieldset("fale conosco");
    echo form_label('informe seu nome','nome');
    echo form_input('nome',set_value('nome'));
    echo form_label('informe seu e-mail','email');
    echo form_input('email',set_value('email'));
    echo form_label('mensagem','mensagem');
    echo form_textarea('mensagem',set_value('mensagem'));
    echo form_submit('enviar',"Enviar");
    echo form_reset('cancelar',"Cancelar");
    echo form_fieldset_close();
echo form_close();    
    
?>
</div>