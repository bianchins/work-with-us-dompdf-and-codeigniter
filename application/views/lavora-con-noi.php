<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Lavora con Noi | Acme SPA</title>

<script language="Javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<style type="text/css">
    form{margin:0;padding:0;}
    fieldset{margin:1em 0;border:none;border-top:1px solid #ccc;}
    hr {margin:1em 0;border:none;border-top:1px solid #ccc;}
    legend{margin:1em 0;padding:0 .5em;color:#036;background:transparent;font-size:1.3em;font-weight:bold;}
    label{float:left;width:300px;padding:0 1em;text-align:right;}
    fieldset div{margin-bottom:.5em;padding:0;display:block;}
    /*fieldset div input,fieldset div textarea{width:150px;border-top:1px solid #555;border-left:1px solid #555;border-bottom:1px solid #ccc;border-right:1px solid #ccc;padding:1px;color:#333;}*/
    fieldset div select{padding:1px;}
    div.fm-multi div{margin:5px 0;}
    div.fm-multi input{width:1em;}
    div.fm-multi label{display:block;width:200px;padding-left:5em;text-align:left;}
    #fm-submit{clear:both;padding-top:1em;text-align:center;}
    #fm-submit input{border:1px solid #333;padding:2px 1em;background:#555;color:#fff;font-size:100%;}
    /*input:focus,textarea:focus{background:#efefef;color:#000;}*/
    fieldset div.fm-req{font-weight:bold;}
    fieldset div.fm-req label:before{content:"* ";}
    body{padding:0;margin:20px;color:#333;background:#fff;font:12px arial,verdana,sans-serif;}
    #container{margin:0;padding:0;width:720px;text-align:left;}
    p#fm-intro{margin:0;}
    .Stile5 {
	color: #FFFFFF;
	font-size: 28px;
    }
</style>
</head>

<body style="background-color: #49908A; color: #fff; font-family:Arial;">
<script language="Javascript">
     $(document).ready(function(){
       $("#form-curr").submit(function(event){
         if($('#foto').val()=='') {
             if(confirm('Non hai allegato la foto. Vuoi inviare il tuo curriculum senza foto?'))
                 return true;
             else return false;
         }
         return true;
       });
     });
</script>
<div id="container">
<p><span class="Stile5">LAVORA CON NOI</span>
<br></p>
<p><strong>Invia il tuo Curriculum Vitae a Acme SPA </strong></p>

<form method="post" action="<?php echo site_url('curriculum');?>" enctype="multipart/form-data" id="form-curr">
<fieldset>
<legend>Informazioni Personali</legend>
<span style="color:#FCC713;"><?php if(!empty($error)) echo $error; ?> <?php echo validation_errors(); ?></span><br/>
* campi obbligatori
<table style="background-color: #49908A; color: #fff;">
    <tr><td>Foto</td><td><input type="file" name="foto" id="foto"/></td></tr>
    <tr><td>Cognome e Nome *</td><td><input type="text" name="cognome" size="25" value="<?php echo set_value('cognome'); ?>"/> <input type="text" name="nome" size="25" value="<?php echo set_value('nome'); ?>"/></td></tr>
    <tr><td>Data di nascita (gg/mm/aaaa) *</td><td><input type="text" name="data_di_nascita" size="10" value="<?php echo set_value('data_di_nascita'); ?>"/></td></tr>
    <tr><td>Luogo di nascita</td><td><input type="text" name="luogo_di_nascita" value="<?php echo set_value('luogo_di_nascita'); ?>"/></td></tr>
    <tr><td>Nazionalit&agrave; *</td><td><input type="text" name="nazionalita" value="<?php echo set_value('nazionalita'); ?>"/></td></tr>
    <tr><td colspan="2"><b>Residenza</b></td></tr>
    <tr><td>Indirizzo *</td><td><input type="text" name="indirizzo_residenza" size="30" value="<?php echo set_value('indirizzo_residenza'); ?>"/></td></tr>
    <tr><td>Cap, Citt&agrave;, provincia *</td><td><input type="text" name="cap_residenza" size="5" value="<?php echo set_value('cap_residenza'); ?>"/> <input type="text" name="citta_residenza" size="25" value="<?php echo set_value('citta_residenza'); ?>"/> <input type="text" name="provincia_residenza" size="2" value="<?php echo set_value('provincia_residenza'); ?>"/></td></tr>
    <tr><td>Possibilit&agrave; di alloggio in zone limitrofe</td><td><input type="radio" name="alloggio_zone_limitrofe" value="si" <?php echo set_radio('alloggio_zone_limitrofe', 'si'); ?>/>Si <input type="radio" name="alloggio_zone_limitrofe" value="no" <?php echo set_radio('alloggio_zone_limitrofe', 'no', TRUE); ?>/>No</td></tr>
    <tr><td colspan="2"><b>Domicilio</b></td></tr>
    <tr><td>Indirizzo</td><td><input type="text" name="indirizzo_domicilio" size="30" value="<?php echo set_value('indirizzo_domicilio'); ?>"/></td></tr>
    <tr><td>Cap, Citt&agrave;, provincia</td><td><input type="text" name="cap_domicilio" size="5" value="<?php echo set_value('cap_domicilio'); ?>"/> <input type="text" name="citta_domicilio" size="25" value="<?php echo set_value('citta_domicilio'); ?>"/> <input type="text" name="provincia_domicilio" size="2" value="<?php echo set_value('provincia_domicilio'); ?>"/></td></tr>
    <tr><td>Telefono *</td><td><input type="text" name="telefono" value="<?php echo set_value('telefono'); ?>"/></td></tr>
    <tr><td>Email</td><td><input type="text" name="email" value="<?php echo set_value('email'); ?>"/></td></tr>   
</table>
</fieldset>
<fieldset>
<legend>Posizione di interesse</legend>
<table cellpadding="3" cellspacing="0" border="1">
    <tr><th>Posizione di interesse</th><th><i>Titolo di studio necessario</i></th></tr>
    <tr><td><input type="checkbox" name="addette_pulizie" <?php echo set_checkbox('addette_pulizie', 'on');?>/> Addette pulizie</td><td><b>Licenza media</b></td></tr>
    <tr><td><input type="checkbox" name="audiometristi" <?php echo set_checkbox('audiometristi', 'on'); ?>/> Audiometristi</td><td><b>Laurea di tecnico audiometrista</b></td></tr>
    <tr><td><input type="checkbox" name="crenoterapista" <?php echo set_checkbox('crenoterapista', 'on'); ?>/> Crenoterapista - Operatore Termale</td><td><b>Licenza media</b></td></tr>
    <tr><td><input type="checkbox" name="esperti_sistemi_informatici" <?php echo set_checkbox('esperti_sistemi_informatici', 'on'); ?>/> Esperti Sistemi Informatici</td><td><b>Laurea o licenza superiore specifica</b></td></tr>
    <tr><td><input type="checkbox" name="estetiste" <?php echo set_checkbox('estetiste', 'on'); ?>/> Estetiste</td><td><b>Attestato di scuola da estetista</b></td></tr>
    <tr><td><input type="checkbox" name="fisioterapisti" <?php echo set_checkbox('fisioterapisti', 'on'); ?>/> Fisioterapisti</td><td><b>Laurea di fisioterapia</b></td></tr>
    <tr><td><input type="checkbox" name="impiegati" <?php echo set_checkbox('impiegati', 'on'); ?>/> Impiegati (Amministrazione - Add. Accettazione Accoglienza)</td><td><b>Licenza superiore</b></td></tr>
    <tr><td><input type="checkbox" name="isef" <?php echo set_checkbox('isef', 'on'); ?>/> Insegnanti ISEF - Scienze Motorie</td><td><b>Laurea in Scienze Motorie o Diploma di Laurea I.S.E.F.</b></td></tr>
    <tr><td><input type="checkbox" name="massoterapisti" <?php echo set_checkbox('massoterapisti', 'on'); ?>/> Masso(fisio)terapisti - Massaggiatori</td><td><b>Diploma di massaggiatore</b></td></tr>
    <tr><td><input type="checkbox" name="medici" <?php echo set_checkbox('medici', 'on'); ?>/> Medici</td><td><b>Laurea in Medicina</b></td></tr>
    <tr><td><input type="checkbox" name="operai" <?php echo set_checkbox('operai', 'on'); ?>/> Operai generici</td><td><b>Licenza media</b></td></tr>
    <tr><td><input type="checkbox" name="operai_specializzati" <?php echo set_checkbox('operai_specializzati', 'on'); ?>/> Operai specializzati (es. Falegnami - Idraulici - Elettricisti)</td><td><b>Esperienza nel settore</b></td></tr>
    <tr><td><input type="checkbox" name="posizione_altro" <?php echo set_checkbox('posizione_altro', 'on'); ?>/> <b>Altro</b> (specificare): <input type="text" name="posizione_altro_specifica" value="<?php echo set_value('posizione_altro_specifica')?>"/><br/></td><td>&nbsp;</td></tr>    
</table>
Disponibilit&agrave; a frequentare corsi di formazione <input type="radio" name="disponibile_corsi_formazione" value="si" <?php echo set_radio('disponibile_corsi_formazione', 'si', TRUE); ?>/>Si <input type="radio" name="disponibile_corsi_formazione" value="no" <?php echo set_radio('disponibile_corsi_formazione', 'no'); ?>/>No<br/>
</fieldset>

<fieldset>
<legend>Istruzione e formazione</legend>
Iniziare con le informazioni pi&ugrave; recenti ed elencare separatamente ciascun corso pertinente frequentato con successo.<br/>
<hr/>
<div><label for="formazione_data_1">Date (da - a)</label> <input type="text" size="30" id="formazione_data_1" name="formazione_data_1" value="<?php echo set_value('formazione_data_1')?>"/></div>
<div style="clear:both"></div>
<div><label for="formazione_istituto_1">Nome e tipo di istituto di formazione</label> <input type="text" size="30" id="formazione_istituto_1" name="formazione_istituto_1" value="<?php echo set_value('formazione_istituto_1')?>"/></div>
<div style="clear:both"></div>
<div><label for="formazione_qualifica_1">Qualifica conseguita</label> <input type="text" size="30" id="formazione_qualifica_1" name="formazione_qualifica_1" value="<?php echo set_value('formazione_qualifica_1')?>"/></div>
<div style="clear:both"></div>
<hr/>
<div><label for="formazione_data_2">Date (da - a)</label> <input type="text" size="30" id="formazione_data_2" name="formazione_data_2" value="<?php echo set_value('formazione_data_2')?>"/></div>
<div style="clear:both"></div>
<div><label for="formazione_istituto_2">Nome e tipo di istituto di formazione</label> <input type="text" size="30" id="formazione_istituto_2" name="formazione_istituto_2" value="<?php echo set_value('formazione_istituto_2')?>"/></div>
<div style="clear:both"></div>
<div><label for="formazione_qualifica_2">Qualifica conseguita</label> <input type="text" size="30" id="formazione_qualifica_2" name="formazione_qualifica_2" value="<?php echo set_value('formazione_qualifica_2')?>"/></div>
<div style="clear:both"></div>
<hr/>
<div><label for="formazione_data_3">Date (da - a)</label> <input type="text" size="30" id="formazione_data_3" name="formazione_data_3" value="<?php echo set_value('formazione_data_3')?>"/></div>
<div style="clear:both"></div>
<div><label for="formazione_istituto_3">Nome e tipo di istituto di formazione</label> <input type="text" size="30" id="formazione_istituto_3" name="formazione_istituto_3" value="<?php echo set_value('formazione_istituto_3')?>"/></div>
<div style="clear:both"></div>
<div><label for="formazione_qualifica_3">Qualifica conseguita</label> <input type="text" size="30" id="formazione_qualifica_3" name="formazione_qualifica_3" value="<?php echo set_value('formazione_qualifica_3')?>"/></div>
<div style="clear:both"></div>
<hr/>
<div><label for="formazione_altro" style="width:180px;">Altro</label> <textarea id="formazione_altro" style="width:360px;height:100px;" name="formazione_altro"><?php echo set_value('formazione_altro')?></textarea></div>

</fieldset>
<fieldset>
<legend>Esperienza lavorativa</legend>
<div><label for="lavoro_data_1">Date (da - a)</label> <input type="text" size="30" id="lavoro_data_1" name="lavoro_data_1" value="<?php echo set_value('lavoro_data_1')?>"/></div>
<div style="clear:both"></div>
<div><label for="lavoro_datore_1">Nome e indirizzo del datore di lavoro</label> <input type="text" size="30" id="lavoro_datore_1" name="lavoro_datore_1" value="<?php echo set_value('lavoro_datore_1')?>"/></div>
<div style="clear:both"></div>
<div><label for="lavoro_settore_1">Tipo di azienda o settore</label> <input type="text" size="30" id="lavoro_settore_1" name="lavoro_settore_1" value="<?php echo set_value('lavoro_settore_1')?>"/></div>
<div style="clear:both"></div>
<div><label for="lavoro_impiego_1">Tipo di impiego e mansione</label> <input type="text" size="30" id="lavoro_impiego_1" name="lavoro_impiego_1" value="<?php echo set_value('lavoro_impiego_1')?>"/></div>
<div style="clear:both"></div>
<div><label for="lavoro_motivo_1">Motivo cessazione</label> <input type="text" size="30" id="lavoro_motivo_1" name="lavoro_motivo_1" value="<?php echo set_value('lavoro_motivo_1')?>"/></div>
<div style="clear:both"></div>
<hr/>
<div><label for="lavoro_data_2">Date (da - a)</label> <input type="text" size="30" id="lavoro_data_2" name="lavoro_data_2" value="<?php echo set_value('lavoro_data_2')?>"/></div>
<div style="clear:both"></div>
<div><label for="lavoro_datore_2">Nome e indirizzo del datore di lavoro</label> <input type="text" size="30" id="lavoro_datore_2" name="lavoro_datore_2" value="<?php echo set_value('lavoro_datore_2')?>"/></div>
<div style="clear:both"></div>
<div><label for="lavoro_settore_2">Tipo di azienda o settore</label> <input type="text" size="30" id="lavoro_settore_2" name="lavoro_settore_2" value="<?php echo set_value('lavoro_settore_2')?>"/></div>
<div style="clear:both"></div>
<div><label for="lavoro_impiego_2">Tipo di impiego e mansione</label> <input type="text" size="30" id="lavoro_impiego_2" name="lavoro_impiego_2" value="<?php echo set_value('lavoro_impiego_2')?>"/></div>
<div style="clear:both"></div>
<div><label for="lavoro_motivo_2">Motivo cessazione</label> <input type="text" size="30" id="lavoro_motivo_2" name="lavoro_motivo_2" value="<?php echo set_value('lavoro_motivo_2')?>"/></div>
<div style="clear:both"></div>
<hr/>
<div><label for="lavoro_data_3">Date (da - a)</label> <input type="text" size="30" id="lavoro_data_3" name="lavoro_data_3" value="<?php echo set_value('lavoro_data_3')?>"/></div>
<div style="clear:both"></div>
<div><label for="lavoro_datore_3">Nome e indirizzo del datore di lavoro</label> <input type="text" size="30" id="lavoro_datore_3" name="lavoro_datore_3" value="<?php echo set_value('lavoro_datore_3')?>"/></div>
<div style="clear:both"></div>
<div><label for="lavoro_settore_3">Tipo di azienda o settore</label> <input type="text" size="30" id="lavoro_settore_3" name="lavoro_settore_3" value="<?php echo set_value('lavoro_settore_3')?>"/></div>
<div style="clear:both"></div>
<div><label for="lavoro_impiego_3">Tipo di impiego e mansione</label> <input type="text" size="30" id="lavoro_impiego_3" name="lavoro_impiego_3" value="<?php echo set_value('lavoro_impiego_3')?>"/></div>
<div style="clear:both"></div>
<div><label for="lavoro_motivo_3">Motivo cessazione</label> <input type="text" size="30" id="lavoro_motivo_3" name="lavoro_motivo_3" value="<?php echo set_value('lavoro_motivo_3')?>"/></div>
<div style="clear:both"></div>
<hr/>
<div><label for="esperienza_altro" style="width:180px;">Altro</label> <textarea id="esperienza_altro" style="width:360px;height:100px;" name="esperienza_altro"><?php echo set_value('esperienza_altro')?></textarea></div>
</fieldset>

<fieldset>
<legend>Capacit&agrave; e competenze personali</legend>
<table>
    <tr><td>Madrelingua</td><td><input type="text" name="madrelingua" size="30" value="<?php echo set_value('madrelingua')?>"/></td></tr>
    <tr><td>Conoscenze linguistiche</td>
        <td>
            <table cellpadding="3" cellspacing="0" border="1">
                <tr><th>&nbsp;</th><th>Inglese</th><th>Francese</th><th>Tedesco</th><th>Altro <input type="text" name="lingua_altro" size="10"/></th></tr>
                <tr><td>Eccellente</td><td><input type="checkbox" name="eccellente_inglese"/></td><td><input type="checkbox" name="eccellente_francese"/></td><td><input type="checkbox" name="eccellente_tedesco"/></td><td><input type="checkbox" name="eccellente_altro"/></td></tr>
                <tr><td>Buono</td><td><input type="checkbox" name="buono_inglese"/></td><td><input type="checkbox" name="buono_francese"/></td><td><input type="checkbox" name="buono_tedesco"/></td><td><input type="checkbox" name="buono_altro"/></td></tr>
                <tr><td>Elementare</td><td><input type="checkbox" name="elementare_inglese"/></td><td><input type="checkbox" name="elementare_francese"/></td><td><input type="checkbox" name="elementare_tedesco"/></td><td><input type="checkbox" name="elementare_altro"/></td></tr>
            </table>
        </td>
    </tr>
    <tr><td>Capacit&agrave; e competenze</td><td><textarea name="capacita_competenze" style="width:250px;height:100px;"><?php echo set_value('capacita_competenze')?></textarea></td></tr>
    <tr>
        <td>Capacit&agrave; e competenze tecniche<br/>(Con computer,
        attrezzature specifiche, macchinari, ecc.</td>
        <td><textarea name="capacita_competenze_tecniche" style="width:250px;height:100px;"><?php echo set_value('capacita_competenze_tecniche')?></textarea></td></tr>
    <tr><td>Altre capacit&agrave; e competenze</td><td><textarea name="capacita_competenze_altro" style="width:250px;height:100px;"><?php echo set_value('capacita_competenze_altro')?></textarea></td></tr>
    <tr><td>Tipo patente o patenti</td><td><input type="text" name="patente" size="30" value="<?php echo set_value('patente')?>"/></td></tr>
</table>
</fieldset>
    <input type="checkbox" name="check_privacy" checked="checked"/> <b>Acconsento al trattamento dei miei dati, che verranno trattati secondo informativa [...]</b><br/>
<input type="submit" id="submit" name="Submit" value="INVIA IL TUO CURRICULUM" style="width:350px; height:30px; border:1px solid #ffffff; background-color:#075F66; color:#FFFFFF; "/>
</form>
</div>
</body>
</html>
