<?php
require('../db/connexionDB.php');           // Fichier PHP contenant la connexion à la BDD
session_start();                            // On démarre la session
if(!isset($_SESSION['nickname']))           // S'il n'y a pas d'utilisateur connecté, redirection vers la page de connexion
{ 
  ?>
  <script language="Javascript">
    document.location.replace("../login");
  </script>
  <?php
}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <!--Balises meta responsive-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <!--jQuery et Bootstrap JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!--Feuille de style-->
    <link rel="stylesheet" href="../style.css">
    
    <!--Titre principal et icône de la page-->
    <title>Reverse shell</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../images/deathstarw.png">
  </head>

  <body style="background-color: rgba(45,54,69)">
    <?php 
    // Inclusion de la barre de navigation
    require_once('menuCourses.php');
    ?>
    <div class="centrer" style="box-shadow: 0 5px 5px rgba(0, 0, 0, .2);">  
      <div class="breadcrumb">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../index">Home</a></li>
              <li class="breadcrumb-item"><a href="../course">Courses</a></li>
              <li class="breadcrumb-item active" aria-current="page">Reverse shell course</li>
            </ol>
          </nav>
      </div>
      <h1>Reverse shell </h1>
      <br></br>
    </div>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="group col-sm-8">
          <h3 style="text-align: justify; color: white; margin-bottom: 3%; margin-top: 10%">What is a reverse shell</h3>
          <p style="font-size: 18px; text-align: justify; color: white">
             A reverse shell is a type of session cyber attackers commonly use to open communication ports between their machines and the victims’. It is also one of the penetration testers’ go-to methods.<br></br>
             A reverse shell, also known as a “connect-back shell,” takes advantage of the target system’s vulnerabilities to initiate a shell session then gain access to the victim’s computer. The goal is to connect to a remote computer and redirect the input and output connections of the target system’s shell so the attacker can access it remotely.<br></br>
          </p>

          <h4 style="font-size: 22px; text-align: justify; color: white; margin-top: 3%">Shell Session</h4> 
          <p style="font-size: 18px; text-align: justify; color: white">
            To better understand what a reverse shell is, we need to get to know two concepts first. These are:
            <ul style="font-size: 18px; text-align: justify; color: white">
              <li>
              Normal shell session: Typically, a shell session is initiated by the local host like your computer. For instance, when you use Microsoft Windows, the Windows shell provides the start menu, taskbar, and overall desktop environment.
              </li>
              <li>
              Bind shell session: The attacker connects to a remote computer and requests a shell session. By granting the request, you are giving him or her access to your desktop. For a bind shell session to succeed, the remote computer has to be directly accessible. This requires a public Internet Protocol (IP) address, and the computer must not use a firewall.<br></br>
              </li>
              Attackers and penetration testers can easily execute a bind shell, as shown in the image below.
            </ul>

            <img src="../images/bindshell.png" class="img-fluid" style="margin-top: 5%; margin-bottom: 5%; box-shadow: 0 16px 10px -8px rgba(0, 0, 0, .4);"/>
          </p>

            <h4 style="font-size: 22px; text-align: justify; color: white; margin-top: 5%">How does a reverse shell works ?</h4>
            <p style="font-size: 18px; text-align: justify; color: white">
            Firewalls protect the victim’s network from incoming connections, so its presence discourages bind shell sessions. Instead of directly requesting a shell session, an attacker waits for a victim’s machine to initiate an outgoing connection—hence, it is called a “reverse” shell.<br></br>
            The image below sums this up: The incoming connection from an attacker’s computer is screened and blocked by the victim’s firewall. However, it doesn’t screen outgoing connections.
            <img src="../images/reverseshellpng.png" class="img-fluid" style="margin-top: 5%; margin-bottom: 5%; box-shadow: 0 16px 10px -8px rgba(0, 0, 0, .4);"/>
             With the right tool, an attacker can set it up so a victim’s computer itself initiates the outgoing connection. All an attacker has to do is listen for outgoing connections.<br></br>
             Once a shell connection is established, an attacker can get administrator privileges and execute commands directly on a victim’s operating system (OS). Cyber attackers can then freely access a victim’s network.
             You may be wondering how a victim’s computer could be set up to connect to a hacker’s system. Such a scenario is possible with the help of a piece of malware installed on a victim’s computer, either from a malicious website or phishing email.
             The malware can initiate an outgoing connection to its command center (an attacker’s computer
            </p>
            <p style="font-size: 18px; text-align: justify; color: white"> 
            <br></br>
             
            </p>
        </div>
      </div>
</div>
</body>
  <?php
  // Inclusion de la barre de navigation
  require_once('footerCourses.php'); 
  ?>
</html>


