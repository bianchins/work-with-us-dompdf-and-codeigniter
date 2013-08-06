<html>
<body style="font-family:helvetica;">
<div id="container">
    <h2>Informazioni Personali</h2>
<table width="100%">
    <tr><td></td><td align="right"><img src="<?php if(isset($foto)) echo $foto; ?>"/></td></tr>
    <tr><td>Cognome e Nome: </td><td><?php echo $cognome ?> <?php echo $nome ?></td></tr>
    <tr><td>Data di nascita (gg/mm/aaaa): </td><td><?php echo $data_di_nascita ?></td></tr>
    <tr><td>Luogo di nascita: </td><td><?php echo $luogo_di_nascita ?></td></tr>
    <tr><td>Nazionalit&agrave;: </td><td><?php echo $nazionalita ?></td></tr>
    <tr><td colspan="2"><b>Residenza</b></td></tr>
    <tr><td>Indirizzo: </td><td><?php echo $indirizzo_residenza ?></td></tr>
    <tr><td>Cap, Citt&agrave;, provincia: </td><td><?php echo $cap_residenza ?> <?php echo $citta_residenza ?> <?php echo $provincia_residenza ?></td></tr>
    <tr><td>Possibilit&agrave; di alloggio in zone limitrofe: </td><td><?php if($alloggio_zone_limitrofe=='si') echo 'Si'; else echo 'No'; ?></td></tr>
    <tr><td colspan="2"><b>Domicilio</b></td></tr>
    <tr><td>Indirizzo: </td><td><?php echo $indirizzo_domicilio ?></td></tr>
    <tr><td>Cap, Citt&agrave;, provincia: </td><td><?php echo $cap_domicilio ?> <?php echo $citta_domicilio ?> <?php echo $provincia_domicilio ?></td></tr>
    <tr><td>Telefono: </td><td><?php echo $telefono ?></td></tr>
    <tr><td>Email: </td><td><?php echo $email ?></td></tr>   
</table>
<h2>Posizione di interesse</h2>
<table cellpadding="3" cellspacing="0" border="1">
    <tr><th>Posizione di interesse</th></tr>
    <tr><td>[ <?php if(!empty($addette_pulizie)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ] Addette pulizie</td></tr>
    <tr><td>[ <?php if(!empty($audiometristi)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ] Audiometristi</td></tr>
    <tr><td>[ <?php if(!empty($crenoterapista)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ] Crenoterapista - Operatore Termale</td></tr>
    <tr><td>[ <?php if(!empty($esperti_sistemi_informatici)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ] Esperti Sistemi Informatici</td></tr>
    <tr><td>[ <?php if(!empty($estetiste)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ] Estetiste</td></tr>
    <tr><td>[ <?php if(!empty($fisioterapisti)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ] Fisioterapisti</td></tr>
    <tr><td>[ <?php if(!empty($impiegati)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ] Impiegati (Amministrazione - Add. Accettazione Accoglienza)</td></tr>
    <tr><td>[ <?php if(!empty($isef)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ] Insegnanti ISEF - Scienze Motorie</td></tr>
    <tr><td>[ <?php if(!empty($massoterapisti)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ] Masso(fisio)terapisti - Massaggiatori</td></tr>
    <tr><td>[ <?php if(!empty($medici)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ] Medici</td></tr>
    <tr><td>[ <?php if(!empty($operai)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ] Operai generici</td></tr>
    <tr><td>[ <?php if(!empty($operai_specializzati)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ] Operai specializzati (es. Falegnami - Idraulici - Elettricisti)</td></tr>
    <tr><td>[ <?php if(!empty($posizione_altro)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ] <?php echo $posizione_altro_specifica ?><br/></td></tr>    
</table>
Disponibilit&agrave; a frequentare corsi di formazione: <?php if($disponibile_corsi_formazione=='si') echo 'Si'; else echo 'No'; ?><br/>

<h2>Istruzione e formazione</h2>
<div>Date (da - a): <?php echo $formazione_data_1 ?></div>
<div>Nome e tipo di istituto di formazione: <?php echo $formazione_istituto_1 ?></div>
<div>Qualifica conseguita: <?php echo $formazione_qualifica_1 ?></div>
<hr/>
<div>Date (da - a): <?php echo $formazione_data_2 ?></div>
<div>Nome e tipo di istituto di formazione: <?php echo $formazione_istituto_2 ?></div>
<div>Qualifica conseguita: <?php echo $formazione_qualifica_2 ?></div>
<hr/>
<div>Date (da - a): <?php echo $formazione_data_3 ?></div>
<div>Nome e tipo di istituto di formazione: <?php echo $formazione_istituto_3 ?></div>
<div>Qualifica conseguita: <?php echo $formazione_qualifica_3 ?></div>
<hr/>
<div><label for="formazione_altro" style="width:180px;">Altro</label> <?php echo $formazione_altro ?></div>

<h2>Esperienza lavorativa</h2>
<div>Date (da - a): <?php echo $lavoro_data_1 ?></div>
<div>Nome e indirizzo del datore di lavoro: <?php echo $lavoro_datore_1 ?></div>
<div>Tipo di azienda o settore: <?php echo $lavoro_settore_1 ?></div>
<div>Tipo di impiego e mansione: <?php echo $lavoro_impiego_1 ?></div>
<div>Motivo cessazione <?php echo $lavoro_motivo_1 ?></div>
<hr/>
<div>Date (da - a): <?php echo $lavoro_data_2 ?></div>
<div>Nome e indirizzo del datore di lavoro: <?php echo $lavoro_datore_2 ?></div>
<div>Tipo di azienda o settore: <?php echo $lavoro_settore_2 ?></div>
<div>Tipo di impiego e mansione: <?php echo $lavoro_impiego_2 ?></div>
<div>Motivo cessazione <?php echo $lavoro_motivo_2 ?></div>
<hr/>
<div>Date (da - a): <?php echo $lavoro_data_3 ?></div>
<div>Nome e indirizzo del datore di lavoro: <?php echo $lavoro_datore_3 ?></div>
<div>Tipo di azienda o settore: <?php echo $lavoro_settore_3 ?></div>
<div>Tipo di impiego e mansione: <?php echo $lavoro_impiego_3 ?></div>
<div>Motivo cessazione <?php echo $lavoro_motivo_3 ?></div>
<hr/>
<div><label for="esperienza_altro" style="width:180px;">Altro</label> <?php echo $esperienza_altro ?></div>


<h2>Capacit&agrave; e competenze personali</h2>
<table>
    <tr><td>Madrelingua: </td><td><?php echo $madrelingua ?></td></tr>
    <tr><td>Conoscenze linguistiche: </td>
        <td>
            <table cellpadding="3" cellspacing="0" border="1">
                <tr><th>&nbsp;</th><th>Inglese</th><th>Francese</th><th>Tedesco</th><th><?php if(!empty($eccellente_inglese)) echo $lingua_altro; ?></th></tr>
                <tr><td>Eccellente</td><td>[ <?php if(!empty($eccellente_inglese)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ]</td><td>[ <?php if(!empty($eccellente_francese)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ]</td><td>[ <?php if(!empty($eccellente_tedesco)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ]</td><td>[ <?php if(!empty($eccellente_altro)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ]</td></tr>
                <tr><td>Buono</td><td>[ <?php if(!empty($buono_inglese)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ]</td><td>[ <?php if(!empty($buono_francese)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ]</td><td>[ <?php if(!empty($buono_tedesco)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ]</td><td>[ <?php if(!empty($buono_altro)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ]</td></tr>
                <tr><td>Elementare</td><td>[ <?php if(!empty($elementare_inglese)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ]</td><td>[ <?php if(!empty($elementare_francese)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ]</td><td>[ <?php if(!empty($elementare_tedesco)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ]</td><td>[ <?php if(!empty($elementare_altro)) echo '<b>X</b>'; else echo '<b>&nbsp;</b>';?> ]</td></tr>
            </table>
        </td>
    </tr>
    <tr><td>Capacit&agrave; e competenze: </td><td><?php echo $capacita_competenze?></td></tr>
    <tr>
        <td>Capacit&agrave; e competenze tecniche: <br/>(Con computer,
        attrezzature specifiche, macchinari, ecc.</td>
        <td><?php echo $capacita_competenze_tecniche ?></td></tr>
    <tr><td>Altre capacit&agrave; e competenze: </td><td><?php echo $capacita_competenze_altro ?></td></tr>
    <tr><td>Tipo patente o patenti: </td><td><?php echo $patente; ?></td></tr>
</table>
<br/>
<p align="justify">
[ X ] <b>Acconsento al trattamento dei miei dati, che verranno trattati secondo informativa e consenso ai sensi del D. Lgs. n&ordm; 196/2003 e successive modificazioni,  sulla tutela delle persone e altri soggetti rispetto al trattamento dei dati personali.</b>
Il/la sottoscritto/a nel conferire il proprio Curriculum Vitae all'Azienda Acme Spa, acconsente al trattamento da parte dell'Azienda medesima dei dati in esso contenuti solo ed esclusivamente per finalit&agrave; gestionali e statistiche, iniziative marketing e promozioni legate alla propria attivit&agrave;.
Il/la sottoscritto/a dichiara inoltre, all'atto del conferimento dei propri dati, di essere informato/a per quanto previsto dall'art. 13 del D. Lgs. 196/2003 ivi compresi i diritti che, in relazione al trattamento a cui espressamente acconsente, gli derivano ai sensi dell'art. 7 del medesimo D. Lgs.</p>
</body>
</html>
