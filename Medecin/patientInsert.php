<?php
include('includes/db.php');
            $prenom=trim($_POST['prenom']);
            $nom=trim($_POST['nom']);
            $numero=trim($_POST['numero']);
            $adresse=trim($_POST['adresse']);
            $poids=trim($_POST['poids']);
            $taille=trim($_POST['taille']);
            $nomUrg=trim($_POST['nomUrg']);
            $prenomUrg=trim($_POST['prenomUrg']);
            $numeroUrg=trim($_POST['numeroUrg']);
            $adresseUrg=trim($_POST['adresseUrg']);
            $hepatiteB=trim($_POST['hepatiteB']);
            $varicelle=trim($_POST['varicelle']);
            $rougeole=trim($_POST['rougeole']);
            $antecedentsMédImp=trim($_POST['antecedentsMédImp']);
            $problemesMéd=trim($_POST['problemesMéd']);
            $medicamentsReg=trim($_POST['medicamentsReg']);
            $allergies=trim($_POST['allergies']);
            $assurance=trim($_POST['assurance']);
            $compagnie=trim($_POST['compagnie']);
            $AdresseCompagnie=trim($_POST['AdresseCompagnie']);
            $numeroPolice=trim($_POST['numeroPolice']);
            $expiration=trim($_POST['expiration']);
            $patientid=trim($_POST['patientid']);
            $code1=hash('sha256', $patientid);
            $code2=hash('sha256', $code1);
            $code3=hash('sha256', $code2);
            $date = date('Y-m-d H:i:s');
            $req_d1 = $dbconn->prepare("INSERT INTO `patientpi` SET id = ?, prenom = ?, nom = ?, numero = ?, adresse = ?, poids = ?, taille = ?");
            $req_d1->execute([$patientid, $prenom, $nom, $numero, $adresse, $poids, $taille]);

            $req_d2 = $dbconn->prepare("INSERT INTO `patienturgcase` SET nom = ?, prenom = ?, adresse = ?, numero = ?, patientId = ?");
            $req_d2->execute([$nomUrg, $prenomUrg, $numeroUrg, $adresseUrg, $code1]);

            $req_d3 = $dbconn->prepare("INSERT INTO `patienthistory` SET hepatiteB = ?, varicelle = ?, rougeole = ?, antecedentsMédImp = ?, problemesMéd = ?, medicamentsReg = ?, allergies = ?, patientId = ?");
            $req_d3->execute([$hepatiteB, $varicelle, $rougeole, $antecedentsMédImp, $problemesMéd, $medicamentsReg, $allergies, $code2]);

            $req_d4 = $dbconn->prepare("INSERT INTO `patientassurance` SET assurance = ?, compagnie = ?, adresse = ?, numeroPolice = ?, expiration = ?, patientId = ?, date = ?");
            $req_d4->execute([$assurance, $compagnie, $AdresseCompagnie, $numeroPolice, $expiration, $code3, $date]);

    $dbconn = null;