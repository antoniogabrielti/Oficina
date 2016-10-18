<?php
$con_string = "host=ec2-54-221-226-148.compute-1.amazonaws.com
port=5432
dbname=df75f270n27ora
user=fcnbattpefrzkk
password=IOmHkF56eiNrtd9T0hsOmPC1Q5";
pg_connect($con_string) or die('Conexão falhou!');
echo "Foi Conectado no Postgres com sucesso!";
echo "E o deploy foi integrado no Heroku";