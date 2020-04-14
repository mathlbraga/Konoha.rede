#!/bin/bash
echo "Escolha uma opção:"
echo ""
echo "[1] Listar as portas do seu computador"
echo "[2] Listar os arquivos do diretório atual"
echo "[3] Sair"
echo -n "Digite a opção: "
read opc
case $opc in
1) nmap -sS localhost
sleep 3
;;
2) ls -l
sleep 3
;;
3) exit
clear
;;


#
#1) tenta dessa forma:
#shell_exec('sudo /local/exato/do/seu/arquivo.sh');
#2) caso não consiga edite o arquivo /etc/sudoers e comente a linha que tem "Defaults requiretty"
#3) aparece a seguinte mensagem: "Warning: SAFE MODE Restriction in effect. "? olha o link abaixo:
#http://br2.php.net/manual/pt_BR/ini.sect.safe-mode.php
#4) aparece a seguinte mensagem: Warning: open_basedir restriction in effect."? olha o link abaixo:
#http://br2.php.net/manual/pt_BR/ini.sect.safe-mode.php
#
#fonte: https://www.vivaolinux.com.br/topico/PHP/Comando-exec-para-executar-aquivo-sh-shell
#https://www.php.net/manual/pt_BR/function.shell-exec.php
#<?php
#$output = `ls -al`;
#echo "<pre>$output</pre>";
#?>
#
#
#
#
#
#
#
#
